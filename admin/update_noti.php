<?php
    $noti_id=$_POST['noti_id'];

    $notification=$_POST['notification'];

    include("conn.php");
    $query="update tbl_notification set notification='$notification' where noti_id='$noti_id'";

    mysqli_query($conn, $query);

    header("location:add_noti.php");

?>