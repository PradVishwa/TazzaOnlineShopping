<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <title>Profile</title>
</head>

<body class="contact">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar  and page content-->
        <?php include("menu.php"); ?>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <!-- nav bar content  -->
            <nav class="navbar navbar-expand-lg navbar-light  py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 text-light">Change Password</h2>
                </div>
                <?php include("nav.php"); ?>
            </nav>
            <!-- nav bar content end  -->

            <!-- main page content start  -->
            <div class="container-fluid px-4 profile-content">
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                <h2 class="section-title text-light">Change Carefull</h2>
                
            </div>
            <div class="col-12 contact-form">
                <div class="row">
                    <div class="col-lg-7 mb-5 cat">
                        <form action="change_pass_code.php" method="post">
                            <div class="row g-3">


                                <div class="col-md-12 mb-4">
                                    <input type="password" name="op" id="" class="form-control" placeholder="Old Password">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <input type="password" name="np" id="" class="form-control" placeholder="New Password">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="password" name="cnp" id="" class="form-control" placeholder="Confirm Password ">
                                </div>


                                <div class="col-12 mb-4">
                                    <button type="submit" class="btn main-btn">Change</button>
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

            </div>
            <!-- main page content end  -->
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <!-- footer section start  -->
    <section class="footer">
        <div class="container-fluid copyright-section">
            <p>Copyright <a href="#">&copy; Tazza shop</a> All Rights Reserved</p>
        </div>
    </section>
    <!-- footer section Exit  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>















































<!-- 
<section class="contact_section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                <h2 class="section-title">Change Carefull</h2>
                <p class="section-subtitle">The Passage Experienced A Surve IN Popularity During The 1960s When
                    Again During The 90s As Desktop Publishers
                </p>
            </div>
            <div class="col-12 contact-form">
                <div class="row">
                    <div class="col-lg-7 mb-5">
                        <form action="change_pass_code.php" method="post">
                            <div class="row g-3">


                                <div class="col-md-12 mb-4">
                                    <input type="password" name="op" id="" class="form-control" placeholder="Old Password">
                                </div>

                                <div class="col-md-6 mb-4">
                                    <input type="password" name="np" id="" class="form-control" placeholder="New Password">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <input type="password" name="cnp" id="" class="form-control" placeholder="Confirm Password ">
                                </div>


                                <div class="col-12 mb-4">
                                    <button type="submit" class="btn main-btn">Change</button>
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
</section> -->