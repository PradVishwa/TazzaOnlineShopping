<?php

session_start();
if ($_SESSION['admin'] == "") {
    header("location:index.php?msg=3");
}

include("conn.php");
$query = "select * from tbl_contact";
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
                    <h2 class="fs-2 m-0 text-light">View Contact</h2>
                </div>
                <?php include("nav.php"); ?>
            </nav>
            <!-- nav bar content end  -->

            <div class="container-fluid px-4">
                <h3 class="text-center mb-2">Show Contact Details </h3>
                <table class="table table-success table-striped my-tbl">
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                        <th>Date & Time</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><a href="delete_contact.php?id=<?php echo $row['can_id']; ?>">delete</a></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
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




http://localhost/v&G/admin/product/

http://localhost/v&G/admin/view_product.php