<?php
// session_start();
// if($_SESSION['user']==""){
//     header("location:login.php");
// }else{
include("admin/conn.php");
$query = "select * from tbl_product";
$res = mysqli_query($conn, $query);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesom 5  CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- style sheet  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">


    <title>Products </title>
</head>

<body class="product">

    <!-- navbaar section start -->
    <?php include("navbar.php"); ?>
    <!-- navbar section exit -->

    <!-- banner section start  -->
    <section class="banner_section">
        <div class="container">
            <div class="banner-content">
                <h1>Products</h1>
            </div>
        </div>
    </section>
    <!-- banner section exit  -->

    <!-- product section start  -->
    <section class="product_section">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2 class="section-title">Our Products</h2>
                    <p class="section-subtitle">The Passage Experienced A Surve IN Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers</p>
                </div>
            </div>

            <div class="align-items-center py-5">
                <?php
                while ($row = mysqli_fetch_array($res)) {
                ?>
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-12 mb-5">
                            <div class="card border-o me-lg-5">
                                <img src="admin/product/<?php echo $row['filename']; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-12 mb-5 order-2 order-lg-1">
                            <div class="product-content">
                                <h2><?php echo $row['pro_name']; ?></h2>
                            </div>
                            <div class="product-details">
                                <p class="section-subtitle"><?php echo $row['description']; ?></p>
                                <strong>Cost Price : </strong> <p class="section-title offer"><?php echo $row['o_price'];?></p>
                                <strong>Less Price : </strong> <p class="section-title"> <?php echo $row['s_price'];?>/-</p>

                                <a href="double_code.php?pro_id=<?php echo $row['pro_id'];?>&cat_id=<?php echo $row['cat_id'];?>" class="btn main-btn">Add To Cart</a>
                                <a href="single.php?pro_id=<?php echo $row['pro_id'];?>" class="btn main-btn">Buy Now</a>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>

        </div>

    </section>
    <!-- product section Exit -->

    <!-- footer section start  -->
    <?php include("footer.php"); ?>
    <!-- footer section exit -->


    <!-- jQuery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- lightbox js  -->
    <script src="./assets/js/lightbox.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="./assets/js/main.js"></script>
</body>

</html>
<!-- <?php ?> -->