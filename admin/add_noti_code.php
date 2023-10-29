<?php
    $notification=$_POST['notification'];

    include("conn.php");
    $query="insert into tbl_notification (notification, noti_date) values('$notification', now())";
    mysqli_query($conn, $query);

    header("location:add_noti.php");

?>