        <div class="top-header shadow">
            <div class="burger"><a href="javascript: void(0)" onclick="navBarToggle()"><i class="fa-solid fa-bars-staggered"></i></a></div>
            <div class="userIcon-notification">
                <a href="javascript: void(0)" onclick="openModule('show-module2'),hideUserDetail()"><i class="fa-regular fa-bell" aria-hidden="true"><sup class="text-primary">5</sup></i></a>
                <a href="javascript: void(0)" onclick="openModule('show-module1'),hideNotification()"><i class="fa-regular fa-circle-user" aria-hidden="true"></i></a>
            </div>
        </div>
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
        <div class="line"></div>