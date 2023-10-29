<?php

    $email=$_POST['email'];
    include("admin/conn.php");
    $query="insert into tbl_subscribe (email, sub_date) values('$email',now())";
    mysqli_query($conn,$query);

    header("location:index.php");
?>