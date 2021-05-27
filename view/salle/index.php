<?php
require_once "view/includes/header.php" ;

if($_SESSION['logged']==0){
  header("location:http://localhost/brief5/user/login");
}
?>

 <body>  


<div class="container row">
    <a  href="http://localhost/brief5/salle/create"><button class="btn btn-success btn-block m-5 " style="float: right;">Create</button></a>
  </div>
  
  <div class="container m-auto w-50 ">
  <table class="table text-center">



      <tr>
        
        <th>Name</th>
        <th>Capacity</th>
        <th>Action</th>

      </tr>
  <?php foreach($salles as $salle){ ?>
      <tr>
        
        <td > <?php echo $salle['name'] ?> </td >
        <td > <?php echo $salle['capacity'] ?> </td>
        <td > <a class="btn btn-success  " href="http://localhost/brief5/salle/edit/<?php echo $salle['id'] ?>">Edit</a> <a class="btn btn-danger  " href="http://localhost/brief5/salle/Delete/<?php echo $salle['id'] ?>">Delete</a> </td>

      </tr>

    <?php }  ?>

  </table>
  </div>
 
</body>
</html>