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
    <a  href="http://localhost/brief5/enseignent/create"><button class="btn btn-success btn-block m-5 " style="float: right;">Create</button></a>
  </div>
  

 
 
  <div class="container m-auto w-50 ">
  <table class="table text-center">



      <tr>
        
        <th>Salle</th>
        <th>groupe</th>
        <th>matiere</th>
        <th>date</th>
        <th>heure</th>
        <th>Action</th>

      </tr>
     
     

  </table>
  </div>


</body>

</html>