<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pswd = $_POST['password'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$address = $_POST['address'];


// echo "$name  $email   $pswd    $mobile   $dob   $gender    $address   $state";


include("admin/conn.php");
$query = "select * from tbl_user where email='$email' or mobile='$mobile'";
$res = mysqli_query($conn, $query);

if ($row = mysqli_fetch_array($res)) {
    header("location:register.php");
} else {
    $query2 = "insert into tbl_user (name,user_img, email, password, mobile, city, address, dor) values('$name','','$email','$pswd','$mobile','$city','$address',now())";
    mysqli_query($conn, $query2);
    header("location:login.php");
}
?>