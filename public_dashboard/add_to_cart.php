<?php
session_start();
if (! isset($_SESSION["added_products"])){
$_SESSION["added_products"]= [];}
array_push($_SESSION["added_products"],[$_GET["productid"],1]); 
$url =$_SESSION["current_url"];
echo $url;
header("location:index_2.php");