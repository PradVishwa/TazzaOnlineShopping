<?php
session_start();
if ($_SESSION['user'] == "") {
    header("location:login.php");
} else {
    $user = $_SESSION['user'];
    include("admin/conn.php");
    $query = "select * from tbl_user where email='$user'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    $user_id = $row['user_id'];
    $query1 = "select * from tbl_cart where user_id='$user_id'";
    $res1 = mysqli_query($conn, $query1);

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="./assets/css/style.css"/>
        <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
        <title>Cart</title>
    </head>

    <body class="cart">
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
                        <h2 class="fs-2 m-0 text-light">My Cart</h2>
                    </div>
                    <?php include("nav.php"); ?>
                </nav>
                <!-- nav bar content end  -->

                <!-- main page content start  -->
                <div class="container-fluid px-4 profile-content">
                    <?php
                    while ($row1 = mysqli_fetch_array($res1)) {
                        $pro_id = $row1['pro_id'];
                        $query2 = "select * from tbl_product where pro_id='$pro_id'";
                        $res2 = mysqli_query($conn, $query2);
                        $row2 = mysqli_fetch_array($res2);
                    ?>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-12 mb-5">
                                <div class=" mx-lg-1">
                                    <img src="admin/product/<?php echo $row2['filename']; ?>" style="height:100px; width:120px;" alt="">
                                </div>
                                <h2 class="section-title  text-light">
                                    <?php echo $row2['pro_name']; ?>
                                </h2>
                            </div>
                            <div class="col-xl-9 col-lg-6 col-12 mb-5 order-2 order-lg-1">
                                <div class="product-content ">
                                    <span class="h3 text-light">
                                        <?php echo $row2['description']; ?>
                                    </span> <br>
                                    <strong class="h3">Cost Price : </strong>
                                    <span class="section-title offer text-light ">
                                        <?php echo $row2['o_price']; ?>/-
                                    </span>
                                    <strong class="h3">Less Price : </strong>
                                    <span class="section-title text-light">
                                        <?php echo $row2['s_price']; ?>
                                        /-</span>
                                        <a href="single.php?pro_id=<?php echo $row2['pro_id'];?>"class="btn main-btn float-end">Buy</a>
                                    </div>
                                    <a href="#" class="btn btn-outline-danger btn-rounded float-end">Remove</a>
                            </div>
                        </div>
                        <?php } ?>
                        <div>
                            <h3 class="text-light"> Total : </h3>
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