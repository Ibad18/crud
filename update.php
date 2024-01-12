<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "select * from `crud` where id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    $sql = "update `crud` set id = '$id', name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id = $id";
      $result = mysqli_query($con, $sql);
    if ($result){
        header("location: display.php");
        // echo "Data inserted successfully";
    }
else {

    die(mysqli_error($con));
}}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <!-- form -->

        <br><h1>Add User Form</h1><br>
        <form method="post">
            <div class="mb-3 col-lg-6 col-md-6">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="<?php echo $name;?>" name="name" placeholder="enter your name">
            </div>
            <div class="mb-3 col-lg-6 col-md-6">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email;?> placeholder="enter your email address">
            </div>
            <div class="mb-3 col-lg-6 col-md-6">
                <label class="form-label">Mobile Number</label>
                <input type="text" class="form-control" name="mobile" value="<?php echo $mobile;?> placeholder="enter mobile number">
            </div>
            <div class="mb-3 col-lg-6 col-md-6">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" value="<?php echo $password;?> name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-success">Update</button>
        </form>


    </div>


    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>