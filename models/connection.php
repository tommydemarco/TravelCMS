<?php

require 'private_variables.php';

class Connection {
    
    static public function connect() {

        $username = User::$username;
        $password = User::$password;

        $connection_link = new PDO('mysql:host=localhost;dbname=travel_cms', "$username", "$password");

        //functions not to get problems with the latin characters
        $connection_link -> exec("set names utf8");

        return $connection_link;
    }
}