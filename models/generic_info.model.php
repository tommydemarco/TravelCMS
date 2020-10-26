<?php

require_once "connection.php";

class GenericInfoModel {

    static public function mdlShowGenericInfo($table) {
        $statement = Connection::connect() -> prepare("SELECT * FROM $table");
        $statement -> execute();
        return $statement -> fetch();
        $statement -> close();
        $statement = null;
    }
    
}