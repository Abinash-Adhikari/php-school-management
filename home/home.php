<?php
    include('./include/dbConnection.php');
    include ('./include/header.php');
    include('./functions/php/abinash_function.php');
    $_SESSION['login'] = 'true';
    // $_SESSION['login'] = '';

    if(isset($_SESSION['login']) == 'APPLE'){
        include ('./system-admin/index.php');
    }else{
        include ('./admin/login.php');
    }
    // include ('./admin/login.php');

    include ('./include/footer.php');
?>