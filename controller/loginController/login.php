<?php
require '../../model/loginModel.php';
$log = new Login();
if(isset($_POST['login'])){ // button name login 
    $idno = $_POST['idno'];
    $pass = $_POST['pass'];
    $type = $_POST['type'];
    $ok=$log->login($idno,$pass,$type);
    if ($ok){
        header('location:../../view/index?id='.$_SESSION['user_id'].'?user='.$_SESSION['user_type']); // redirect page
    }
    else{
        header('location:../../index?id=' . "Error_Logging_In");
    }
}