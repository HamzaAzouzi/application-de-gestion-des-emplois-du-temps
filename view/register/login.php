<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/styles.css">
  
  <title>Document</title>
</head>

<body>
  <div class="container-fluid d-flex justify-content-center align-items-center ">
    <div class="row content rounded-3">
      <div class="col m-6"> <!--<img src="1.jpg" alt="">--> 
        <video playsinline="" autoplay="" muted="" loop="" width="100%" __idm_id__="693208065">
          <source src="https://global-uploads.webflow.com/5bcb46130508ef456a7b2930/5d05f6f1c9e4d68fe9d0ac8a_drawkit-grape-pack-illustration-1-transcode.mp4" type="video/mp4">
        </video>
      </div>
      <div class="col d-flex align-items-center p-4 ">

        <form action="http://localhost/brief5/user/lgn" class=" col d-flex   align-items-center flex-column " method="POST">
          <div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="email">
           
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
          </div>
          <!-- <div class="mb-3 form-check">

            
          </div> -->
          <button type="submit" class="btn btn-primary">Sign in</button> <br> <br>

          Don't have an account ? <a href=" http://localhost/brief5/user/signup " class="">Sign up</a>
          </div>
        </form>

      </div>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->

  </body>

</html>
