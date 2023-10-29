<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

// echo $email.   $password;
include("conn.php");
$query="select * from tbl_admin where email='$email' and password='$password'";

$res=mysqli_query($conn, $query);

if($row=mysqli_fetch_array($res))
{
    $_SESSION['admin']=$email;
    header("location:dashbord.php");

}else{
    header("location:index.php?msg=1");
}
?>