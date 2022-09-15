<?php
    // $conn = new mysqli("localhost","root","","ompractice");
?>
<div class="login-wrapper">
    <div class="login-page col-md-7 row  border-rounded">
        <div class="col-md-5  bg-sec p-3">
            <div class="h2 text-center py-2">
                SMART SCHOOL
            </div>
            <div class="school-logo text-center py-3">
                <img src="https://scontent.fktm3-1.fna.fbcdn.net/v/t39.30808-6/294101323_464458299021463_1530342883546177216_n.png?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=K5S_hbUT8S4AX-59Hp4&_nc_ht=scontent.fktm3-1.fna&oh=00_AT8MwuZp9fkxe39l8LExNbVyV6JfZvxOoiW7Xs43g7YguA&oe=63196E54" style="width:12rem;height:auto" alt="logo">
            </div>
            <div class="welcome-message py-2">
                <h5 class="text-center">Welcome to Smart School</h5>
            </div>
            <div class="school-information text-center">
                <div class="email"><i class="fa fa-envelope" aria-hidden="true"></i> smartschool@gmail.com</div>
                <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i> +977 9865079720</div>
                <div class="location"><i class="fa fa-location-arrow" aria-hidden="true"></i> Nijgdh-1(Singaul), Bara</div>
            </div>
        </div>
        <div class="col-md-7 bg-white d-flex justify-content-center align-items-center">
            <div class="container mx-5">
                <div class="form-header m-1">
                    <h4> Login Your Account </h4>
                </div>
                <form method="POST" action="./admin/operation/login_operation.php" class="form m-1 mt-4">
                    <div class="form-group">
                        <label for="login-username"> User Name </label>
                        <input id="login-username" type="text" name="name" class="form-control" placeholder="Enter username">
                    </div>
                    <div class="form-group my-4">
                        <label for="login-password"> Password </label>
                        <input id="login-password" name="password" type="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="btn-group w-100 ">
                        <button class="btn bg-color-second"> Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
