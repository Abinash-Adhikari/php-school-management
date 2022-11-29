<?php 
    include("./includes/dbConnection.php");
    include("./functions/php/abinash_function.php");
    include("./functions/php/abinash_database_function.php");
    // include("./includes/header.php");
    if(isset($_GET['module'])){
        $module=$_GET['module'];
        $createFile='';
        $folder='./systemAdmin/modules/'.$module;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$page.'.php';
            $include='./systemAdmin/modules/'.$module.'/'.$page.'.php';
        }else{
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$module.'.php';
            $include='./systemAdmin/modules/'.$module.'/'.$module.'.php';
        }
        include($operation);
    }else{
        echo '<script>
                alert("Page Not Found"); 
                history.go(-1);
            </script>';
    }


?>