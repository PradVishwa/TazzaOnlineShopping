<?php
    $user=$_POST['user'];
    $product=$_POST['pro'];
    $category=$_POST['cat'];
    $unit=$_POST['unit'];
    $amount=$_POST['amount'];

    // echo $user.$product.$category.$unit.$amount;
    include("admin/conn.php");
   echo $query="insert into tbl_order(user_id, cat_id, pro_id, quantity, amount, order_date) values('$user','$category','$product','$unit','$amount',now())";
   
    if(mysqli_query($conn,$query)){
        $query1="update tbl_product set unit=unit-'$unit' where pro_id='$product'";
        mysqli_query($conn,$query1);
        header("location:index.php");
    }
    

?>