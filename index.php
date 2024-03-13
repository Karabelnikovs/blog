<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

if($uri == "/" || $uri == "/index" || $uri == "/index.php"){
    require "controllers/index.php";
}
else if($uri == "/about" || $uri == "/about.php"){
    require "controllers/about.php";
}
else if($uri == "/story" || $uri == "/story.php"){
    require "controllers/story.php";
}
