<?php
session_start();
//print_r($_POST);
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//DATABASE CONNECT

$_SESSION['messege'] = "successfully created";
header('Location:index.php');
?>
