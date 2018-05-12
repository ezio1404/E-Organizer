<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E Organizer</title>
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/fonts/web-fonts-with-css/css/fontawesome-all.min.css">
    <!-- <link rel="stylesheet" href="view/assets/css/3-col-portfolio.css" > -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">E-Organizer</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      
      <li class="nav-item active">
        <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
    </ul>

  <!-- Button trigger modal -->

<button type="button"  class="text-dark nav-link btn btn-light btn-outline-light" data-toggle="modal" data-target="#exampleModal">
  Login
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller/loginController/login" method="post">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-id-card"></i></span>
              </div>
                <input type="text" class="form-control" placeholder="Id Number" id="idno" name="idno" >
                </div> 
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
              </div>
              <input class="form-control" type="password" id="pass" name="pass" placeholder="Password">
              
          </div>    
          
      </div>
      <div class="modal-footer">
        <input class="btn btn-primary" type="submit" value="Login" name="login">
      </div>
      </form>
    </div>
  </div>
</div>

  </div>
</nav>
    <script src="view/assets/js/jquery.js"></script>
    <script src="view/assets/js/bootstrap.min.js"></script>
</body>
</html>