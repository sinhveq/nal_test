<?php
// Check if the layer exists or not if it fades in then dip
function __autoload($url){
	$url=strtolower($url);
	$url=str_replace("_","/",$url);
	$url=str_replace("model","models",$url);
	require "$url.php";
}
// Display the interface as you like
function loadView($name,$data=""){
    require "views/$name.php";
}
// next page
function redirect($url){
    header("location:$url");
    exit();
}