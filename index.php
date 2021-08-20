<?php 
require_once('./template/Header.php');

if (isset($_GET['insider'])){
    include('insider.php');
}elseif (isset($_GET['outsider'])){
    include('outsider.php');
}else{
    include('Home.php');
}


require_once('./template/Footer.php');
 ?>