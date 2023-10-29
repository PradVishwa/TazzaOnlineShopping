<?php
    $user_id=$_POST['user_id'];

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $city=$_POST['city'];
    $address=$_POST['address'];

    include("conn.php");
    $query="update tbl_user set name='$name', email='$email', mobile='$mobile', password='$password', city='$city', address='$address' where user_id='$user_id'";

    mysqli_query($conn, $query);

    header("location:view_user.php");

?>