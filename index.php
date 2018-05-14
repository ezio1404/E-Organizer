<?php
  include 'model/eventModel.php';
  $event= new Event();
  $events=$event->getAllEvent();
  $fields=$event->getFields();
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
    <link rel="stylesheet" href="view/assets/css/3-col-portfolio.css" >
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
        <a class="nav-link" href="register">Register</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="controller/loginController/login" method="post">
          <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" ><i class="fa fa-id-card"></i></span>
                </div>
                  <input type="text" required class="form-control" placeholder="Id Number" id="idno" name="idno" >
          </div> 
          <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" ><i class="fa fa-lock"></i></span>
                  </div>
                    <input class="form-control" required type="password" id="pass" name="pass" placeholder="Password">
          </div>    
          <div class="input-group mb-3">
          <div class="input-group-prepend">
                    <span class="input-group-text" >
                        <input type="radio" checked="checked" name="type" id="student" value="student">
                    </span>
                  </div>
                    <label class="form-control" for="student">Student</label>
                    <div class="input-group-prepend">
                    <span class="input-group-text" >
                        <input type="radio" name="type" id="organizer" value="organizer">
                    </span>
                  </div>
                    <label class="form-control" for="organizer">Organizer</label>       
          </div> 
          <div>
            <small>Don't have an account ?<a href="register">Register now</a></small>
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
<?php
?>

<div class="row">
<?php
  foreach($events as $e){
?>
     <div class="col-lg-4 col-sm-6 portfolio-item" style="padding: 10px 50px;">
            <div class="card h-100">
              <img class="card-img-top"  src="<?php echo $e['event_avatar'];?>" alt="<?php echo $e['event_avatar'];?>">
              <div class="card-body">
                <h4 class="card-title">
                  <?php echo $e['event_title'];?>
                </h4>
                <p class="card-text"><?php echo $e['event_desc'];?></p>
                <p class="card-text">Venue :<?php echo $e['event_venue'];?></p>
                <p class="card-text">No. of Guest :<?php echo $e['event_guest'];?></p>
                
                <div>
                  <label for="date">Date : <?php echo $e['event_date'];?></label>
                  <label for="timeStart">Starting Time : <?php echo $e['event_start_time'];?></label>
                  <label for="timeEnd">End Time : <?php echo $e['event_end_time'];?></label>
                </div>
              </div>
              <button type="button"  class="text-dark nav-link btn btn-light btn-outline-light" data-toggle="modal" data-target="#exampleModal">
                Join
              </button>
            </div>
        </div>
  <?php
 }
  ?>
</div>

    <script src="view/assets/js/jquery.js"></script>
    <script src="view/assets/js/bootstrap.min.js"></script>
</body>
</html>




















