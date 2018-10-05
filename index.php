<?php
if(isset($_GET['controller'])){
    switch ($_GET['controller']){
        case "add":
            require "controllers/work/add.php";
            break;
        case "list":
            require  "controllers/work/list.php";
            break;
    }
}else{
    echo 'index';
}