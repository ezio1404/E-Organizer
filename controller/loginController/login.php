<?php
require '../../model/loginModel.php';
$login = new Login();
if(isset($_POST['login'])){ // button name login 
    $username = $_POST['idno'];
    $password = $_POST['pass'];
    $ok=$login->login($username,$password);
    if ($ok){
    header('location:../../view/index?id=' .$_SESSION['student_id']); // redirect page
    }
    else{
        header('location:../../index');
    }
}