<?php
session_start();

if ($_SESSION['user'] == "") {

    header("location:login.php");
} else {
$pro_id=$_REQUEST['pro_id'];
$cat_id=$_REQUEST['cat_id'];
//  echo $pro_id. $cat_id;
 $user=$_SESSION['user'];
 include("admin/conn.php");
$query="select * from tbl_user where email='$user'";
$res=mysqli_query($conn, $query);
$row=mysqli_fetch_array($res);
$user_id=$row['user_id'];

$query1 = "insert into tbl_cart(user_id, cat_id, pro_id, status, date) values('$user_id','$cat_id','$pro_id','Y',now())";
if (mysqli_query($conn, $query1)) {
    
    header("location:index.php");
}
}
