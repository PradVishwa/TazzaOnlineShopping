<?php
    $category=$_POST['cat'];

    include("conn.php");
    $query="insert into tbl_category (cat_name, dnt) values('$category', now())";
    mysqli_query($conn, $query);

    header("location:category.php");

?>