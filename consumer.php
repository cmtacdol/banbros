<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Consumer";
$_SESSION['PAGE_NAV_TITLE'] = "Consumer"; 

include 'view/common/header.php'; 

?>
<link rel="stylesheet" type="text/css" href="assets/css/modal.css">
<style>
.carousel-inner{
    height: 600px;
}
.imgCarousel{
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
    width: 80%;
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
                    <img src="assets/1920x1080/ACER2.jpg" class="d-block w-100 imgCarousel">
                </div>
                <div class="carousel-item">
                    <img src="assets/1920x1080/asus1.jpg" class="d-block w-100 imgCarousel">
                </div>
                <div class="carousel-item">
                    <img src="assets/1920x1080/gam.jpg" class="d-block w-100 imgCarousel">
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
                            <img src="assets/img-temp/partners/Ablerex SG Logo-01.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Ablerex is a brand of uninterruptible power supplies
                                (UPS) and
                                power quality devices
                                (PQD) produced and marketed by Ablerex Electronics (S) Pte Ltd. Headquartered in
                                Singapore, the company was founded in 2002 and begun its operations in 2003. The Ablerex
                                brand was launched in 2004.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
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
                            <img src="assets/img-temp/partners/altec-lansing-vector-logo.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Altec Lansing, Inc. is a U.S. audio electronics company.
                                Their primary products are loudspeakers and associated audio electronics for
                                professional, home, automotive and multimedia applications.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/ANYTEK (1).png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Anytek is a high-end dashcam brand that focusses on a
                                combination of design and usability.</p>

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
                            <img src="assets/img-temp/partners/balance.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">No Description</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/belkin.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Belkin International, Inc., is an American manufacturer
                                of consumer electronics that specializes in connectivity devices.</p>

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
                            <img src="assets/img-temp/partners/EDGECORE.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">No Description</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
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
                            <img src="assets/img-temp/partners/GD_Logo_Glod_H.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">GAMDIAS is a gaming brand based on ancient Greek
                                Mythology, coupled with a visually pleasing work of beauty, obsessed with pursuing the
                                epitome of gaming. Themed around ancient Greek Mythology, all GAMDIAS products are named
                                after Greek gods.</p>

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
                            <img src="assets/img-temp/partners/IFUTURE LOGO-01.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">No Description</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
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
                            <img src="assets/img-temp/partners/KGuard-Security-Logo-1-5029.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">KGuard products are highly compatible, stable and
                                intelligent, and have successfully entered the US, Europe, Middle East, Africa, Latin
                                America, Australia and Southeast Asia markets.</p>

                            <a href="product_kguard.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/kodak.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Kodak is a technology company providing industry-leading
                                hardware, software, consumables and services for commercial print, packaging and
                                publishing.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
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
                            <img src="assets/img-temp/partners/LOGO F_D-01.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Fenda Company was founded in 2005, starting with
                                loudspeaker development and manufacturing, and achieved its own core competence of
                                electro-acoustic design, wireless technology, software development to give
                                extra-ordinary experience.</p>

                            <a href="product_f&d.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/Philips_logo_logotype_emblem.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">MMD (Multimedia Displays) is a wholly-owned company of
                                TPV established in 2009 through a brand license agreement with Philips, and its role is
                                to exclusive.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/plantronics.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Plantronics and Polycom are now together as Poly. Partner
                                of choice for the communications and collaboration ecosystem.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/SDigital logo+box-red_HR.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">SDigital is the premier brand of our company, S.E.M.
                                Industries, and it represents the expression of our 2 core values of design: Aesthetics
                                and Acoustics.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/Silicon_Power_logo.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Silicon Power is an international brand and a
                                Taiwan-based manufacturer of flash memory products, including flash memory cards, USB
                                flash drives, portable hard drives, DRAM modules, card readers, solid state drives, USB
                                adapters.</p>

                            <a href="product_siliconpower.php" class="btn btn-outline-info rounded-circle"
                                id="btnModals" style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/sony.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Sony Corporation is a Japanese multinational conglomerate
                                corporation headquartered in Kōnan, Minato, Tokyo.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/tekplay_logo.png" class="card-img-top"
                                id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">No Description</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/THIEYE.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">ThiEYE is specialized in an integrated outdoor camera
                                scheme, focusing on action cameras development, design, production and sales.</p>

                            <a href="product_thieye.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/toughtested.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">ToughTested products are built to meet the demands of
                                professionals.</p>

                            <a href="#" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/ubtech.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">UBTECH is the only company offering such a broad, open
                                ecosystem of robot innovations, from entry level consumer products, to educational
                                tools, to advanced devices offering complex capabilities solving difficult challenges.
                            </p>

                            <a href="product_ubtech.php" class="btn btn-outline-info rounded-circle" id="btnModals"
                                style="width: 40px; height: 40px;"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-4 col-6 previewImg">

                    <div class="card shadow-sm mb-4">
                        <div class="text-center border">
                            <img src="assets/img-temp/partners/WST.png" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <p class="business-text text-left">Shenzhen WanShunTong Science & Technology Co.,Ltd. is a
                                high technology enterprise engaged in manufacturing of mobile phone accessories.</p>

                            <a href="product_wst.php" class="btn btn-outline-info rounded-circle" id="btnModals"
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