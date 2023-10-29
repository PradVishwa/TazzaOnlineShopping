<?php

session_start();
if ($_SESSION['admin'] == "") {
    header("location:index.php?msg=3");
}

$pro_id = $_REQUEST['id'];

include("conn.php");

$query1 = "select * from tbl_product where pro_id='$pro_id'";

$res1 = mysqli_query($conn, $query1);

if ($row1 = mysqli_fetch_array($res1)) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <title>add_product</title>
    </head>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <?php include("menu.php"); ?>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <!-- nav bar content  -->
                <nav class="navbar navbar-expand-lg navbar-light  py-4 px-4">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                        <h2 class="fs-2 m-0 text-light">Edit & Update Product</h2>
                    </div>
                    <?php include("nav.php"); ?>
                </nav>
                <!-- nav bar content end  -->

                <!-- main page content start  -->
                <div class="container-fluid px-4">
                    <div class="container">
                        <form action="update_product.php" method="post" enctype="multipart/form-data">
                            <div class="row mt-5 ms-5 ">

                                <div class="col-md-7 my-4 ms-5 cat">
                                    <input type="hidden" name="pro_id" id="" class="form-control my-3" value="<?php echo $row1['pro_id']; ?>">
                                    <p class="text-light">Product Name</p>
                                    <input type="text" name="pro_name" id="" class="form-control my-3" value="<?php echo $row1['pro_name']; ?>">
                                    <p class="text-light">Product Image</p>
                                    <input type="file" name="image" id="" class="form-control my-3">
                                    <p class="text-light">Product Unit</p>
                                    <input type="number" name="unit" id="" class="form-control my-3" value="<?php echo $row1['unit']; ?>">
                                    <p class="text-light">Cost Price</p>
                                    <input type="number" name="c_price" id="" class="form-control my-3" value="<?php echo $row1['c_price']; ?>">
                                    <p class="text-light">Selling Price</p>
                                    <input type="number" name="o_price" id="" class="form-control my-3" value="<?php echo $row1['o_price']; ?>">
                                    <p class="text-light">Discount selling Price</p>
                                    <input type="number" name="s_price" id="" class="form-control my-3" value="<?php echo $row1['s_price']; ?>">
                                    <p class="text-light">Expiry Date</p>
                                    <input type="date" name="exp" id="" class="form-control my-3" value="<?php echo $row1['expiry']; ?>">
                                    <p class="text-light">Description</p>
                                    <textarea name="desc" class="form-control my-3"><?php echo $row1['description']; ?></textarea>
                                    <input type="submit" class="btn main-btn" value="Update Product">
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                    </div>
                </div>
                <!-- main page content end -->
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