<?php

date_default_timezone_set('Asia/Bangkok');

 $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
 $servername = "us-cdbr-east-04.cleardb.com";
 $username = "bf51557ab4d545";
 $password = "67ec157f";
 $db = "heroku_f9aa036de2e8ee1";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "covid19";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
