<?php 
    include("./includes/dbConnection.php");
    include("./functions/php/abinash_function.php");
<<<<<<< HEAD
<<<<<<< HEAD
    include("./functions/php/abinash_database_function.php");
    // include("./includes/header.php");
=======
    include("./includes/header.php");
>>>>>>> 5b8a742 (dev-aninash:operation file changes)
=======
    include("./includes/header.php");
>>>>>>> 11721d5 (dev-aninash:operation file changes)
    if(isset($_GET['module'])){
        $module=$_GET['module'];
        $createFile='';
        $folder='./systemAdmin/modules/'.$module;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
<<<<<<< HEAD
<<<<<<< HEAD
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$page.'.php';
            $include='./systemAdmin/modules/'.$module.'/'.$page.'.php';
        }else{
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$module.'.php';
            $include='./systemAdmin/modules/'.$module.'/'.$module.'.php';
        }
        include($operation);
=======
=======
>>>>>>> 11721d5 (dev-aninash:operation file changes)
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$page.'_operation.php';
            $include='./systemAdmin/modules/'.$module.'/'.$page.'.php';
        }else{
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$module.'_operation.php';
            $include='./systemAdmin/modules/'.$module.'/'.$module.'.php';
        }
        include($include);
<<<<<<< HEAD
>>>>>>> 5b8a742 (dev-aninash:operation file changes)
=======
>>>>>>> 11721d5 (dev-aninash:operation file changes)
    }else{
        echo '<script>
                alert("Page Not Found"); 
                history.go(-1);
            </script>';
    }


?>