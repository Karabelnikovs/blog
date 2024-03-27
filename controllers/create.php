<?php
$page_title = "Create Post";


$config = require "config.php";
require "Database.php";

$db = new Database($config["config"]);

$message;
$query_string = "INSERT INTO posts (title, category_id) VALUES (?,?)";
$params = [];

if($_SERVER["REQUEST_METHOD"]=="POST"){
   
   $errors = [];
   $title = trim($_POST["title"]);
   $max_category = $db->execute("SELECT MAX(id) FROM categories;", [])[0]["MAX(id)"];

   if(strlen($title) == 0 || strlen($title) > 255){
      $errors['title'] = "aizpildi lauku jekab, neslinko ludzu";

   }
   if($_POST['category'] > $max_category){

      $errors['category'] = "ew tu ko";
   }
   
   if(empty($errors)){
      $params = [
        $title,
        $_POST["category"]
      ];
      $posts = $db->execute($query_string, $params);
      header("Location: /index");
      exit();
   }
   
}

require "views/create.view.php";
