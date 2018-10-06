<!DOCTYPE html>
<html>
    <head>
        <title>Page Title</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
    require "library/function.php";
    require "library/database.php";
    require "config.php";
    if(isset($_GET['controller'])){
        switch ($_GET['controller']){
            case "work":
                require  "controllers/controller.php";
                break;
        }
    }else{
        require  "controllers/work/list.php";
    }
    ?>
    </body>
</html>