<?php
    session_start();
    $email=$_SESSION['user'];

    include("admin/conn.php");
    $query="select password from tbl_user where email='$email'";
    $res=mysqli_query($conn,$query);

    if($row=mysqli_fetch_array($res)){
           echo $p_p= $row['password'];
    }

    $o_p=$_POST['op'];
    $n_p=$_POST['np'];
    $c_n_p=$_POST['cnp'];

    echo $o_p. $n_p. $c_n_p;

    if($p_p==$o_p){
        if($o_p==$n_p){
            header("location:change_pass.php");
        }elseif($n_p==$c_n_p){
            include("admin/conn.php");
            $query="update tbl_user set password='$n_p' where email='$email'";
            mysqli_query($conn,$query);
            session_destroy();
            header("location:login.php");
        }else{
            header("location:change_pass.php");
        }
    }else{
        header("location:change_pass.php");
    }
?>