<?php
require 'db/dbhelper.php';
Class Attend extends DBHelper{
    private $table = 'tbl_attend';
    private $fields = array(
        'event_id',
        'stud_idno'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addAttend($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllAttend(){
     return DBHelper::getAllRecord($this->table);
 }
 function getAttendById($ref_id){
    return DBHelper::getRecordById($this->table,'attend_no',$ref_id);
}
function getAttend($ref_id){
    return DBHelper::getRecord($this->table,'attend_no',$ref_id);
}
// Update
function updateAttend($data,$ref_id){
    return DBHelper::updateRecord($this->table,$this->fields,$data,'attend_no',$ref_id); 
 }
 // Delete
 function deleteAttend($ref_id){
          return DBHelper::deleteRecord($this->table,'attend_no',$ref_id);
}
// Some Functions
    function getCountAttend(){
        return DBHelper::countRecord('attend_no',$this->table);
    }
}
?>