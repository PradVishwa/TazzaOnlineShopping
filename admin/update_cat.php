<?php
    $cat_id=$_POST['cat_id'];

    $cat_name=$_POST['cat'];

    include("conn.php");
    $query="update tbl_category set cat_name='$cat_name' where cat_id='$cat_id'";

    mysqli_query($conn, $query);

    header("location:category.php");

?>