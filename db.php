<?php
include('conn.php');

$key = $_GET['key'];
$array = array();
$Emp_id = array();
$Name_Surname = array();

$query= "select * from emp where Emp_id LIKE '%{$key}%'"; 
$res = mysqli_query($conn, $query);

if($res->num_rows>0){
while($row = $res->fetch_assoc()){
$array[trim($row["Emp_id"])." , ". $row["Name_Surname"]] = null;
}
}
echo json_encode($array);
