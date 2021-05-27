<?php
require_once "view/includes/header.php";

if ($_SESSION['logged'] == 0) {
  header("location:http://localhost/brief5/user/login");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <div class="container row">
    <a  href="http://localhost/brief5/groupe/create"><button class="btn btn-success btn-block m-5 " style="float: right;">Create</button></a>
  </div>
  
  <div class="container m-auto w-50 ">
  <table class="table text-center">


 

      <tr>
        
        <th>Name</th>
        <th>Capacity</th>
        <th>Action</th>

      </tr>
         <?php foreach ($groupes as $groupe) { ?>
      <tr>
        
        <td > <?php echo $groupe['name'] ?> </td >
        <td > <?php echo $groupe['capacity'] ?> </td>
        <td > <a class="btn btn-success  " href="http://localhost/brief5/groupe/edit/<?php echo $groupe['id'] ?>">Edit</a> <a class="btn btn-danger  " href="http://localhost/brief5/groupe/Delete/<?php echo $groupe['id'] ?>">Delete</a> </td>

      </tr>

    <?php }  ?>

  </table>
  </div>


</body>

</html>