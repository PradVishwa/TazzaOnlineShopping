<?php
    
    $pro_name=$_POST['pro_name'];

    $cat_name=$_POST['cat_name'];

    $file_name=$_FILES['image']['name'];
    
    // $file_size=$_FILES['image']['size'];

    // $file_type=$_FILES['image']['type'];

    $tmp_name=$_FILES['image']['tmp_name'];

    $unit=$_POST['unit'];

    $c_price=$_POST['c_price'];

    $s_price=$_POST['s_price'];

    $o_price=$_POST['o_price'];
    
    $exp=$_POST['exp'];
    
    $description=$_POST['desc'];

    $location="product/";

    // echo $pro_name. $cat_name. $file_name. $file_size. $file_type. $tmp_name. $unit. $c_price. $s_price. $exp. $description;
    
    include("conn.php");
    $query="insert into tbl_product (pro_name,cat_id, filename, unit, c_price, s_price, o_price, expiry, description, date) values('$pro_name','$cat_name','$file_name','$unit','$c_price','$s_price','$o_price','$exp','$description',now())";
    mysqli_query($conn,$query);

    move_uploaded_file($tmp_name, $location.$file_name);
    
    header("location:view_product.php");








?>