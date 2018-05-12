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



    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
<?php
}
else{

?>

<?php
    $message="Please Login";
    header('location:../index?'.$message);
}
?>
</body>
</html>