<?php
//กำหนดค่า Access-Control-Allow-Origin ให้ เครื่อง อื่น ๆ สามารถเรียกใช้งานหน้านี้ได้
header("Access-Control-Allow-Origin: *");

header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");

header("Access-Control-Max-Age: 3600");

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

//ตั้งค่าการเชื่อมต่อฐานข้อมูล
include('conn.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

//อ่านข้อมูลที่ส่งมาแล้วเก็บไว้ที่ตัวแปร data
$data = file_get_contents("php://input");
//echo json_encode($data);

//แปลงข้อมูลที่อ่านได้ เป็น array แล้วเก็บไว้ที่ตัวแปร result
$result = json_decode($data, true);

//echo $result['emp_check_emp_id'];
//ตรวจสอบการเรียกใช้งานว่าเป็น Method POST หรือไม่
if ($requestMethod == 'POST') {

    if (!empty($result)) {

        if ($result['check_part'] == 1) {
            $emp_check_shift = $result['emp_check_shift'];
            $emp_check_emp_id = $result['emp_check_emp_id'];
            $emp_check_2 = $result['emp_check_2'];
            $emp_check_3 = $result['emp_check_3'];
            $emp_check_4 = $result['emp_check_4'];
            $emp_check_status = $result['emp_check_status'];
            $emp_check_time = $result['emp_check_time'];

            //คำสั่ง SQL สำหรับเพิ่มข้อมูลใน Database
            $sql = "INSERT INTO emp_check_form (emp_check_id,emp_check_shift,emp_check_emp_id,emp_check_2,emp_check_3,emp_check_4,emp_check_status,emp_check_time) VALUES (NULL,'$emp_check_shift','$emp_check_emp_id','$emp_check_2','$emp_check_3','$emp_check_4','$emp_check_status','$emp_check_time')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo json_encode(['status' => 'ok', 'message' => 'Insert Data Complete']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error']);
            }
        } elseif ($result['check_part'] == 2) {

            $outsider_check_datepicker_date = $result['outsider_check_datepicker_date'];
            $outsider_check_timepicker_date = $result['outsider_check_timepicker_date'];
            $outsider_check_first_name = $result['outsider_check_first_name'];
            $outsider_check_last_name = $result['outsider_check_last_name'];
            $outsider_check_national_id = $result['outsider_check_national_id'];
            $outsider_check_national_phone = $result['outsider_check_national_phone'];
            $outsider_check_agency = $result['outsider_check_agency'];
            $outsider_check_location_out = $result['outsider_check_location_out'];
            $outsider_check_contact = $result['outsider_check_contact'];
            $outsider_check_location_in = $result['outsider_check_location_in'];
            $outsider_check_contact_matter = $result['outsider_check_contact_matter'];
            $outsider_check_group1 = $result['outsider_check_group1'];
            $outsider_check_group2 = $result['outsider_check_group2'];
            $outsider_check_group3 = $result['outsider_check_group3'];
            $outsider_check_vcc = $result['outsider_check_vcc'];
            $outsider_check_group4 = $result['outsider_check_group4'];

            //file แรก
            $outsider_check_file = $result['outsider_check_file'];
            //file ที่สอง
            $outsider_check_file1 = $result['outsider_check_file1'];

            $outsider_check_status = $result['outsider_check_status'];
            $outsider_check_time = $result['outsider_check_time'];
            $outsider_check_timepicker_time_in = $result['outsider_check_timepicker_time_in'];
            $outsider_check_timepicker_time_out = $result['outsider_check_timepicker_time_out'];


            //คำสั่ง SQL สำหรับเพิ่มข้อมูลใน Database
            $sql = "INSERT INTO outsider_check_form 
            (outsider_check_id ,outsider_check_datepicker_date,outsider_check_timepicker_date,
            outsider_check_first_name,outsider_check_last_name,outsider_check_national_id,
            outsider_check_national_phone,outsider_check_agency,outsider_check_location_out,
            outsider_check_contact,outsider_check_location_in,outsider_check_contact_matter,
            outsider_check_group1,outsider_check_group2,outsider_check_group3,outsider_check_vcc,
            outsider_check_group4,outsider_check_file,outsider_check_status,outsider_check_time,
            outsider_check_timepicker_time_in,outsider_check_timepicker_time_out,outsider_check_file1) 
            VALUES (NULL,'$outsider_check_datepicker_date','$outsider_check_timepicker_date',
            '$outsider_check_first_name','$outsider_check_last_name','$outsider_check_national_id',
            '$outsider_check_national_phone','$outsider_check_agency','$outsider_check_location_out',
            '$outsider_check_contact','$outsider_check_location_in','$outsider_check_contact_matter',
            '$outsider_check_group1','$outsider_check_group2','$outsider_check_group3','$outsider_check_vcc',
            '$outsider_check_group4','$outsider_check_file','$outsider_check_status','$outsider_check_time',
            '$outsider_check_timepicker_time_in','$outsider_check_timepicker_time_out',
            '$outsider_check_file1')";



            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo json_encode(['status' => 'ok', 'message' => 'Insert Data Complete']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error']);
            }
        }
    }

    //อัพไฟล์
    if (isset($_FILES['sample_image'])) {

        $extension = pathinfo($_FILES['sample_image']['name'], PATHINFO_EXTENSION);

        $new_name = time() . '.' . $extension;

        move_uploaded_file($_FILES['sample_image']['tmp_name'], 'upload/' . $new_name);

        $data = array(
            'image_name' => $new_name
        );

        echo json_encode($new_name);
    }

    if (isset($_FILES['sample_image1'])) {

        $extension = pathinfo($_FILES['sample_image1']['name'], PATHINFO_EXTENSION);

        $new_name1 = time() . '.' . $extension;

        move_uploaded_file($_FILES['sample_image1']['tmp_name'], 'upload/' . $new_name1);

        $data = array(
            'image_name1' => $new_name1
        );

        echo json_encode($new_name1);
    }
}
