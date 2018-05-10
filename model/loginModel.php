<?php
require 'db/dbhelper.php';
Class Login extends DBHelper{
    function __construct(){
        return DBHelper::__construct();
    }
    function login($user,$pass){
        return DBHelper::logginUser($user,$pass);
    }
}