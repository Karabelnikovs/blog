<?php
require "functions.php";
$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);
$posts = $db->execute("SELECT * FROM posts");

echo "<h1>Posts</h1>";


foreach($posts as $post){
    echo "<li>" . $post["title"] . "</li>" . "<br>";
}