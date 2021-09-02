<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Business";
$_SESSION['PAGE_NAV_TITLE'] = "Business"; 
$nav_id = 3;

include 'view/common/header.php'; 
include 'controllers/brandController.php';  

$getbrandBussiness = getBrandforBusinnes($nav_id);
$getBanners = getBanner($nav_id);

?>
<link rel="stylesheet" type="text/css" href="assets/css/modal.css">
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

.card {
    height: 53vh;
}

.business-text {
    display: -webkit-box;
    width: 100%;
    height: 109.2px;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
}

#businessImage {
    width: 70%;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>
    <?php include 'view/common/modal.php'; ?>


    <main role="main">

        <!-- Slider carousel -->
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
                foreach($getBanners as $banner){ 
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

        <div class="container">

            <div class="row text-center text-lg-left mt-5">
                <?php if(count($getbrandBussiness) < 1){ ?>
                <h3 class="mb-4">No Data</h3>
                <?php }else{ ?>
                <?php foreach($getbrandBussiness as $brand){ ?>
                <div class="col-lg-3 col-md-4 col-6 previewImg revealOnScroll" data-animation="fadeInDown">
                    <a href="view_brand.php?brand_id=<?php echo $brand['IdBrand']; ?>" class="d-block mb-4 h-100">
                        <img class="img-fluid border-0 img-thumbnail" src="<?php echo $brand['Logo']; ?>" alt="">
                    </a>
                </div>
                <?php } ?>
                <?php } ?>



            </div>

        </div>
        <!-- /.container -->

    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <script>
    $(document).on("click", "#btnModals", function() {
        $(".modal-body #Imagehead").attr('src', $(this).data('image'));
        $(".modal-body #description").text($(this).data('desc'));
    });
    </script>
</body>
<!-- End Body -->

</html>