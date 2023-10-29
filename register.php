<?php


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
    <title>Register</title>
</head>

<body class="register">

    <!-- navbaar section start -->
    <?php include("navbar.php"); ?>
    <!-- navbar section exit -->

    <!-- banner section start  -->
    <section class="register_section">
        <div class="container">
            <div class="register-content">
                <h1>Register Here</h1>
            </div>
        </div>
    </section>
    <!-- banner section exit  -->

    <!-- contact section start  -->
     <section class="contact_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2 class="section-title">Get Join</h2>
                    <p class="section-subtitle">The Passage Experienced A Surve IN Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers
                    </p>
                </div>
                <div class="col-12 register-form">
                    <div class="row">
                        <div class="col-lg-7 mb-5">
                            <form action="register_code.php" method="post">
                                <div class="row g-3">

                                    <div class="col-md-6 mb-4">
                                        <input type="text" name="name" id="" class="form-control"
                                            placeholder="Your Full Name *" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="email" name="email" id="" class="form-control"
                                            placeholder="Your Email *" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="number" name="mobile" id="" class="form-control"
                                            placeholder="Your Mobile *" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="password" name="password" id="" class="form-control"
                                            placeholder="Your Password *" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" name="city" id="" class="form-control"
                                            placeholder="Your City*" required>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <input type="text" name="address" id="" class="form-control"
                                            placeholder="Your Address*" required>
                                    </div>
                                    <!-- <div class="col-12 mb-4">
                                        <textarea name="" id="" class="form-control"
                                            placeholder="Your Address.."></textarea>
                                    </div> -->
                                    <div class="col-12 mb-4">
                                        <button type="submit" class="btn main-btn">Register</button>
                                        <p class="section-subtitle">Already have an account? <a href="login.php">Log in</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 mb-5">
                            <div class="content-box ms-sm-5">
                                <ul class="info-box clearfix">
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                        <p>Any Question? Call Us</p>
                                        <div>
                                            <a href="tel:8738804265">+91-87-38-80-42-65</a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="fas fa-envelope-open"></i>
                                        <p>Any Question? Email Us</p>
                                        <div>
                                            <a href="mailto:pradyumn.sk@gmail.com">pradyumn.sk@gmail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <!-- contact section Exit -->

    <!-- footer section start  -->
    <?php include("footer.php");?>
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