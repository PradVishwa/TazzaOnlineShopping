<?php
    session_start();
if ($_SESSION['user'] == "") {
    header("location:login.php");
} else {
    
    $email = $_SESSION['user'];

    include("admin/conn.php");

    $query = "select * from tbl_user where email='$email'";
    $res = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($res);
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

        <body class="profile-page">
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
                            <h2 class="fs-2 m-0 text-light">My Profile</h2>
                        </div>
                        <?php include("nav.php"); ?>
                    </nav>
                    <!-- nav bar content end  -->

                    <!-- main page content start  -->
                    <div class="container-fluid px-4 profile-content">
                        <div class="row  my-2">
                            <div class="col-sm-4 mx-auto d-block profile">
                                <img src="admin/profile/<?php echo $row['user_img'];?>"  alt="profile">

                            </div>
                            <div class="mx-auto d-block text-center">
                                <h3 class="section-title"><?php echo $row['name']; ?></h3>
                            </div>
                        </div>
                        <div class="row my-5 ">
                            <div class="name">
                                <strong class="h1">Email : </strong>
                                <span class="h4"><?php echo $row['email']; ?></span>
                            </div>
                            <div class="name">
                                <strong class="h1">Mobile : </strong>
                                <span class="h4"><?php echo $row['mobile']; ?></span>
                            </div>
                            <div class="name">
                                <strong class="h1">Address : </strong>
                                <span class="h4"><?php echo $row['address']; ?></span>
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
<?php }
?>