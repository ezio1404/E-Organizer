<?php
require '../../model/StudentModel.php';
$Student = new Student();
$data = file_get_contents("php://input");
$request = json_decode($data);
$id = $request->cust_id;
$row = $Student->getStudById($id);
echo json_encode($row);