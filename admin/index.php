<?php
error_reporting(0);
$msg=$_REQUEST['msg'];
if($msg==1){
$msgerr="Invalid Email Or Password";
}
$msg=$_REQUEST['msg'];
if($msg==2){
$msgerr="Logout Successfuly !";
}
$msg=$_REQUEST['msg'];
if($msg==3){
$msgerr="Invalid! You are not access this page !";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- lightbox popup -->
    <link rel="stylesheet" href="./assets/css/lightbox.css">

    <!-- cdn bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesom 5  CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- style sheet  -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <title>Admin Pannel</title>
</head>

<body>

    <!-- login section start  -->
    <section class="contact_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 contact-form ">
                    <div class="col-12 text-center ">
                        <h2>Admin Panel</h2>
                        <!-- <p class="section-subtitle">You Are a Unique Person for this website
                        </p> -->
                    </div>
                
            
                    

                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="row">
                                <img src="../assets/images/user_icon.png" alt="" class="w-50">
                            </div>
                            <div class="row">
                                <h2 class="section-title">Welcome To Admin Login page!</h2>
                            </div>
                        </div>
                        <div class="col-lg-6  admin">
                            <h4 class="text-center mt-2 text-danger"><?php echo $msgerr;?></h4>
                            
                            <form action="code_index.php" method="post">
                                <div class="col-md-6 mb-4 ">
                                    <input type="email" name="email" id="" class="form-control" placeholder="Your Email *" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="password" name="password" id="" class="form-control" placeholder="Password *" required>
                                </div>

                                <div class="col-12 mb-4">
                                    <input type="submit" class="btn main-btn" value="Login">
                                </div>

                            </form>
                            <a href="../index.php" class="section-subtitle text-center">Back To Home</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- login section Exit  -->

    <!-- footer section start  -->
    <section class="footer_wrapper">

        <div class="container-fluid copyright-section">
            <p>Copyright <a href="#">&copy; Tazza shop</a> All Rights Reserved</p>
        </div>

    </section>
    <!-- footer section Exit-->


    <!-- lightbox js  -->
    <script src="../assets/js/lightbox.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="../assets/js/main.js"></script>
</body>

</html>