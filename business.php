<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Business";
$_SESSION['PAGE_NAV_TITLE'] = "Business"; 

include 'view/common/header.php'; 

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
        <div id="crouselIndicator" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#crouselIndicator" data-slide-to="0" class="active"></li>
                <li data-target="#crouselIndicator" data-slide-to="1"></li>
                <li data-target="#crouselIndicator" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/1920x1080/ACER2.jpg" class="d-block w-100 imgCarousel">
                </div>
                <div class="carousel-item">
                    <img src="assets/1920x1080/asus1.jpg" class="d-block w-100 imgCarousel">
                </div>
                <div class="carousel-item">
                    <img src="assets/1920x1080/gam.jpg" class="d-block w-100 imgCarousel">
                </div>
            </div>
            <a class="carousel-control-prev" href="#crouselIndicator" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#crouselIndicator" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container">
            <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Product Catalog</h1>

            <hr class="mt-2 mb-5">

            <div class="row text-center text-lg-left">

                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/ACER (1).png" alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail"
                            src="assets/img-temp/partners/asus-world-motherboard-gaming-brand-2.png" alt="">
                    </a>
                </div>
                <!-- asdaaaaaaaaaaaaaaaa -->
                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="product_brother.php" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/brother.png" alt="">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="product_edifier.php" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/edifier.png" alt="">
                    </a>
                </div>

                
                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="product_lifaair.php" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/LIFAair.png" alt="">
                    </a>
                </div>

                
                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/KEBOS-01.png" alt="">
                    </a>
                </div>

                
                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="product_hikvision.php" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/hikvision.png" alt="">
                    </a>
                </div>

                
                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/Ignite Logo-01.png" alt="">
                    </a>
                </div>

                
                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <a href="#" class="d-block mb-4 h-100">
                        <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/EDGECORE.png" alt="">
                    </a>
                </div>

              
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