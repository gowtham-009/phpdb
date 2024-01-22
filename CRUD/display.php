<?php
include 'connect.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>display data</title>
  </head>
  <body>
  <div class="container mt-5">
    <button type="button" class="btn btn-danger">
        <a href="user.php" class="text-white">Add user</a>
    </button>
    <button type="button" class="btn btn-primary">
        <a href="truncate.php" class="text-white">Truncate</a>
    </button>

    <table class="table mt-4">
  <thead>
    <tr>
      <th scope="col">S NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATION</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $sql="select * from `datas`";
   $result=mysqli_query($con,$sql);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];  
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td><button type="button" class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-white">Update</a> </button>
        <button type="button" class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-white">Delete</a></button></td>
      </tr>' ;
    }
   }


  ?>
  </tbody>
</table>
  </div>
  </body>
</html>