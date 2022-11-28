<?php
    if(isset($_GET['module'])){
        $module=$_GET['module'];
        $page = '';
        $createFile='';
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }
    }
?>

<div class="left-part bg-color-first">
        <div class="nav-header">
            <div class="nav-logo text-center" id="nav-logo-img">
                <!-- <img src="./img/1.png" alt="logo"> -->
            </div>
            <div class="company-short-name text-center mt-1"><h3>MLEBS</h3></div>
        </div>
        <div class="nav-include my-3">
        <?php
            include('navbar_variables.php');
            foreach($nav_Menus as $index => $nav_menu){
                if(in_array($index,array_keys($sub_nav_menus))){
                    if(isset($_GET['module']) && $index==$module){
                        $module_active="nav-active";
                    }else{
                        $module_active='';
                    }
        ?>
                <div class="wrapper">
                    <a href="javascript:void(0)" id="active-<?php echo $index ?>" onclick="hideShowSingle('sub-nav-<?php echo $index ?>')">
                        <div class="nav-links-btn <?php echo $module_active ?>">
                            <div class="icons icon-toggle"> <i class="<?php echo $nav_icons[$index] ?>"></i></div>
                            <div class="nav-buttons hide-show"><?php echo $nav_menu ?></div>
                        </div>  
                    </a>
                    <div class="show-hide" id="sub-nav-<?php echo $index ?>">
                        <?php
                            foreach($sub_nav_menus[$index] as $index1 => $data){
                                if(isset($page) &&$index1==$page){
                                    $active="nav-active";
                                }else{
                                    $active='';
                                }
                        ?>
                        <a href="showPage.php?module=<?php echo $index ?>&page=<?php echo $index1  ?>" >
                            <div class="nav-links-btn icon-toggle <?php echo $active ?>">
                                <div class="icons class-sub-icon"><i class="fa-solid fa-angles-right"></i></div>

                                <div class="sub-nav-button">
                                    <?php echo $data ?>
                                </div>
                            </div>
                        </a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
        <?php
            }else{
                if(isset($_GET['module']) && $index==$module){
                    $module_active="nav-active";
                }else{
                    $module_active='';
                }
    ?>
                <div class="wrapper">
                    <a href="showPage.php?module=<?php echo $index ?>" id="active-<?php echo $index ?>" onclick="hideShowSingle('sub-nav-<?php echo $index ?>')">
                        <div class="nav-links-btn <?php echo $module_active ?>">
                            <div class="icons icon-toggle"> <i class="<?php echo $nav_icons[$index] ?>"></i></div>
                            <div class="nav-buttons hide-show"><?php echo $nav_menu ?></div>
                        </div>  
                    </a>
                </div>
                <?php
            }
        }
        ?>
        </div>
    </div>
    
<!-- <script>
    function hideShowSingle(id){
        document.getElementById(id).classList.toggle('d-none');
    }
</script> -->
