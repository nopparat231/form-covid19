

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

// document.addEventListener("DOMContentLoaded", function () {
//   var elems = document.querySelectorAll(".autocomplete");
//   var instances = M.Autocomplete.init(elems);
//   console.log(elems);
//   console.log(instances[0].count);

// //เช็ครหัสว่างให้ลบออก//
// $('#autocomplete-input').on('keyup',function(){
//   console.log('keyup')
// if ( instances[0].count === 0 ) {
//   console.log('no matches');
//   //alert('ไม่พบข้อมูลพนักงาน');
//   $('#autocomplete-input').val('');
// }
// })
// //เช็ครหัสว่างให้ลบออก//

// });

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
    format: "dd-mm-yyyy",
  };
  var elems = document.querySelector(".datepicker");
  var instance = M.Datepicker.init(elems, options);
  // instance.open();
  //instance.setDate(new Date());
});

document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".timepicker");
  var instances = M.Timepicker.init(elems, {
    autoClose: true,
    defaultTime: "now",
    twelveHour: false,
  });
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
var el = document.getElementById("timepicker_time_in");
if (el) {
  document.getElementById("timepicker_time_in").value =
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
    emp_check_shift = $("#emp_shift :selected").val(),
    emp_data_old = $form.find("input[name='emp_data']").val(),
    group1 = $form.find('input[name="group1"]:checked').val(),
    group2 = $form.find('input[name="group2"]:checked').val(),
    group101 = $form.find('input[name="group101"]:checked').val(),
    emp_check_time = new Date().toLocaleDateString("th-TH", {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
      hour: "2-digit",
      minute: "2-digit",
    }),
    emp_data = emp_data_old.split(","),
    url = $form.attr("action");

  //เช็คถ้าข้อมูลไม่มีในระบบ
  if (emp_data[1] == undefined) {
    alert("ไม่พบข้อมูลพนักงาน กรุณากรอกอีกครั้ง!");
    location.reload();
  }
  //เงือนไขพนักงาน
  if (group101 == 0 && (group1 == 1 || group2 == 1)) {
    emp_check_status = 1; // ไม่ผ่าน
  } else {
    emp_check_status = 0; // ผ่าน
  }
  var data_e = JSON.stringify({
    emp_check_shift: emp_check_shift,
    emp_check_emp_id: Number(emp_data[0]),
    emp_check_2: group1,
    emp_check_3: group2,
    emp_check_4: group101,
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
    if (group101 == 0 && (group1 == 1 || group2 == 1)) {
      document.getElementById("date_show1").innerHTML =
        new Date().toLocaleDateString("th-TH", {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
          hour: "2-digit",
          minute: "2-digit",
        });

      document.getElementById("name_show1").innerHTML = emp_data[1];
      const elem = document.getElementById("modal1");
      const instance = M.Modal.init(elem, { dismissible: false });
      instance.open();
    } else {
      document.getElementById("date_show2").innerHTML =
        new Date().toLocaleDateString("th-TH", {
          weekday: "long",
          year: "numeric",
          month: "long",
          day: "numeric",
          hour: "2-digit",
          minute: "2-digit",
        });
      document.getElementById("name_show2").innerHTML = emp_data[1];

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
    //
    outsider_check_timepicker_time_in = $form
      .find("input[name='timepicker_time_in']")
      .val(),
    outsider_check_timepicker_time_out = $form
      .find("input[name='timepicker_time_out']")
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
    outsider_check_vcc = $form.find("input[name='select_vcc']").val(),
    outsider_check_time = new Date().toLocaleDateString("th-TH", {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
      hour: "2-digit",
      minute: "2-digit",
    }),
    //ส่งของไฟล์ ชื่อไฟล์
    outsider_check_file = $form.find("input[name='uploaded_image']").val(),
    outsider_check_file1 = $form.find("input[name='uploaded_image1']").val(),
    //จบการเก็บข้อมูล
    url = $form.attr("action");

  //เงื่อนไขบุคคลภายนอก

  if (
    outsider_check_group1 == 1 ||
    outsider_check_group2 == 1 ||
    // outsider_check_group3 == 1 ||
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
    outsider_check_vcc: outsider_check_vcc,
    outsider_check_file: outsider_check_file,
    outsider_check_file1: outsider_check_file1,
    outsider_check_time: outsider_check_time,
    outsider_check_status: outsider_check_status,
    outsider_check_timepicker_time_in: outsider_check_timepicker_time_in,
    outsider_check_timepicker_time_out: outsider_check_timepicker_time_out,

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
      outsider_check_group4 == 1
    ) {
      document.getElementById("name_report2").innerHTML =
        outsider_check_first_name + "  " + outsider_check_last_name;
      document.getElementById("date_report2").innerHTML = outsider_check_time;
      const elem = document.getElementById("modal22"); // modal for not pass
      const instance = M.Modal.init(elem, { dismissible: false });
      instance.open();
    } else {
      document.getElementById("name_report1").innerHTML =
        outsider_check_first_name + "  " + outsider_check_last_name;
      document.getElementById("date_report1").innerHTML = outsider_check_time;
      const elem = document.getElementById("modal11"); // modal for pass
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

//อัพโหลดไฟล์1//
const upload_image = (file) => {
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
      document.getElementById("uploaded_image").value = responseData;
    });
};

const sample_image = document.getElementsByName("sample_image")[0];
if (sample_image) {
  sample_image.addEventListener("change", () => {
    upload_image(sample_image.files[0]);
  });
}

//อัพโหลดไฟล์2//
const upload_image1 = (file) => {
  const form_data1 = new FormData();
  form_data1.append("sample_image1", file);

  fetch("store.php", {
    method: "POST",
    body: form_data1,
  })
    .then(function (response) {
      return response.json();
    })
    .then(function (responseData) {
      document.getElementById("uploaded_image1").value = responseData;
    });
};

const sample_image1 = document.getElementsByName("sample_image1")[0];
if (sample_image1) {
  sample_image1.addEventListener("change", () => {
    upload_image1(sample_image1.files[0]);
  });
}




