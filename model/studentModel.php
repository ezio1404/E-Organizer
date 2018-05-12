<?php
require 'db/dbhelper.php';
Class Student extends DBHelper{
    private $table = 'tbl_student';
    private $fields = array(
        'stud_idno',
        'stud_fname',
        'stud_lname',
        'stud_email',
        'stud_password'
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
    return DBHelper::getRecordById($this->table,'stud_idno',$ref_id);
}
function getStud($ref_id){
    return DBHelper::getRecord($this->table,'stud_idno',$ref_id);
}
// Update
function updateStud($data,$ref_id){
    return DBHelper::updateRecord($this->table,$this->fields,$data,'stud_idno',$ref_id); 
 }
 // Delete
 function deleteStud($ref_id){
          return DBHelper::deleteRecord($this->table,'stud_idno',$ref_id);
}
// Some Functions
    function getCountStud(){
        return DBHelper::countRecord('stud_idno',$this->table);
    }
}
?>