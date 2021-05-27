<?php
require_once "view/includes/header.php" ;

if($_SESSION['logged']==0){
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

<!-- --------------- -->

<div class="container col-lg-4 w-50 p-5">
<form action="http://localhost/brief5/matiere/makeedit/<?php echo $matiereedit->id?>" method="POST">
    
            <div class="form-group mb-2">

                <label for="exampleInputEmail1" class="mb-2" >Name</label>

                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $matiereedit->name?>">

            </div>

       
            <button type="submit" class="btn btn-primary " style="float: right;">Save</button>
        </form>
    </div>

<!-- --------------- -->


</body>
</html>
