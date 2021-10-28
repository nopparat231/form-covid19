<?php 
error_reporting(0);
require_once('./template/Header.php');

if (isset($_GET['insider'])){
    include('insider.php');
}elseif (isset($_GET['outsider'])){
    include('outsider.php');
}elseif (isset($_GET['vote'])){
    include('vote.php');
}else{
    include('Home.php');
}


require_once('./template/Footer.php');
 ?>