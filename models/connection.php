<?php

class Connection {
    
    static public function connect() {
        $connection_link = new PDO('mysql:host=localhost;dbname=travel_cms', 'root', '');

        //functions not to get problems with the latin characters
        $connection_link -> exec("set names utf8");

        return $connection_link;
    }
}