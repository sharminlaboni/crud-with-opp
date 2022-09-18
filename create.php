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
    <form action="./store.php" method="POST">
        <h1>Student Information</h1>
        
        <div class="mb-3">
        <label for="name" class="form-label">Name :</label>
        <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">

        <label for="address"class="form-label">Address:</label>
        <input type="text" class="form-control" name="address" id="address">
        </div>
        <div class="mb-3">
        <label for="email"class="form-label">Email :</label>
        <input type="email"class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
        <label for="phone"class="form-label">phone : </label>
        <input type="number"class="form-control" name="phone" id="phone">
        </div>
        
        <button type="submit">submit</button>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>



