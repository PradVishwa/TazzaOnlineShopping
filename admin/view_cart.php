<?php
session_start();
if ($_SESSION['admin'] == "") {
    header("location:index.php?msg=3");
} else {
    include("conn.php");
    $query = "select * from tbl_cart ";
    $res = mysqli_query($conn, $query);
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
        <title>Dashboard</title>
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
                        <h2 class="fs-2 m-0 text-light">View Cart</h2>
                    </div>
                    <?php include("nav.php"); ?>
                </nav>
                <!-- nav bar content end  -->

                <div class="container-fluid px-4">
                    <h3 class="text-center mb-2">Show Cart Details </h3>
                    <table class="table table-success table-striped my-tbl">
                        <tr>
                            <th>S.No.</th>
                            <th>User Name</th>
                            <th>Product Category</th>
                            <th>Product</th>
                            <th>Product Image</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        $i = 1;
                        while($row = mysqli_fetch_array($res)) {
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <?php
                            $user_id=$row['user_id']; 
                            $query1="select name from tbl_user where user_id='$user_id'";
                            $res1=mysqli_query($conn,$query1);
                            $row1 = mysqli_fetch_array($res1);
                            ?>
                            <td><?php echo $row1['name'];?></td>
                            
                            <?php
                            $cat_id=$row['cat_id']; 
                            $query2="select cat_name from tbl_category where cat_id='$cat_id'";
                            $res2=mysqli_query($conn,$query2);
                            $row2 = mysqli_fetch_array($res2);
                            ?>
                            <td><?php echo $row2['cat_name']; ?></td>
                            <?php
                            $pro_id=$row['pro_id']; 
                            $query3="select * from tbl_product where pro_id='$pro_id'";
                            $res3=mysqli_query($conn,$query3);
                            $row3 = mysqli_fetch_array($res3);
                            ?>
                            <td><?php echo $row3['pro_name'];?></td>

                            <td><img src="product/<?php echo $row3['filename'];?>" height="50px" width="50px" alt="product img"></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo "edit"; ?></td>
                            <td><?php echo "delete"; ?></td>
                         </tr>
                        <?php 
                        $i++;
                    } ?>
                    </table>
                </div>
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
<?php } ?>