<?php

require_once "connection.php";

class AboutInfoModel {

    static public function mdlShowAboutInfo($table) {
        $statement = Connection::connect() -> prepare("SELECT * FROM $table");
        $statement -> execute();
        return $statement -> fetch();
        $statement -> close();
        $statement = null;
    }
    static public function mdlShowEmployeesInfo($table) {
        $statement = Connection::connect() -> prepare("SELECT * FROM $table");
        $statement -> execute();
        return $statement -> fetchAll();
        $statement -> close();
        $statement = null;
    }
    
}