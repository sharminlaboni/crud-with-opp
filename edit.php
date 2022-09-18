<?php
include_once "./vendor/autoload.php";
use pondit\b7\Model\Student;
$id = $_GET['id'];

$user_ob = new Student;
$user = $user_ob->show($id);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>student information</title>
</head>
<body>
    <form action="update.php" method="POST">
        <h1>update form Information</h1>
        

        <input type="hidden" name="id" id="id" value="<?=$user['id']?>" >
        <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control" name="name" id="name" value="<?=$user['name']?>">
        </div>
        <div class="mb-3">

        <label for="address"class="form-label">Address:</label>
        <input type="text" class="form-control" name="address" id="address"value="<?=$user['address']?>">
        </div>
        <div class="mb-3">
        <label for="email"class="form-label">Email :</label>
        <input type="email"class="form-control" name="email" id="email" value="<?=$user['email']?>">
        </div>
        <div class="mb-3">
        <label for="phone"class="form-label">phone : </label>
        <input type="number"class="form-control" name="phone" id="phone" value="<?=$user['phone']?>">
        </div>
        
        <button type="submit">update</button>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>



