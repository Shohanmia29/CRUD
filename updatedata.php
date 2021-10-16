<?php
require_once 'db.php';
$id=$_GET['id'];
$sql="SELECT * FROM `students` WHERE id=$id";
$query=mysqli_query(getconnection(),$sql);
$user=mysqli_fetch_assoc($query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Application</title>
  </head>
  <body>
      <!-- form start here -->
    <div class="container h-auto  shadow py-3">
        <h1 class="text-primary">CRUD Application</h1>
        <form class="form form-responsive" action="editdata.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
            <input class="form-control mt-2" type="text" placeholder="Enter your name" value="<?php echo $user['username'];?>" name="username" required>
            <input class="form-control mt-2" type="number" placeholder="Enter your Roll number" value="<?php echo $user['roll'];?>" name="roll" required>
            <input class="form-control mt-2" type="file" value="<?php echo $user['file'];?>" name="file" required>
            <input class="form-control mt-2 bg-warning" type="submit" name="btn" value="Update">
        </form>
    </div>
