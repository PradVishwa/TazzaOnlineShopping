<?php
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['msg'];


include("admin/conn.php");

$query="insert into tbl_contact(name, email, mobile, message, date) values('$name','$email','$mobile','$message',now())";
mysqli_query($conn, $query);
header("location:contact.php");

?>