(function ($) {
  $(function () {
    $(".sidenav").sidenav();
  }); // end of document ready
})(jQuery); // end of jQuery name space

document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".modal");
  var instances = M.Modal.init(elems);
  $(".modal").modal({
    dismissible: false,
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".autocomplete");
  var instances = M.Autocomplete.init(elems);
});

function sendItem(ele, e) {
  if (e.isTrigger != undefined) {
    console.log(
      "Key: " +
        ele.value +
        " | Value: " +
        $(ele).nextAll(".dropdown-content").find("img").attr("src")
    );
  }
}
$(".autocomplete").each(function () {
  let self = this;
  let inputText = $(this).val();
  $(this).autocomplete();
  $(this).on("input change", function () {
    $.ajax({
      url: "db.php?key=" + inputText,
      type: "post",
      cache: false,
      data: {
        some: "data",
      },

      success: function (data) {
        data = JSON.parse(data);
        $(self).autocomplete("updateData", data /*should be object*/);

        //console.log(data);
      },
      error: function (err) {
        console.log(err);
      },
    });
    // setTimeout(function() {
    //     var first_date_year = document.getElementById('autocomplete-input').val;
    //     document.getElementById('emp_name').innerHTML = first_date_year;
    // }, 2000);
  });
});

document.addEventListener("DOMContentLoaded", function () {
  var options = {
    defaultDate: new Date(),
    setDefaultDate: true,
    format:'dd-mm-yyyy'
  };
  var elems = document.querySelector(".datepicker");
  var instance = M.Datepicker.init(elems, options);
  // instance.open();
  //instance.setDate(new Date());
});

document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".timepicker");
  var instances = M.Timepicker.init(elems, {autoClose:true,defaultTime:'now',twelveHour:false});
  //instance.setDate(new Date());
});
// เวลา
var el = document.getElementById("timepicker_date");
if (el) {
  document.getElementById("timepicker_date").value =
    new Date().toLocaleTimeString("en-US", {
      hour12: false,
      hour: "numeric",
      minute: "numeric",
    });
}
//วัคซีน
document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll("select");
  var instances = M.FormSelect.init(elems);
});
$(document).ready(function () {
  $("select").formSelect();
});

$("#group3id1").on("click", function () {
  $("#select_v").show();
});

$("#group3id2").on("click", function () {
  $("#select_v").hide();
});

//Ajax CRUD

$("#emp_check").submit(function (event) {
  // Stop form from submitting normally
  event.preventDefault();

  // Get some values from elements on the page:
  var $form = $(this),
    emp_data_old = $form.find("input[name='emp_data']").val(),
    group1 = $form.find('input[name="group1"]:checked').val(),
    group2 = $form.find('input[name="group2"]:checked').val(),
    emp_check_time = Date.now(),
    emp_data = emp_data_old.split(","),
    url = $form.attr("action");

  if (group1 == 1 || group2 == 1) {
    emp_check_status = 1;
  } else {
    emp_check_status = 0;
  }
  var data_e = JSON.stringify({
    emp_check_emp_id: Number(emp_data[0]),
    emp_check_2: group1,
    emp_check_3: group2,
    emp_check_status: emp_check_status,
    emp_check_time: emp_check_time,
    check_part: 1,
  });

  //Send the data using post
  var posting = $.post(url, data_e);

  //Put the results in a div
  posting.done(function (data) {
    console.log(data);
    //เงื่อนไข
    if (group1 == 1 || group2 == 1) {
      const elem = document.getElementById("modal1");
      const instance = M.Modal.init(elem, { dismissible: false });
      instance.open();
    } else {
      const elem = document.getElementById("modal2");
      const instance = M.Modal.init(elem, { dismissible: false });
      instance.open();
    }
  });

  posting.fail(function (xhr, textStatus, error) {
    console.log(xhr.statusText);
    console.log(textStatus);
    console.log(error);
    console.log(data_e);
  });
});

//ส่วนบุคคลภายนอก
$("#outsider_check").submit(function (event) {
  // Stop form from submitting normally
  event.preventDefault();
  // Get some values from elements on the page:
  var $form = $(this),
    outsider_check_datepicker_date = $form
      .find("input[name='datepicker_date']")
      .val(),
    outsider_check_timepicker_date = $form
      .find("input[name='timepicker_date']")
      .val(),
    outsider_check_first_name = $form.find("input[name='first_name']").val(),
    outsider_check_last_name = $form.find("input[name='last_name']").val(),
    outsider_check_national_id = $form.find("input[name='national_id']").val(),
    outsider_check_national_phone = $form.find("input[name='phone']").val(),
    outsider_check_agency = $form.find("input[name='agency']").val(),
    outsider_check_location_out = $form
      .find("input[name='location_out']")
      .val(),
    outsider_check_contact = $form.find("input[name='contact']").val(),
    outsider_check_location_in = $form.find("input[name='location_in']").val(),
    outsider_check_contact_matter = $form
      .find("textarea[name='contact_matter']")
      .val(),
    outsider_check_group1 = $form.find('input[name="group1"]:checked').val(),
    outsider_check_group2 = $form.find('input[name="group2"]:checked').val(),
    outsider_check_group3 = $form.find('input[name="group3"]:checked').val(),
    outsider_check_group4 = $form.find('input[name="group4"]:checked').val(),

    outsider_check_vcc = $('#select_vcc').find(":selected").text();
    
    outsider_check_time = Date.now(),
    url = $form.attr("action");

  //ส่งของไฟล์

  outsider_check_file = $form.find("input[name='uploaded_image']").val();

  //เงื่อนไขบุคคลภายนอก

  if (
    outsider_check_group1 == 1 ||
    outsider_check_group2 == 1 ||
    outsider_check_group3 == 1 ||
    outsider_check_group4 == 1
  ) {
    outsider_check_status = 1;
  } else {
    outsider_check_status = 0;
  }

  var data_e = JSON.stringify({
    outsider_check_datepicker_date: outsider_check_datepicker_date,
    outsider_check_timepicker_date: outsider_check_timepicker_date,
    outsider_check_first_name: outsider_check_first_name,
    outsider_check_last_name: outsider_check_last_name,
    outsider_check_national_id: outsider_check_national_id,
    outsider_check_national_phone: outsider_check_national_phone,
    outsider_check_agency: outsider_check_agency,
    outsider_check_location_out: outsider_check_location_out,
    outsider_check_contact: outsider_check_contact,
    outsider_check_location_in: outsider_check_location_in,
    outsider_check_contact_matter: outsider_check_contact_matter,
    outsider_check_group1: outsider_check_group1,
    outsider_check_group2: outsider_check_group2,
    outsider_check_group3: outsider_check_group3,
    outsider_check_group4: outsider_check_group4,
    outsider_check_vcc:outsider_check_vcc,
    outsider_check_file: outsider_check_file,
    outsider_check_status: outsider_check_status,
    outsider_check_time: outsider_check_time,
    check_part: 2,
  });
  //Send the data using post
  var posting = $.post(url, data_e);

  //Put the results in a div
  posting.done(function (data) {
    console.log(data);

    //   //เงื่อนไข
    if (
      outsider_check_group1 == 1 ||
      outsider_check_group2 == 1 ||
      outsider_check_group3 == 1 ||
      outsider_check_group4 == 1
    ) {
      const elem = document.getElementById("modal22");
      const instance = M.Modal.init(elem, { dismissible: false });
      instance.open();
    } else {
      const elem = document.getElementById("modal11");
      const instance = M.Modal.init(elem, { dismissible: false });
      instance.open();
    }
  });

  posting.fail(function (xhr, textStatus, error) {
    console.log(xhr.statusText);
    console.log(textStatus);
    console.log(error);

    //เงื่อนไขเช็ค Model เด่ง
  });
});
//อัพโหลดไฟล์//
const upload_image = (file) => {
  // //เช็คประเภทไฟล์
  // if (!["image/jpeg", "image/png"].includes(file.type)) {
  //   document.getElementById("uploaded_image").innerHTML =
  //     '<div class="alert alert-danger">Only .jpg and .png image are allowed</div>';

  //   document.getElementsByName("sample_image")[0].value = "";

  //   return;
  // }
  // //เช็คขนาดไฟล์ (< 2MB)
  // if (file.size > 2 * 1024 * 1024) {
  //   document.getElementById("uploaded_image").innerHTML =
  //     '<div class="alert alert-danger">File must be less than 2 MB</div>';

  //   document.getElementsByName("sample_image")[0].value = "";
  //   return;
  // }

  const form_data = new FormData();
  form_data.append("sample_image", file);

  fetch("store.php", {
    method: "POST",
    body: form_data,
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (responseData) {
      //console.log(responseData);
      document.getElementById("uploaded_image").value = responseData;
      //outsider_check_file = responseData;
    });
};

const sample_image = document.getElementsByName("sample_image")[0];
if (sample_image) {
  sample_image.addEventListener("change", () => {
    upload_image(sample_image.files[0]);
  });
}

//อัพโหลดไฟล์//
