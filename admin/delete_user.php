<?php
    $id=$_REQUEST['id'];

    include("conn.php");
    $query="delete from tbl_user where user_id='$id'";
    mysqli_query($conn,$query);
    header("location:view_user.php");

?>