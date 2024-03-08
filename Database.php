<?php

class Database{
    private $connection;
    

    function __construct($config){


        $connection_string = "mysql:" . http_build_query($config, "", ";");

        $this->connection = new PDO($connection_string);

        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC)
    }

        public function execute($request){
        
        //sagatavot sql vaicajumu
        $query = $this->connection->prepare($request);

        //izpildit sql vaicajumu
        $query->execute();

        //sanemt datus no sql uz php
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}