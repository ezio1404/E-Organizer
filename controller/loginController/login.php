<?php
require '../../model/loginModel.php';
$log = new Login();
if(isset($_POST['login'])){ // button name login 
    $idno = $_POST['idno'];
    $pass = $_POST['pass'];
    $ok=$log->login($idno,$pass);
    if ($ok){
    header('location:../../view/index?id='.$_SESSION['student_id']); // redirect page
    }
    else{
        header('location:../../index?id=' . "asd");
    }
}