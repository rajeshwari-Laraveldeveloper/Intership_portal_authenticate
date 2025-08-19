<?php 
include('config.php');


if(!empty($_SESSION['companyemail'])){
    header('Location:employerlogin.php');
}
include('adminheader.php');
?>