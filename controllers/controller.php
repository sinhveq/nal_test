<?php
if(isset($_GET['action'])){
    switch($_GET['action']){
        case "add":
            require "work/add.php";
            break;
        case "list":
            require "work/list.php";
            break;
        case "edit":
            require "work/edit.php";
            break;
        case "del":
            require "work/delete.php";
            break;
    }
}
