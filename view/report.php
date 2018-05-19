<?php
   include '../model/eventModel.php';
   $event= new Event();
   $log=$event->getAllLog();
   $events=$event->getAllEvent();
   $fields=$event->getFields();
   $fields2=array('Log ID','Stud Idno','Date Created');
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
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/fonts/web-fonts-with-css/css/fontawesome-all.min.css">
</head>
<body>
    <?php include('nav.php');
    
    ?>

  <div class="row">
    <div class="col">
      

<table class="table table-striped table-hover" id="dataTable1" >
  <thead>
    <?php
     foreach($fields as $f){
         if($f!="event_avatar"){
    ?>
    <th><?php echo $f?></th>
    <?php
     }
     }
    ?>
  </thead>
    <tbody>
    <?php
     foreach($events as $e){
        if($_SESSION['user_id']==$e['org_idno'] || ($_SESSION['user_type']=="student")){
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
    </tr>
    <?php
        }
     }
    ?>
    </tbody>
</table>

    </div>
    <div class="col">
    <table class="table table-striped table-hover" id="dataTable2" >
  <thead>
    <?php
     foreach($fields2 as $fs){
    ?>
    <th><?php echo $fs?></th>
    <?php
     }
    ?>
  </thead>
    <tbody>
    <?php
     foreach($log as $l){
    ?>
    <tr>
    <td><?php echo $l['log_id'];?></td>
    <td><?php echo $l['stud_idno'];?></td>
    <td><?php echo $l['date_created'];?></td>
    </tr>
    <?php
     }
    ?>
    </tbody>
</table>
    </div>
  </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable1').DataTable( {
            } );
        } );
    </script>
        <script>
        $(document).ready(function() {
            $('#dataTable2').DataTable( {
            } );
        } );
    </script>
<?php
}
else{
    $message="Please Login";
    header('location:../index?'.$message);
}
?>
</body>
</html>