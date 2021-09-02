<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "News";
$_SESSION['PAGE_NAV_TITLE'] = "News";  
$nav_id = 5;

include 'view/common/header.php'; 
include 'controllers/newsController.php'; 

$getallpost = getPost($nav_id);
$getbanner = getBanner($nav_id);
?>

<head>

    <?php include 'view/common/nav.php'; ?>

    <style>
    .carousel-inner {
        height: 600px;
    }

    .imgCarousel {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    @media screen and (max-width: 769px) {
        .imgCarousel {
            height: 600px;
            object-fit: cover;
        }
    }

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

    <?php if(count($getbanner) <= 1){ ?>

    <?php foreach($getbanner as $banner){ ?>
    <div class="banner-image" style="background-image: url(<?php echo $banner['Image']; ?>); ">
        <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
        <div class="container u-overlay__inner u-ver-center u-content-space text-white" style="position: none">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3 revealOnScroll" data-animation="fadeInUp">
                            <?php echo $banner['Title']; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <?php }else{ ?>
    <div id="carouselIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center text-white">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3"> <span class="js-display-typing"></span></h1>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-inner main-banner-inner">
            <?php 
                $count = 0;
                foreach($getbanner as $banner){ 
                    $count++;
                    if($count == 1){
                        $count = "active";
                    }
                ?>
            <div class="carousel-item <?php echo $count; ?>">
                <img src="<?php echo $banner['Image']; ?>" class="d-block w-100 imgCarousel">
            </div>
            <?php }  ?>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <?php } ?>

    <div class="container">
        <div class="row my-5">
            <?php 
            $link_path = "";
                foreach($getallpost as $post){
                    switch($post['Title']){
                        case "Blog":
                            $link_path = "blog.php";
                            break;
                        case "Events":
                            $link_path = "#";
                            break;
                        case "Webinar":
                            $link_path = "webinar.php";
                            break;
                        case "Promos":
                            $link_path = "promos.php";
                            break;
                    }
            ?>

            <div class="col-lg-3 col-sm">
                <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                    <div class="card-images">
                        <img src="<?php echo $post['Image']; ?>" class="card-img-top mx-auto d-block" id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h2 class="card-title text-center my-0 py-0"><?php echo $post['Title']; ?></h2>
                        <p class="card-text text-left"><?php echo $post['Description']; ?> </p>

                        <a href="<?php echo $link_path; ?>?post_id=<?php echo $post['IdNewsPost']; ?>"
                            class="btn btn-info rounded-pill py-1" id="btnModals">Learn more</a>
                    </div>
                </div>
            </div>

            <?php } ?>


        </div>
    </div>



</main>

<?php include 'view/common/fb_plugins.php'; ?>
<?php include 'view/common/footer.php'; ?>

<?php include 'view/common/scripts.php'; ?>


</body>
<!-- End Body -->

</html>