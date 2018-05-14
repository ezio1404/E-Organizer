<?php
require '../../model/eventModel.php';
$Event = new Event();
if(isset($_POST['register'])){ 
    $flag=true;
    $event_title = htmlentities($_POST['event_title']);
    $event_desc = htmlentities($_POST['event_desc']);
    $event_date =  htmlentities($_POST['event_date']);
    $event_start_time =  htmlentities($_POST['event_start_time']);
    $event_end_time =  htmlentities($_POST['event_end_time']);
    $event_venue = htmlentities($_POST['event_venue']);
    $event_organizer =  htmlentities($_POST['event_organizer']);
    $event_guest =  htmlentities($_POST['event_guest']);
    $event_avatar =  htmlentities($_FILES['image']['name']);//----
    if ($image != '')
    {
        $directory = "../../view/image/";
        $path = time().$image;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $directory . $path))
        {
            $studArr=array($event_title,$event_desc, $event_date,$event_start_time,$event_end_time,$event_venue, $event_organizer,$event_guest,$event_avatar);
            for($i=0;$i<count($studArr);$i++){
                if($studArr[$i]==""){
                    $flag=false;
                    break;
                }
            }
            if($flag){
                $Event->addStud($studArr);
             }
             else{
                $message = "Invalid Credentials";
                echo "<script type='text/javascript'>alert('$message');</script>";  
             }
             header('location:../../index');

        }
    }








    

}