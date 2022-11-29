<?php
    // include('../../include/dbConnection.php');

#============================================================================================================#
    // display information
    function ddd($value){
        echo '<pre>';
            var_dump($value);
        echo '</pre>';
    }
#============================================================================================================#
    // display information and exit
    function dd($value){
        echo '<pre>';
            var_dump($value);
        echo '</pre>';
        exit();
    }

?>