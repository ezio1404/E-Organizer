<?php
require 'db/dbhelper.php';
Class Login extends DBHelper{
    function __construct(){
        return DBHelper::__construct();
    }
    function login($user,$pass,$type){
        return DBHelper::logginUser($user,$pass,$type);
    }
}