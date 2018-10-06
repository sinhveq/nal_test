<?php
require "library/function.php";
require "library/database.php";
if(isset($_GET['controller'])){
    switch ($_GET['controller']){
        case "list":
            require  "controllers/work/list.php";
            break;
    }
}else{
    echo 'index';
}