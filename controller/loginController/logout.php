<?php
require_once ('../../model/db/dbhelper.php');
if(isset($_POST['logout'])){
session_destroy();
unset($_SESSION['student_id']);
unset($_SESSION['student']);
header("location:../../index");
}
?>