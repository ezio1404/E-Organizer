<?php
require '../../model/eventModel.php';
$Event = new Event();
if(isset($_POST['addEvent'])){ 
    $flag=true;
    $event_title = htmlentities($_POST['event_title']);
    $event_desc = htmlentities($_POST['event_desc']);
    $event_date =  htmlentities($_POST['event_date']);
    $event_start_time =  htmlentities($_POST['event_start_time']);
    $event_end_time =  htmlentities($_POST['event_end_time']);
    $event_venue = htmlentities($_POST['event_venue']);
    $event_guest =  htmlentities($_POST['event_guest']);
    $event_organizer =  htmlentities($_POST['event_organizer']);
    $event_avatar =  $_FILES['event_avatar']['name'];//----
        $directory = "../../view/image/";
        $path = time().$event_avatar;
        $eventArr=array($event_title,$event_desc, $event_date,$event_start_time,$event_end_time,$event_venue, $event_guest,$event_organizer);
        for($i=0;$i<count($eventArr);$i++){
            if($eventArr[$i]==''){
                $flag=false;
                break;
            }
        }
            if($flag){
                if (move_uploaded_file($_FILES['event_avatar']['tmp_name'], $directory . $path))
                {
                    $directory2="view/image/";
                    array_push($eventArr,$directory2.$path);
                    $Event->addEvent($eventArr);
                    header('location:../../view/index?Success_creating');
                }
                else{
                    header('location:../../view/index?Error_adding');
                }
             }
             else{
                $message = "Invalid Credentials";
                echo "<script type='text/javascript'>alert('$message');</script>";  
             }
             header('location:../../view/index?shit');
}
