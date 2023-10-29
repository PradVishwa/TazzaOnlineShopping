<?php
$user_id=$_POST['user_id'];

$name=$_POST['name'];

$img_name=$_FILES['image']['name'];

$tmp_name=$_FILES['image']['tmp_name'];

$email=$_POST['email'];

$mobile=$_POST['mobile'];

$city=$_POST['city'];

$address=$_POST['address'];

$location="admin/profile/";

include("admin/conn.php");

if($img_name==""){

   echo $query="update tbl_user set name='$name', email='$email', mobile='$mobile', city='city', address='$address'  where user_id='$user_id'";

    mysqli_query($conn, $query);
    header("location:dashbord.php");

}else{

unlink($location.$img_name);
echo $query1="update tbl_user set name='$name', user_img='$img_name', email='$email', mobile='$mobile', city='city', address='$address'  where user_id='$user_id'";

mysqli_query($conn, $query1);

move_uploaded_file($tmp_name,$location.$img_name);

header("location:dashbord.php");
}
