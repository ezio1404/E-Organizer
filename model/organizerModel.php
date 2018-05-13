<?php
require 'db/dbhelper.php';
Class Organizer extends DBHelper{
    private $table = 'tbl_organizer';
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
function addOrg($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllOrg(){
     return DBHelper::getAllRecord($this->table);
 }
 function getOrgById($ref_id){
    return DBHelper::getRecordById($this->table,'idno',$ref_id);
}
function getOrg($ref_id){
    return DBHelper::getRecord($this->table,'idno',$ref_id);
}
// Update
function updateOrg($data,$ref_id){
    return DBHelper::updateRecord($this->table,$this->fields,$data,'idno',$ref_id); 
 }
 // Delete
 function deleteOrg($ref_id){
          return DBHelper::deleteRecord($this->table,'idno',$ref_id);
}
// Some Functions
    function getCountOrg(){
        return DBHelper::countRecord('idno',$this->table);
    }
}
?>