<?php
require '../../model/studentModel.php';
$Student = new Student();
if(isset($_POST['register'])){ 
    $flag=true;
    $idnumber = htmlentities($_POST['idnumber']);
    $fname = htmlentities($_POST['fname']);
    $lname =  htmlentities($_POST['lname']);
    $email =  htmlentities($_POST['email']);
    $password =  htmlentities($_POST['password']);
    $studArr=array($idnumber,$fname, $lname,$email,$password);
    for($i=0;$i<count($studArr);$i++){
        if($studArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Student->addStud($studArr);
     }
     else{
        $message = "Invalid Credentials";
        echo "<script type='text/javascript'>alert('$message');</script>";  
     }
     header('location:../../index');
}