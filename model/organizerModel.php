<?php
require 'db/dbhelper.php';
Class Organizer extends DBHelper{
    private $table = 'tbl_organizer';
    private $fields = array(
        'org_org_idno',
        'org_fname',
        'org_lname',
        'org_email',
        'org_password'
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
    return DBHelper::getRecordById($this->table,'org_idno',$ref_id);
}
function getOrg($ref_id){
    return DBHelper::getRecord($this->table,'org_idno',$ref_id);
}
// Update
function updateOrg($data,$ref_id){
    return DBHelper::updateRecord($this->table,$this->fields,$data,'org_idno',$ref_id); 
 }
 // Delete
 function deleteOrg($ref_id){
          return DBHelper::deleteRecord($this->table,'org_idno',$ref_id);
}
// Some Functions
    function getCountOrg(){
        return DBHelper::countRecord('org_idno',$this->table);
    }
}
?>