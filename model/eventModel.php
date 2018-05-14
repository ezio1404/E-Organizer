<?php
require 'db/dbhelper.php';
Class Event extends DBHelper{
    private $table = 'tbl_event';
    private $fields = array(
        'event_title',
        'event_desc',
        'event_date',
        'event_start_time',
        'event_end_time',
        'event_venue',
        'event_guest',
        'org_idno',
        'event_avatar'
    );
//constructor
    function __construct(){
        return DBHelper::__construct();
    }
// Create
function addEvent($data){
    return DBHelper::insertRecord($data,$this->fields,$this->table); 
 }
// Retreive
 function getAllEvent(){
     return DBHelper::getAllRecord($this->table);
 }
 function getEventById($ref_id){
    return DBHelper::getRecordById($this->table,'event_id',$ref_id);
}
function getEvent($ref_id){
    return DBHelper::getRecord($this->table,'event_id',$ref_id);
}
// Update
function updateEvent($data,$ref_id){
    return DBHelper::updateRecord($this->table,$this->fields,$data,'event_id',$ref_id); 
 }
 // Delete
 function deleteEvent($ref_id){
          return DBHelper::deleteRecord($this->table,'event_id',$ref_id);
}
// Some Functions
    function getCountEvent(){
        return DBHelper::countRecord('event_id',$this->table);
    }
    function getFields(){
        return $this->fields;
    }
    function getProcEvent(){
        return DBHelper::getProcedure($this->table);
    }
}
?>