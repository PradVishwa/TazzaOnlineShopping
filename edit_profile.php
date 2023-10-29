
<?php
session_start();
$email = $_SESSION['user'];


    include("admin/conn.php");
    $query = "select * from tbl_user where email='$email'";
    $res = mysqli_query($conn, $query);

    $row1 = mysqli_fetch_array($res);
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
                        <h2 class="fs-2 m-0 text-light">Edit & Update Profile</h2>
                    </div>
                    <?php include("nav.php"); ?>
                </nav>
                <!-- nav bar content end  -->

                <!-- main page content start  -->
                <div class="container-fluid px-4 profile-content">
                    <div class="container">
                        <form action="update_profile.php" method="post" enctype="multipart/form-data">
                            <div class="row mt-5 ms-5 ">

                                <div class="col-md-7 my-4 ms-5 cat">
                                    <input type="hidden" name="user_id" id="" class="form-control my-3" value="<?php echo $row1['user_id']; ?>">

                                    <p class="text-light">Name</p>
                                    <input type="text" name="name" id="" class="form-control my-3" value="<?php echo $row1['name']; ?>">

                                    <p class="text-light">Profile img</p>
                                    <input type="file" name="image" id="" class="form-control my-3">

                                    <p class="text-light">Email </p>
                                    <input type="email" name="email" id="" class="form-control my-3" value="<?php echo $row1['email']; ?>">

                                    <p class="text-light">Mobile</p>
                                    <input type="number" name="mobile" id="" class="form-control my-3" value="<?php echo $row1['mobile']; ?>">

                                    <p class="text-light">City</p>
                                    <input type="text" name="city" id="" class="form-control my-3" value="<?php echo $row1['city']; ?>">

                                    <p class="text-light">Address</p>
                                    <textarea name="address" class="form-control my-3"><?php echo $row1['address']; ?></textarea>

                                    <input type="submit" class="btn main-btn" value="Update Profile">
                                </div>
                            </div>
                        </form>
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
