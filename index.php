<?php
require "functions.php";
require "Database.php";

$db = new Database();
$posts = $db->execute();

echo "<h1>Posts</h1>";


foreach($posts as $post){
    echo "<li>" . $post["title"] . "</li>" . "<br>";
}