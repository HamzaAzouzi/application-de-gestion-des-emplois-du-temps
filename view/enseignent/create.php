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

    <div class="container col-lg-4 w-50 p-5">
        <form action="http://localhost/brief5/enseignent/save" method="POST">
            <div class="form-group mb-2">

                <label for="exampleInputEmail1" class="mb-3">Salle</label>

                <select class="form-control" name="id_salle" id="">
                    <?php foreach ($salles as $salle) { ?>
                        <option value="<?php echo $salle['id'] ?>"> <?php echo $salle['name'] ?></option>
                    <?php } ?>
                </select>

            </div>


            <div class="form-group mb-2">

                <label for="exampleInputEmail1" class="mb-3">groupe</label>

                <select class="form-control" name="id_groupe" id="">
                    <?php foreach ($groupes as  $groupe) { ?>
                        <option value="<?php echo $groupe['id'] ?>"> <?php echo $groupe['name'] ?></option>
                    <?php } ?>
                </select>


            </div>


            <div class="form-group mb-3">
                <label for="exampleInputPassword1" class="mb-3">Date </label>
                <input type="date" class="form-control" id="exampleInputPassword1" name="date">
                <input type="hidden" class="form-control" id="exampleInputPassword1" value="" name="id_matiere">
            </div>


            <div class="form-group mb-2">

                <label for="exampleInputEmail1" class="mb-3">Heure</label>

                <select class="form-control" name="heure" id="">
                    <option value="08:00:00">08:00-10:00</option>
                    <option value="10:00:00">10:00-12:00</option>
                    <option value="12:00:00">12:00-14:00</option>
                    <option value="14:00:00">14:00-16:00</option>
                    <option value="16:00:00">16:00-18:00</option>
                </select>

            </div>



            <button type="submit" class="btn btn-primary " style="float: right;">Save</button>
        </form>
    </div>
</body>

</html>