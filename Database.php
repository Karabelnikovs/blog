<?php

class Database{
    public function do(){
        $connection_string = "mysql:host=localhost;port=3306;dbname=blog_tavs_uzvards;user=root;password=;charset=utf8mb4";

$connection = new PDO($connection_string);

//sagatavot sql vaicajumu
$query = $connection->prepare("SELECT * FROM posts");

//izpildit sql vaicajumu
$query->execute();

//sanemt datus no sql uz php
return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}