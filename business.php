<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Business";
$_SESSION['PAGE_NAV_TITLE'] = "Business"; 

include 'view/common/header.php'; 

?>
<link rel="stylesheet" type="text/css" href="assets/css/modal.css">
<style>
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
                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/ACER (1).png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Acer Inc. is a Taiwanese multinational hardware and
                                electronics corporation specializing in advanced electronics technology, headquartered
                                in Xizhi, New Taipei City.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/asus-world-motherboard-gaming-brand-2.png"
                                class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">ASUS is a Taiwan-based, multinational computer hardware
                                and consumer electronics company.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/brother.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Brother Industries, Ltd. is a Japanese multinational
                                electronics and electrical equipment company headquartered in Nagoya, Japan</p>

                            <a href="product_brother.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/edifier.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Edifier is a Chinese audio manufacturer that produces
                                speakers, music systems, and headphones for personal and home entertainment.</p>

                            <a href="product_edifier.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/LIFAair.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">LIFAair is an Air purification experts from Finland.
                                Founded in Helsinki in 1988 and has spent more than 30 years in air pollution control
                                and has worked with worldwide government agencies, healthcare professionals and sporting
                                organizations to improve indoor air quality.

                                LIFAair uses advanced cleaning technology to develop innovative products underpinning
                                the company’s ethos, “Responsible for Every Breath.”</p>

                            <a href="product_lifaair.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/KEBOS-01.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">KEBOS TECHNOLOGIES CO., LTD. was founded in 2009, is a
                                set of power system engineering company UPS(uninterruptible power supply)</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/hikvision.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Hangzhou Hikvision Digital Technology Co., Ltd. is a
                                partially state-owned Chinese manufacturer and supplier of video surveillance equipment
                                for civilian and military purposes, headquartered in Hangzhou, China. Its controlling
                                shares are owned by the Chinese government.</p>

                            <a href="product_hikvision.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/Ignite Logo-01.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">IgniteNet is the provider of cloud managed wireless
                                solutions. The Company’s IgniteNet Cloud offers its clients an affordable cloud-managed
                                WiFi.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/EDGECORE.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">No Description</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

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