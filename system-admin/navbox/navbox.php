<?php
    include('navbar_variables.php');
?>

<?php
    foreach($nav_Menus as $index => $nav_menu){
?>
    <div class="wrapper">
        <a href="javascript:void(0)" id="active-<?php echo $index ?>">
            <div class="nav-links-btn">
                <div class="icons icon-toggle"> <i class="<?php echo $nav_icons[$index] ?>"></i></div>
                <div class="nav-buttons hide-show"><?php echo $nav_menu ?></div>
            </div>  
        </a>
    </div>
<?php
    }
?>