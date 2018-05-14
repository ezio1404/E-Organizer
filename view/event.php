<?php
session_start();
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
<div class="container float">
    <h2 class="header">
        Create Event
    </h2>
    <form action="../controller/eventController/addEvent.php" method="POST">
   <div class="form-group">
      <div class="row">
         <div class="col">
            <div class="input-group">
               <div class="input-group-prepend">
                  <label  class="input-group-text" for="event_title">Event Title :</label>
               </div>
               <input type="text" class="form-control" placeholder="Event Title" name="event_title">
            </div>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="row">
         <div class="col">
         <div class="input-group">
               <div class="input-group-prepend">
                  <label  class="input-group-text" for="event_desc">Event Description :</label>
               </div>
               <input type="text" class="form-control" id="event_desc" placeholder="Event Description" name="event_desc">
            </div>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="row">
         <div class="col">
         <div class="input-group">
               <div class="input-group-prepend">
                  <label  class="input-group-text" for="event_venue">Event Venue :</label>
               </div>
               <input type="text" class="form-control" id="event_venue" placeholder="Event Venue" name="event_venue">
            </div>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="row">
         <div class="col">
            <div class="input-group">
               <div class="input-group-prepend">
                  <label  class="input-group-text" for="event_date">Event Date :</label>
               </div>
               <input type="date" class="form-control" id="event_date" value="<?php echo date('Y-m-d'); ?>" name="event_date">
            </div>
         </div>
      </div>
   </div>
   <div class="form-group">
      <div class="row">
      <div class="col">
            <div class="input-group">
               <div class="input-group-prepend">
                  <label  class="input-group-text" for="event_start_time">Event Start Time :</label>
               </div>
               <input type="time" class="form-control" id="event_start_time"  name="event_start_time">
            </div>
         </div>
         <label>to</label>
         <div class="col">
            <div class="input-group">
               <div class="input-group-prepend">
                  <label  class="input-group-text" for="event_end_time">Event End Time :</label>
               </div>
               <input type="time" class="form-control" id="event_end_time"  name="event_end_time">
            </div>
         </div>
      </div>
   </div>
    <input type="number" hidden value="<?php echo $_SESSION['user_id'];?>" name="event_organizer"> 
</form>
    
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