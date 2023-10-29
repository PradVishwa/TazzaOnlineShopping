<?php
session_start();
$email=$_SESSION['admin'];

include("conn.php");
$query="select * from tbl_admin where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res)){
    $pp= $row['password'];
}
    $op=$_POST['op'];
    $np=$_POST['np'];
    $cnp=$_POST['cnp'];

    // echo $op. $np. $cnp. $pp;

    if($pp==$op){

        if($op==$np){
            header("location:change_pass.php");
        }elseif($np==$cnp){
            echo $query2="update tbl_admin set password='$np' where email='$email'";
            mysqli_query($conn,$query2);
            session_destroy();
            header("location:index.php");
        }else{
            header("location:change_pass.php");
        }
    }else{
        header("location:change_pass.php");
    }

?>