
<?php
require '../../model/studentModel.php';
$Student = new Student();
echo json_encode($Student->getAllStud());