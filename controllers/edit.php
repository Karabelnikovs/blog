<?php
$page_title = "Edit Post";

require "views/edit.view.php";

$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);


$query_string = "INSERT INTO posts (title, category_id) VALUES (?,?)";
$params = [];

if(isset($_GET["title"], $_GET["category"]) && $_GET["title"] != "" && $_GET["category"] != ""){
   $params = [
        $_GET["title"],
        $_GET["category"]
   ];
   $posts = $db->execute($query_string, $params);
}  
