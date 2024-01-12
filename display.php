<?php
include 'connect.php';
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

<body style="font-family: Verdana, Geneva, Tahoma, sans-serif">
    <div class="container my-5">

  <a href="user.php"><button class="btn btn-primary">Add user</button></a>     

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php 
        $sql = "Select * from `crud`";
        $result = mysqli_query($con, $sql);
        if ($result){
            while ($row = mysqli_fetch_array($result)) {
            $id = $row["id"];
            $name = $row["name"];
            $email = $row["email"];
            $mobile = $row["mobile"];
            $password = $row["password"];

            echo'
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <a href="update.php?updateid='.$id.'"><button class="btn btn-secondary">Update</button></a>
            <a href="delete.php?deletedid='.$id.'"><button class="btn btn-danger">Delete</button></a>
            </td>

          </tr>                
            ';


            }
        }
?>

  </tbody>
</table>


    </div>


    <!-- bootstrap link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>