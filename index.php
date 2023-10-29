<?php
include("admin/conn.php");
$query = "select * from tbl_category";
$res = mysqli_query($conn, $query);


$query3 = "select * from tbl_notification ORDER BY noti_id desc limit 1,1";

$notice = mysqli_query($conn, $query3);

$noti = mysqli_fetch_array($notice);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- lightbox popup -->
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <!-- css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesom 5  CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- style sheet  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">
    <title>Tazza - online shop</title>

</head>

<body>
    <!-- navbaar section start -->
    <?php include("navbar.php"); ?>
    <!-- navbar section exit -->

    <!-- Banner Section start -->

    <?php
    $query4 = "select * from tbl_notification ORDER BY noti_id desc limit 1";

    $notice1 = mysqli_query($conn, $query4);

    $noti1 = mysqli_fetch_array($notice1);
    ?>
    <section class="banner_section">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="carousel-caption ">
                            <div class="banner-content">
                                <h1>70% off</h1>
                                <h3><?php echo $noti1['notification']; ?></h3>
                                <p>The readable content of the page when looking at its layout point of using of
                                    letters, as opposed.</p>
                                <a href="product.php" class="btn main-btn">All Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="carousel-caption ">
                            <div class="banner-content">
                                <h1>100% Organic</h1>
                                <h3>Fresh & Natural</h3>
                                <p>The readable content of the page when looking at its layout point of using of
                                    letters, as opposed.</p>
                                <a href="product.php" class="btn main-btn">All Products</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section exit -->

    <!-- notification section start  -->
    <Section class="notification_section">
        <div class="row my-4">
            <div class="col-sm-12">x
                <p class="section-subtitle">
                    <marquee behavior="alternate" style="font-size:25px; color:red;"><?php echo $noti['notification']; ?></marquee>
                </p>
            </div>
        </div>
    </section>
    <!-- notification section Exit -->

    <!-- feature section start -->
    <section class="feature_section">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card feature-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img src="./assets/images/feature-icon/ui-chat.svg" alt="chatlogo">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>24/07 Support</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card feature-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img src="./assets/images/feature-icon/truck-loaded.svg" alt="chatlogo">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>Free Shipping</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card feature-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img src="./assets/images/feature-icon/wheat.svg" alt="chatlogo">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>Fresh & Health</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 mb-5">
                    <div class="card feature-box">
                        <div class="text-center">
                            <div class="features-icon-border">
                                <div class="features-icon">
                                    <img src="./assets/images/feature-icon/lemon.svg" alt="chatlogo">
                                </div>
                            </div>
                            <div class="features-text">
                                <h3>From our Lab</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section start -->

    <!-- about section start  -->
    <section class="landing_about_section">
        <div class="container">
            <div class="row align-item-center">
                <div class="col-xl-5 col-lg-6 col-sm-8">
                    <div class="about-content">
                        <h2>We Providing More Service</h2>
                        <div class="about-detail">
                            <p class="fw-bold">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum tempore, minima
                                voluptatem tenetur fugit
                            </p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum non vitae dignissimos in
                                blanditiis voluptatem. Iusto, at aperiam. Hic doloremque quo nisi temporibus facere
                                repellat, obcaecati expedita sunt delectus enim culpa debitis deleniti mollitia iusto
                                repellendus amet in voluptatibus cum nostrum corrupti excepturi, saepe error. Iste ab
                                ratione voluptatibus nam!</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto culpa voluptatum, a quam
                                laborum natus facilis mollitia suscipit dicta. Omnis!</p>

                            <a href="about.php" class="btn main-btn">Raed More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section exit  -->

    <!-- product section start -->
    <section class="landing_product_section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center pb-5">
                    <h2 class="section-title">Our Best Seller Products</h2>
                    <p class="section-subtitle">The Passage Experienced A Surve IN Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers
                    </p>
                </div>
            </div>
            <?php
            while ($row = mysqli_fetch_array($res)) {
            ?>
                <div class="row mx-2">
                    <h2 class="mb-2"><?php echo $row['cat_name']; ?></h2>
                    <?php
                    $cat_id = $row['cat_id'];
                    $query2 = "select * from tbl_product where cat_id='$cat_id' order by pro_id desc limit 4";
                    $res2 = mysqli_query($conn, $query2);
                    while ($row2 = mysqli_fetch_array($res2)) {
                    ?>
                        <div class="col-lg-3 col-sm-6 mb-5">

                            <div class="card product-card">
                                <div class="product-img">

                                    <img src="admin/product/<?php echo $row2['filename']; ?>" alt="" class="img-fluid center">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4><?php echo $row2['pro_name']; ?></h4>
                                    <span>Rs.<?php echo $row2['s_price']; ?> /-</span>
                                </div>
                                <div class="product-detail">
                                    <a href="product.php" class="btn main-btn">View Products</a>
                                </div>
                            </div>

                        </div>
                    <?php
                    }
                    ?>
                </div>

            <?php } ?>
        </div>
    </section>
    <!-- product section exit -->

    <!-- testimonial Section Start  -->
    <section class="testimonial_section">
        <div class="container">
            <div class="row pb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title">Our Happy Customers</h2>
                    <p class="section-subtitle">
                        The Passage Experienced A Surve IN Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-sm-flex row">
                                    <div class="profile-box col-sm-5">
                                        <img src="./assets/images/testimonial/testimonial-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card col-sm-7">
                                        <div class="desc-box">
                                            <p class="fst-italic">Not only was cutomer support very fast, but the design
                                                is very professional. will definately be looking for new products
                                                in the future from this author.
                                            </p>
                                            <div class="my-4">
                                                <h4>Jecob Oramson</h4>
                                                <p class="m-0 text-white">Happy Customers</p>
                                            </div>
                                            <img src="./assets/images/testimonial/qoutes.svg" alt="qoutes" class="float-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="d-sm-flex row">
                                    <div class="profile-box col-sm-5">
                                        <img src="./assets/images/testimonial/testimonial-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card col-sm-7">
                                        <div class="desc-box">
                                            <p class="fst-italic">Not only was cutomer support very fast, but the design
                                                is very professional. will definately be looking for new products
                                                in the future from this author.
                                            </p>
                                            <div class="my-4">
                                                <h4>Jecob Oramson</h4>
                                                <p class="m-0 text-white">Happy Customers</p>
                                            </div>
                                            <img src="./assets/images/testimonial/qoutes.svg" alt="qoutes" class="float-end">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item ">
                                <div class="d-sm-flex row">
                                    <div class="profile-box col-sm-5">
                                        <img src="./assets/images/testimonial/testimonial-1.png" alt="" class="img-fluid">
                                    </div>
                                    <div class="card col-sm-7">
                                        <div class="desc-box">
                                            <p class="fst-italic">Not only was cutomer support very fast, but the design
                                                is very professional. will definately be looking for new products
                                                in the future from this author.
                                            </p>
                                            <div class="my-4">
                                                <h4>Jecob Oramson</h4>
                                                <p class="m-0 text-white">Happy Customers</p>
                                            </div>
                                            <img src="./assets/images/testimonial/qoutes.svg" alt="qoutes" class="float-end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial Section exit  -->

    <!-- Gallery section Start -->
    <section class="gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pb-5">
                    <h2 class="section-title">Our Gallery</h2>
                    <p class="section-subtitle">The Passage Experienced A Surve IN Popularity During The 1960s When
                        Again During The 90s As Desktop Publishers
                    </p>
                </div>
                <?php
                $query3 = "select * from tbl_product order by pro_id desc limit 6";
                $res3 = mysqli_query($conn, $query3);
                while ($row3 = mysqli_fetch_array($res3)) {
                ?>
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <a href="http://localhost/v&G/admin/product/<?php echo $row3['filename']; ?>" data-lightbox="image" data-title="<?php echo $row3['pro_name']; ?>">
                            <img src="admin/product/<?php echo $row3['filename']; ?>" alt="image" class="img-fluid rounded-3">
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>
    <!-- Gallery section Exit -->

    <!-- footer section start  -->
    <?php include("footer.php"); ?>
    <!-- footer section exit -->



    <!-- jQuery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- lightbox js  -->
    <script src="assets/js/lightbox.js"></script>

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="./assets/js/main.js"></script>

</body>

</html>