<?php
function __autoload($url){
	$url=strtolower($url);
	$url=str_replace("_","/",$url);
	$url=str_replace("model","models",$url);
	require "$url.php";
}

function loadView($name,$data=""){
    require "views/$name.php";
}