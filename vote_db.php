<?php

//ตั้งค่าการเชื่อมต่อฐานข้อมูล
include('conn.php');

if(isset($_POST['emp_data'])){

$emp_data = $_POST['emp_data'];
$emp = explode(",", $emp_data);

$vote_number = $_POST['groupvote'];

foreach ($vote_number as $vote_number=>$value) {
    echo ("vote_number");
$check = "SELECT * FROM `vote_log` WHERE vote_number = '$value' ";
$result_check = $conn->query($check);
$res = $result_check->fetch_array();

if ($result_check->num_rows > 0) {

    $count = $res['vote_count'] + 1;

    $sql1 = "UPDATE vote_log SET vote_count = '$count' WHERE vote_number = '$value' ";
    $result1 = mysqli_query($conn, $sql1);

} else {

    $sql1 = "INSERT INTO vote_log (vote_number,vote_count) VALUES ('$value',1)";
    $result1 = mysqli_query($conn, $sql1);
}

}

$sql = "INSERT INTO vote (vote_emp_id) VALUES ('$emp[0]')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('โหวดสำเร็จ!');
    window.location.href='index.php';
    </script>");
} else {
    echo json_encode(['status' => 'error', 'message' => 'Error']);
}

}
