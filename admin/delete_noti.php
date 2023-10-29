<?php
    $id=$_REQUEST['id'];

    include("conn.php");
    $query="delete from tbl_notification where noti_id='$id'";
    mysqli_query($conn,$query);
    header("location:add_noti.php");

?>