<?php
    if(isset($_GET['module'])){
        $module=$_GET['module'];
        $createFile='';
        $folder='./systemAdmin/modules/'.$module;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$page.'_operation.php';
            $include='./systemAdmin/modules/'.$module.'/'.$page.'.php';
        }else{
            $operation='./systemAdmin/modules/'.$module.'/operation'.'/'.$module.'_operation.php';
            $include='./systemAdmin/modules/'.$module.'/'.$module.'.php';
        }
    }
    include("./includes/dbConnection.php");
    include("./functions/php/abinash_function.php");
    include("./includes/header.php");
?>
<div class="d-flex" id="main-content">
    <?php
        include ('./includes/navbox/navbar.php');
    ?>
 
    <div class="right-part">
<?php
    $topbar="./includes/topbar/topbar.php";
    include($topbar);

    if (isset($folder) && !file_exists($folder)){
        mkdir($folder, 0777);
    }
    if(isset($include) && !file_exists($include)){
        touch($include);
    }
    if(isset($folder) && !file_exists($folder.'/operation')){
        mkdir($folder.'/operation', 0777);
    }
    if(isset($operation) && !file_exists($operation)){
        touch($operation);
    }
    if(isset($include)) include($include);
    
    ?>
    </div>
</div>
<script src="./functions/js/app.js"></script>
<script src="./functions/js/abinash_function.js"></script>

<?php
    include("./includes/footer.php");
?>