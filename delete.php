
<?php
//print_r($_POST);


include "./vendor/autoload.php";
use pondit\b7\Model\Student;
$id = $_GET['id'];
$user_ob = new Student;

 $user_ob->delete($id);

 header('Location:index.php');

?>


