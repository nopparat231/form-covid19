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
  var elems = document.querySelectorAll(".datepicker");
  var instances = M.Datepicker.init(elems);
});

// Or with jQuery

$(document).ready(function () {
  $(".datepicker").datepicker();
});

document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll(".timepicker");
  var instances = M.Timepicker.init(elems);
});

// Or with jQuery

$(document).ready(function () {
  $(".timepicker").timepicker();
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
  });
});
