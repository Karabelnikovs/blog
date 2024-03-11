<?php
require "functions.php";
$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);


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

echo "<h1>Posts</h1>";


echo "<form>";
echo "<input name='id' />";
echo "<button>Filter by id</button>";
echo "</form>";

echo "<br>";

echo "<form>";
echo "<input name='name' />";
echo "<button>Filter by category</button>";
echo "</form>";



foreach($posts as $post){
    echo "<li>" . $post["title"] . "</li>" . "<br>";
}