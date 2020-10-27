<?php

require 'private_variables.php';

class Connection {
    
    static public function connect() {

        $username = User::$username;
        $password = User::$password;
        $dbname = User::$dbname;

        $connection_link = new PDO("mysql:host=localhost;dbname=$dbname", "$username", "$password");

        //functions not to get problems with the latin characters
        $connection_link -> exec("set names utf8");

        return $connection_link;
    }
}