<?php
require '../../model/eventModel.php';
$Event = new Event();
echo json_encode ($Event->getAllEvent());