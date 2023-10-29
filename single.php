<?php
session_start();

if ($_SESSION['user'] == "") {

    header("location:login.php");
} else {
    $pro_id = $_REQUEST['pro_id'];

    // echo $pro_id;
    include("admin/conn.php");
    $query = "select * from tbl_product where pro_id='$pro_id'";
    $pro = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($pro);
    $user = $_SESSION['user'];

    $query2 = "select * from tbl_user where email='$user'";
    $res = mysqli_query($conn, $query2);

    $row1 = mysqli_fetch_array($res);


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


        <title>Buy </title>
    </head>

    <body class="product">

        <!-- navbaar section start -->
        <?php include("navbar.php"); ?>
        <!-- navbar section exit -->

        <!-- banner section start  -->
        <section class="banner_section">
            <div class="container">
                <div class="banner-content">
                    <h1>Buy Now</h1>
                </div>
            </div>
        </section>
        <!-- banner section exit -->

        <!-- product section start  -->
        <section class="product_section">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center pb-5">
                        <h2 class="section-title">Buy Products</h2>
                        <p class="section-subtitle">The Passage Experienced A Surve IN Popularity During The 1960s When
                            Again During The 90s As Desktop Publishers</p>
                    </div>
                </div>

                <div class="align-items-center py-5">

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
                                <p class="h3"><?php echo $row['description']; ?></p>
                                <strong class="h3">Cost Price : </strong>
                                <p class="section-title offer"><?php echo $row['o_price']; ?></p>
                                <strong class="h3">Less Price : </strong>
                                <p class="section-title"> <?php echo $row['s_price']; ?>/-</p>
                                <small class="h5">Shipping Address : <?php echo $row1['address']; ?>, <?php echo $row1['city']; ?></small><br><br>

                                <input type="radio" class="input-text-item" name="" id="" checked> <span class="section-subtitle">Cash On Delivery </span>
                                <form action="single_code.php" method="post">
                                    <div class="row g-1 cat">
                                        <div class="col-md-3 mb-4">
                                            <input type="hidden" name="user" id="" class="form-control" value="<?php echo $row1['user_id'];?>">
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <input type="hidden" name="pro" id="" class="form-control" value="<?php echo $row['pro_id'];?>">
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <input type="hidden" name="cat" id="" class="form-control" value="<?php echo $row['cat_id'];?>">
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <input type="hidden" name="unit" id="" class="form-control" value="1">
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <input type="hidden" name="amount" id="" class="form-control" value="<?php echo $row['s_price'];?>">
                                        </div>
                                        
                                            <input type="submit" class="btn main-btn" value="place Order">
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

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
<?php
}
?>