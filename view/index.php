<?php
   include '../model/eventModel.php';
   $event= new Event();
   $events=$event->getAllEvent();
   $fields=$event->getFields();
if($_SESSION){

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Organizer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/web-fonts-with-css/css/fontawesome-all.min.css">
</head>
<body>
    <?php include('nav.php');
 
    ?>

<div class="row">
<?php
  foreach($events as $e){
    if($_SESSION['user_id']==$e['org_idno'] || ($_SESSION['user_type']=="student")){
?>
     <div class="col-lg-4 col-sm-6 portfolio-item " style="padding: 10px 50px;">
            <div class="card h-100">
              <img class="card-img-top"  src="<?php echo substr_replace($e['event_avatar'],"",0,5);?>" alt="<?php echo substr_replace($e['event_avatar'],"",0,5)?>">
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
              <?php
              if($_SESSION['user_type']=="student"){
              ?>
              <div class="container">
                  <form action="../controller/attendController/Addattend.php" method="post">
                  <input type="number" name="event_id" id="event_id" hidden value="<?php echo $e['event_id'];?>">
                  <input type="number" name="stud_idno" id="stud_idno" hidden  value="<?php echo $_SESSION['user_id'];?>">
                  <input type="submit" value="Join"  class="btn btn-primary" name="attend">
                </form>
             </div>
             <?php
              }
                }
              ?>
            </div>
        </div>
  <?php
 }
  ?>
</div>




    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
<?php
}
else{
    $message="Please Login";
    header('location:../index?'.$message);
}
?>
</body>
</html>