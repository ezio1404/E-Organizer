<?php

function dbconn(){
    try{
        return new PDO("mysql:hostname=locahost;dbname=finaldb","root","");
    }catch(PDOException $e){
        echo $e->getMessage();
    }

}