<?php

session_start();
if ($_SESSION['admin'] == "") {
    header("location:index.php?msg=3");
}

include("conn.php");
$query = "select * from tbl_category";
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
                    <h2 class="fs-2 m-0 text-light">Add Categories</h2>
                </div>
                <?php include("nav.php"); ?>
            </nav>
            <!-- nav bar content end  -->

            <!-- main page content start  -->

            <div class="container-fluid px-4">
                <div class="container">
                    <form action="code_category.php" method="post">
                        <div class="row mt-5 ms-5 ">
                            <div class="col-md-5 my-4 cat">
                                <input type="text" name="cat" id="" class="form-control" placeholder="Enter Category *" required>

                                <input type="submit" class="btn main-btn" value="Add Category">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mb-2 my-tbl">
                    <h3 class="text-center mb-2">Show All Categories</h3>
                    <table class="table table-success table-striped">
                        <tr>
                            <th>S.No.</th>
                            <th>Cat_Name</th>
                            <th>Date&Time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_array($res)) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $row['cat_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['dnt']; ?>
                                </td>
                                <td><a href="edit_cat.php?id=<?php echo $row['cat_id']; ?>">edit</a></td>
                                <td><a href="delete_cat.php?id=<?php echo $row['cat_id']; ?>">delete</a></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </table>
                </div>

            </div>
            <!-- main page content end  -->
        </div>
        <!-- /#page-content-wrapper -->
    </div>
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