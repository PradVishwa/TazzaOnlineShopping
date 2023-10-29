<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

// echo $email.   $password;
include("admin/conn.php");
$query="select * from tbl_user where email='$email' and password='$password'";

$res=mysqli_query($conn, $query);

if($row=mysqli_fetch_array($res))
{
    $_SESSION['user']=$email;
    header("location:dashbord.php");
}else{
    header("location:login.php");
}
?>