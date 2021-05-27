<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styles.css">  
  <title>sign up</title>
</head>

<body>
  <div class="container-fluid d-flex justify-content-center align-items-center ">
    <div class="row content rounded-3">
      <div class="col "> <!--<img src="1.jpg" alt="">--> 
        <video playsinline="" autoplay="" muted="" loop="" width="100%" __idm_id__="693208071">
            <source src="https://global-uploads.webflow.com/5bcb46130508ef456a7b2930/5d06154c6a9360b7a49538b6_drawkit-grape-pack-illustration-8-transcode.mp4" type="video/mp4">
          </video>
      </div>
      <div class="col d-flex align-items-center p-4">

        <form action="http://localhost/brief5/user/up" class=" col d-flex   align-items-center flex-column" method="POST">
          <div class="mb-3">

            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email Address</label>
            <input  name="email" type="email" class="form-control" id="exampleInputPassword1">
          </div>
          
          <div class="form-group mb-2">

                <label for="exampleInputEmail1" class="mb-3">Matiere</label>

                <select class="form-control " name="id_matiere" id="">
                    <?php foreach ($matieres as  $matiere) { ?>
                        <option value="<?php echo $matiere['id'] ?>"> <?php echo $matiere['name'] ?></option>
                    <?php } ?>
                </select>


            </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Create password</label>
            <input   name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
           
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input  name="confirm" type="password" class="form-control" id="exampleInputPassword1">
          </div>
       
          <button  type="submit" class="btn btn-primary">Sign up</button> <br> 

          Don't have an accent ? <a href="http://localhost/brief5/user/login" class="">Sign in</a>
          
        </form>

      </div>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->

  </body>

</html>
