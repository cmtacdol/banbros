<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Consumer";
$_SESSION['PAGE_NAV_TITLE'] = "Consumer"; 

include 'view/common/header.php'; 

?>

  <body>
   
  <?php include 'view/common/nav.php'; ?>


    <main role="main">

        <!-- Slider carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/1920x1080/acer2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/1920x1080/asus1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="assets/1920x1080/gam.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/Ablerex SG Logo-01.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/ACER (1).png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/altec-lansing-vector-logo.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/ANYTEK (1).png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/asus-world-motherboard-gaming-brand-2.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/balance.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/belkin.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/brother.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/EDGECORE.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/edifier.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/GD_Logo_Glod_H.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/hikvision.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/IFUTURE LOGO-01.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/Ignite Logo-01.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/KEBOS-01.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/KGuard-Security-Logo-1-5029.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/kodak.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/LIFAair.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/LOGO F_D-01.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/Philips_logo_logotype_emblem.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/plantronics.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/SDigital logo+box-red_HR.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/Silicon_Power_logo.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/sony.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/tekplay_logo.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/THIEYE.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/toughtested.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/ubtech.png" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 previewImg">
            <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="assets/img-temp/partners/WST.png" alt="">
                </a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
  </body>
  <!-- End Body -->
  
</html>