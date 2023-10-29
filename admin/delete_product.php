<?php
$pro_id=$_REQUEST['id'];

include("conn.php");
$query="select * from tbl_product where pro_id='$pro_id' ";
$res=mysqli_query($conn, $query);
if($row=mysqli_fetch_array($res)){
    $file_name= $row['filename'];
}
$location="product/";
$query2="delete from tbl_product where pro_id='$pro_id'";
mysqli_query($conn, $query2);
unlink($location.$file_name);
header("location:view_product.php");

?>