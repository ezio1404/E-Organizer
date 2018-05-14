<?php
require '../../model/attendModel.php';
$Attend = new Attend();
if(isset($_POST['attend'])){ 
    $flag=true;
    $event_id =  htmlentities($_POST['event_id']);
    $stud_idno =  htmlentities($_POST['stud_idno']);
    $AttendArr=array($event_id,$stud_idno);
    for($i=0;$i<count($AttendArr);$i++){
        if($AttendArr[$i]==""){
            $flag=false;
            break;
        }
    }
    if($flag){
        $Attend->addAttend($AttendArr);
     }
     else{
        $message = "Invalid Credentials";
        echo "<script type='text/javascript'>alert('$message');</script>";  
     }
     header('location:../../view/index?id='.$_SESSION['user_id'].'?user='.$_SESSION['user_type']);
}