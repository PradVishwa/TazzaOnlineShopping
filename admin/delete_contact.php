<?php
    $id=$_REQUEST['id'];

    include("conn.php");
    $query="delete from tbl_contact where can_id='$id'";
    mysqli_query($conn,$query);
    header("location:view_contact.php");

?>