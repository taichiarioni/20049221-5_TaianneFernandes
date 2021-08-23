<?php
$title = '';
$id = null;

$base_dir = __DIR__.'/../dados/';

if(isset($_GET["page"]) && !empty($_GET["page"]))
{
    $file = "$base_dir/" . $_GET["page"] . "Controller.php";
    if (file_exists($file)) 
    {
        include($file);     
    } else {
        include("$base_dir/notFoundController.php");
    }
} else {
    include("$base_dir/homeController.php");      
}