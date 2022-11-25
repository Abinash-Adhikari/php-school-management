<?php
    include('./include/dbConnection.php');
    include ('./include/header.php');
    include('./functions/php/abinash_function.php');
    // include('./functions/js/abinash_function.js');
?>
    <script src="./../functions/js/abinash_function.js"></script>
<?php
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