
<div class="d-flex" id="main-content">
    <div class="left-part bg-color-first">
        <div class="nav-header">
            <div class="nav-logo text-center" id="nav-logo-img">
                <img src="./img/1.png" alt="logo">
            </div>
            <div class="company-short-name text-center mt-1 hide-show"><h3>MLEBS</h3></div>
        </div>
        <div class="nav-include my-3">
            <?php
                include('navbox/navbox.php')
            ?>
        </div>
    </div>
    <div class="right-part">
        <div class="top-header">
            <div class="burger"><a href="javascript: void(0)" onclick="navBarToggle()"><i class="fa-solid fa-bars-staggered"></i></a></div>
            <div class="userIcon-notification">
                <a href="javascript: void(0)" onclick="openModule('show-module2'),hideUserDetail()"><i class="fa-regular fa-bell" aria-hidden="true"><sup class="text-primary">5</sup></i></a>
                <a href="javascript: void(0)" onclick="openModule('show-module1'),hideNotification()"><i class="fa-regular fa-circle-user" aria-hidden="true"></i></a>
            </div>
        </div>
        <?php
            include('modules/include_modules.php')
        ?>
        <div class="show-module bg-white text-center card" id="show-module2">
            <div class="card-header p-0 bg-color-third ">
                <p class="m-auto tx-22 text-white">Notifications</p>
            </div>
        </div>
        <div class="show-module bg-white text-center card" id="show-module1">
            <div class="card-header p-0 bg-color-third ">
                <p class="m-auto tx-22 text-white">Profile</p>
            </div>
            <div class="profile-image text-center">
                <img src="./img/1.png" alt="" style="width:5rem; margin: 0.5rem 0; border-radius:50%">
            </div>
            <div class="profile-details">
                <div class="name"><h4>Abinash Adhikari</h4></div>
            </div>
        </div>
        
    </div>
</div>
<script>
    // hide and show navbar
    function navBarToggle(){
        const loGo = document.getElementById("nav-logo-img");
        const iconToggle = document.getElementsByClassName("icon-toggle");
        const mainContent = document.getElementById("main-content");
        const hideBtn = document.getElementsByClassName("hide-show");

        mainContent.classList.toggle('responsive');
        loGo.classList.toggle('reduceWidth');
        

        for(var i=0;i<hideBtn.length;i++){
            hideBtn[i].classList.toggle('hide');
            iconToggle[i].classList.toggle('toggle-icons');
        }
        
    }
    function openModule(val){
        const showModel1 = document.getElementById(val)
        showModel1.classList.toggle(val+'-active')
    }
    function hideUserDetail(){
        document.getElementById('show-module2').classList.toggle('classList.toggle')
        document.getElementById('show-module1').classList.remove('show-module1-active')
    }
    function hideNotification(){
        document.getElementById('show-module1').classList.toggle('classList.toggle')
        document.getElementById('show-module2').classList.remove('show-module2-active')
    }
</script>