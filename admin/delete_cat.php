<?php
    $id=$_REQUEST['id'];

    include("conn.php");
    $query="delete from tbl_category where cat_id='$id'";
    mysqli_query($conn,$query);
    header("location:category.php");

?>