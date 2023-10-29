<?php
session_start();
if($_SESSION['user']==""){
    header("location:404.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesom 5  CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- style sheet  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">

    <title>404- error</title>
</head>

<body class="distributors">
    <!-- navbaar section start -->
    <?php include("navbar.php")?>
    <!-- navbar section exit -->

    <!-- banner section start  -->
    <section class="banner_section">
        <div class="container">
            <div class="banner-content">
                <h1>404_Error</h1>
            </div>
        </div>
    </section>
    <!-- banner section exit  -->

    <!-- inquery section start  -->
    <section class="contact_section">
        <div class="container">
            <div class="row align-items-center flex-column flex-lg-row-reverse">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="">
                        <img src="./assets/images/error_404.png" alt="">
                    </div>
                </div>
                <div class="col-lg-5 pb-5 text-center text-lg-start">
                    <h2 class="section-title">Opps..... This page is Not found.</h2>
                    <p class="text-black">Botainically, the strawberry fruit is considerd an "accessory fruit" an not a true berry. The flesh consist of the gretly nlarged flower receptacle.</p>
                    <a class="btn main-btn" href="./index.php">Back To Home</a>
                </div>
            </div>
        </div>
    </section>
    <!-- inquery section Exit -->

    <!-- footer section start  -->
    <?php include("footer.php")?>
    <!-- footer section exit -->



    <!-- jQuery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- lightbox js  -->
    <script src="./assets/js/lightbox.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
</body>

</html>