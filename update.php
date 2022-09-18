<?php 


include "./vendor/autoload.php";
use pondit\b7\Model\Student;
$id = $_GET['id'];
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$data=[
'id' => $id,
'name'=> $name,
'address'=>$address,
'email' =>$email,
'phone'=>$phone

];
$user_ob = new Student;

$user = $user_ob->update($data,$id);



header('Location:index.php');






?>