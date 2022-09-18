
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
    <title>user data</title>
</head>
<body>
<a class="submit" href="index.php">List</a>

    <div>

        <div class="contrainer">
            <h1>User information</h1><hr>
            <p>Name:<b><?=$user['name']?></b></p>
            <p>Address:<b><?=$user['address']?></b></p>
            <p>Email:<b><?=$user['email']?></b></p>
            <p>Phone:<b><?=$user['phone']?></b></p>
        </div>
    </div>
</body>
</html>