<?php
    require_once 'db.php';
    $sql="SELECT * FROM `students`";
    $user_query=mysqli_query(getconnection(),$sql);

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
        <form class="form form-responsive" action="functional.php"  htmlspecialchars   method="post" enctype="multipart/form-data">
            <input class="form-control mt-2" type="text" placeholder="Enter your name" name="user_name" required>
            <input class="form-control mt-2" type="number" placeholder="Enter your Roll number" name="roll" required>
            <input class="form-control mt-2" type="file" name="file" required>
            <input class="form-control mt-2 bg-warning" type="submit" name="btn" value="Submit">
        </form>
    </div>
   <!-- form end here -->
<!-- table section here  -->
<div class="container mt-6 shadow py-3">
       <table class="table table-striped table-hover">
           <tbody>
               <th>ID</th>
               <th>UserName</th>
               <th>Roll</th>
               <th>Picture</th>
               <th>Action</th>
               <?php
               while ($result= mysqli_fetch_assoc($user_query))
               {
                   ?>

              <tr>
                 <td><?php echo $result['id']; ?></td>
                  <td><?php echo $result['username'] ?></td>
                  <td><?php echo $result['roll'] ?></td>
                  <td><img src="<?php echo 'upload/'.$result['photo']?>" alt="<?php echo $result['photo']?>" width="100" height="100"></td>
                  <td>
                      <input class="bg-success btn text-white rounded" type="submit" name="edit" value="edit">
                      <input class="bg-danger btn text-white rounded" type="submit" name="edit" value="delete">
                  </td>
              </tr>
               <?php
               }
               ?>
           </tbody>
       </table>
    </div>

<!-- table section end  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>