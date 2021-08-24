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
            $emp_check_emp_id = $result['emp_check_emp_id'];
            $emp_check_2 = $result['emp_check_2'];
            $emp_check_3 = $result['emp_check_3'];
            $emp_check_status = $result['emp_check_status'];
            $emp_check_time = $result['emp_check_time'];

            //คำสั่ง SQL สำหรับเพิ่มข้อมูลใน Database
            $sql = "INSERT INTO emp_check_form (emp_check_id,emp_check_emp_id,emp_check_2,emp_check_3,emp_check_status,emp_check_time) VALUES (NULL,'$emp_check_emp_id','$emp_check_2','$emp_check_3','$emp_check_status','$emp_check_time')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo json_encode(['status' => 'ok', 'message' => 'Insert Data Complete']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error']);
            }
        } elseif ($result['check_part'] == 2) {

            $emp_check_emp_id = $result['emp_check_emp_id'];
            $emp_check_2 = $result['emp_check_2'];
            $emp_check_3 = $result['emp_check_3'];
            $emp_check_status = $result['emp_check_status'];
            $emp_check_time = $result['emp_check_time'];

            //คำสั่ง SQL สำหรับเพิ่มข้อมูลใน Database
            $sql = "INSERT INTO emp_check_form (emp_check_id,emp_check_emp_id,emp_check_2,emp_check_3,emp_check_status,emp_check_time) VALUES (NULL,'$emp_check_emp_id','$emp_check_2','$emp_check_3','$emp_check_status','$emp_check_time')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo json_encode(['status' => 'ok', 'message' => 'Insert Data Complete']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error']);
            }
        }
    }

    if (!empty($_FILES['file']['name'])) {
        /* Get the name of the uploaded file */
        $filename = $_FILES['file']['name'];

        /* Choose where to save the uploaded file */
        $location = "upload/" . $filename;

        /* Save the uploaded file to the local filesystem */
        if (move_uploaded_file($_FILES['file']['tmp_name'], $location)) {
            return $filename;
        } else {
            echo 'Failure';
        }
    }
}
