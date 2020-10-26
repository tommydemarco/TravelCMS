<?php

require_once "connection.php";

class TestimonialsModel {

    static public function mdlShowTestimonials($table) {
        $statement = Connection::connect() -> prepare("SELECT * FROM $table");
        $statement -> execute();
        return $statement -> fetchAll();
        $statement -> close();
        $statement = null;
    }
    
}