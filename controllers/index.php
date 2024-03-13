<?php
require "functions.php";
$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);
$page_title = "Search DB";

$query_string = "SELECT * FROM posts";
$params = [];

if(isset($_GET["id"]) && $_GET["id"] != ""){
$query_string .=" WHERE id=:id";
$params[":id"] = $_GET["id"];
}
else if(isset($_GET["name"]) && $_GET["name"] != ""){
$query_string .=" LEFT JOIN categories ON posts.category_id=categories.id WHERE categories.name=:name";
$params[":name"] = $_GET["name"];
}   

$posts = $db->execute($query_string, $params);


require "views/index.view.php";
