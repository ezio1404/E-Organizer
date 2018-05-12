<?php
require 'db/dbhelper.php';
Class Student extends DBHelper{
    private $table = 'tbl_student';
    private $fields = array(
        'idno',
        'fname',
        'lname',
        'email',
        'password'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addStud($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllStud(){
     return DBHelper::getAllRecord($this->table);
 }
 function getStudById($ref_id){
    return DBHelper::getRecordById($this->table,'idno',$ref_id);
}
function getStud($ref_id){
    return DBHelper::getRecord($this->table,'idno',$ref_id);
}
// Update
function updateStud($data,$ref_id){
    return DBHelper::updateRecord($this->table,$this->fields,$data,'idno',$ref_id); 
 }
 // Delete
 function deleteStud($ref_id){
          return DBHelper::deleteRecord($this->table,'idno',$ref_id);
}
// Some Functions
    function getCountStud(){
        return DBHelper::countRecord('idno',$this->table);
    }
}
?>