<?php

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
    <style>
    <style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
</style>
    </style>
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
  include 'model/eventModel.php';
  $event= new Event();
  $events=$event->getAllEvent();
  $fields=$event->getFields();
?>
<table class="table table-striped table-hover" >
  <thead>
    <?php
     foreach($fields as $f){
    ?>
    <th><?php echo $f?></th>
    <?php
     }
    ?>
  </thead>
    <tbody>
    <?php
     foreach($events as $e){
    ?>
    <tr>

    <td><?php echo $e['event_id'];?></td>
    <td><?php echo $e['event_title'];?></td>
    <td><?php echo $e['event_desc'];?></td>
    <td><?php echo $e['event_date'];?></td>
    <td><?php echo $e['event_start_time'];?></td>
    <td><?php echo $e['event_end_time'];?></td>
    <td><?php echo $e['event_venue'];?></td>
    <td><?php echo $e['event_guest'];?></td>
    <td><button type="button"  class="text-dark nav-link btn btn-light btn-outline-light" data-toggle="modal" data-target="#exampleModal">
  Login
</button></td>
    </tr>
    <?php
     }
    ?>
    </tbody>
</table>


    <script src="view/assets/js/jquery.js"></script>
    <script src="view/assets/js/bootstrap.min.js"></script>
</body>
</html>