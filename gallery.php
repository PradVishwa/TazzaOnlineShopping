<?php

include("admin/conn.php");

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

    <title>Gallery</title>
</head>

<body class="gallery">


    <!-- navbaar section start -->
    <?php include("navbar.php"); ?>

    <!-- navbar section exit -->

    <!-- banner section start  -->
    <section class="banner_section">
        <div class="container">
            <div class="banner-content">
                <h1>Gallery</h1>
            </div>
        </div>
    </section>
    <!-- banner section exit  -->

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
                $query3 = "select * from tbl_product order by pro_id desc limit 9";
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
        </div>
    </section>
    <!-- Gallery section Exit -->


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