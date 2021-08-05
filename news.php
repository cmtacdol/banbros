<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "News";
$_SESSION['PAGE_NAV_TITLE'] = "News"; 

include 'view/common/header.php'; 

?>

<head>

    <?php include 'view/common/nav.php'; ?>

    <style>
    .banner-image {
        height: 600px;
        position: relative;
        padding-top: 6.25rem;
        padding-bottom: 6.25rem;
        background-repeat: no-repeat;
        background-position: 50% 0;
        background-size: cover;
    }

    .card {
        border: none;
        border-radius: 0;
        box-shadow: 0 0 10px 0 #0000001c;
    }

    .card-text {
        display: -webkit-box;
        width: 100%;
        height: 109.2px;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    #newsImage {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    </style>

</head>
<!-- End Header -->

<main role="main">

    <div class="banner-image" style="background-image: url(assets/1920x1080/NEWS.jpg); ">
        <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
        <div class="container u-overlay__inner u-ver-center u-content-space text-white" style="position: none">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3 revealOnScroll" data-animation="fadeInUp">NEWS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-lg-3 col-sm">
                <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                    <div class="card-images">
                        <img src="view/images/blog.png" class="card-img-top mx-auto d-block" id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title text-center my-0 py-0">Blog</h2>
                        <p class="card-text text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Praesentium voluptates eveniet quas atque iusto iste perferendis necessitatibus ipsum
                            quidem, placeat quos dolorum ad non laboriosam velit autem unde! Et, corrupti! </p>

                        <a href="blog.php" class="btn btn-info rounded-pill py-1" id="btnModals">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm">
                <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                    <div class="card-images">
                        <img src="view/images/blog.png" class="card-img-top mx-auto d-block" id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title text-center my-0 py-0">Events</h2>
                        <p class="card-text text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Praesentium voluptates eveniet quas atque iusto iste perferendis necessitatibus ipsum
                            quidem, placeat quos dolorum ad non laboriosam velit autem unde! Et, corrupti! </p>

                        <a href="blog.php" class="btn btn-info rounded-pill py-1" id="btnModals">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm">
                <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                    <div class="card-images">
                        <img src="view/images/blog.png" class="card-img-top mx-auto d-block" id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title text-center my-0 py-0">Webinar</h2>
                        <p class="card-text text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Praesentium voluptates eveniet quas atque iusto iste perferendis necessitatibus ipsum
                            quidem, placeat quos dolorum ad non laboriosam velit autem unde! Et, corrupti! </p>

                        <a href="webinar.php" class="btn btn-info rounded-pill py-1" id="btnModals">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm">
                <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                    <div class="card-images">
                        <img src="view/images/blog.png" class="card-img-top mx-auto d-block" id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title text-center my-0 py-0">Promos</h2>
                        <p class="card-text text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Praesentium voluptates eveniet quas atque iusto iste perferendis necessitatibus ipsum
                            quidem, placeat quos dolorum ad non laboriosam velit autem unde! Et, corrupti! </p>

                        <a href="promos.php" class="btn btn-info rounded-pill py-1" id="btnModals">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

<?php include 'view/common/fb_plugins.php'; ?>
<?php include 'view/common/footer.php'; ?>

<?php include 'view/common/scripts.php'; ?>


</body>
<!-- End Body -->

</html>