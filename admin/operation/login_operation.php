<?php
    $conn = new mysqli("localhost","root","","ompractice");
    $name =$_POST['name'];
    $password = $_POST['password'];
    $data = "SELECT * FROM user WHERE name='$name' AND password = '$password'";
    echo $data;
    // $data = $conn->query("SELECT * FROM user WHERE name='$name' AND password = '$password'");
    // // $data = "";
    // //  var_dump($data);
    // // $row = mysqli_num_rows($data);
    // if($data->num_rows > 0){
    //     // echo $data;
    //     header('Location: "../../system-admin/index.php"');
    // }else{
    //     header('location: "./../../login.php?fail=fail"');
    //     // echo $data;
    // }
?>