<?php
require 'db/dbhelper.php';
Class Login extends DBHelper{
    function __construct(){
        return DBHelper::__construct();
    }
    function login($idno,$pass){
        return DBHelper::logginUser($idno,$pass);
    }
}