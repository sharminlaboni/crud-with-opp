

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data table</title>
</head>
<body>
<?php
include_once "./vendor/autoload.php";
use pondit\b7\Model\Student;
$user_ob = new Student;
$result=$user_ob->get_all();
$user_ob = null;
?>
    <a class="submit" href="./create.php">Create user</a>
    <?php
    if (isset($_SESSION['messege'])){
        echo $_SESSION['messege'];
        session_destroy();
    }
    
    ?>

    <table border=1>
        <thead>
            <tr>
                <th>serial</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
                <?php $i=0;foreach($result as $key =>$user){?>
                 
                <tr>   
                <td><?=++$i?></td>
                <td><?=$user['name']?></td>
                <td><?=$user['address']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['phone']?></td>
                <td>
                <a class="submit" href="show.php?id=<?=$user['id']?>">show</a>
                <a class="submit" href="edit.php?id=<?=$user['id']?>">Edit</a>
                <a class="submit" onclick="alert('Delete user')" href="delete.php?id=<?=$user['id']?>">Delete</a>
                </td>   
                </tr>
                <?php } ?>
            
        </tbody>
    </table>
</body>
</html>