<?php
session_start();
$_SESSION['PAGE_TITLE'] = "About Us";
$_SESSION['PAGE_NAV_TITLE'] = "About Us";
$nav_id = 2;

include 'view/common/header.php'; 
include 'controllers/aboutController.php'; 

$getBanners = getBanner($nav_id);
$totals = [];

foreach($getBanners as $banner){
    $total_formated = "\"".$banner['Title']."\"";
    $total_images = $banner['Image'];

    array_push($totals,$total_formated);
}
$totals_string = implode(",", $totals);


?>
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

.bci {
    height: 250px;
}

.card ::-webkit-scrollbar {
    width: 10px;
}

/* Track */
.card ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
}

/* Handle */
.card ::-webkit-scrollbar-thumb {
    background: skyblue;
    border-radius: 10px;
}

/* Handle on hover */
.card ::-webkit-scrollbar-thumb:hover {
    background: #b30000;
}
</style>

<head>
    <?php include 'view/common/nav.php';?>

    <div id="carouselIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="container u-overlay__inner u-ver-center u-content-space u-overlay--dark">
            <div class="overay-dark"
                style="background: #0a0a0a2a; position: absolute; width: 100%; top:0; bottom: 0; left: 0; right: 0;">
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center text-white">
                        <h3 class="text-uppercase u-letter-spacing-sm mb-0 revealOnScroll" data-animation="fadeInUp">OUR
                            COMPANY</h3>
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
</head>
<!-- End Header -->

<main role="main">

    <!-- Tab navigation -->
    <section class="u-content-space">
        <div class="container">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-one-tab" data-toggle="pill" href="#pills-one" role="tab"
                        aria-controls="pills-one" aria-selected="true">Company History</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-two-tab" data-toggle="pill" href="#pills-two" role="tab"
                        aria-controls="pills-two" aria-selected="false">Affiliates</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-three-tab" data-toggle="pill" href="#pills-three" role="tab"
                        aria-controls="pills-three" aria-selected="false">Channel Distribution</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-four-tab" data-toggle="pill" href="#pills-four" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Organizational chart</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-four-tab" data-toggle="pill" href="#pills-five" role="tab"
                        aria-controls="pills-contact" aria-selected="false">BCI Satelite Offices</a>
                </li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                    <div class="container">
                        <h2 class="text-center mb-2">HISTORY & GROWTH</h2>
                        <div class="row">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4 mb-4">
                                    <div class="card revealOnScroll" data-animation="fadeInLeft"
                                        style="width: 100%; height: 300px; border-radius: 10px">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Banbros Commercial, Inc.</h4>
                                            <p class="card-text">
                                                Established in 1997,
                                                carrying the primary purpose
                                                of distributing high quality
                                                IT products in the Philippine
                                                Market.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 mb-4">
                                    <div class="card revealOnScroll" data-animation="fadeInUp"
                                        style="width: 100%; height: 300px; border-radius: 10px">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Banbros Commercial Inc. (BCI)</h4>
                                            <p class="card-text">One of the dominant players in the Innovation &
                                                Information Technology that provides products which
                                                have leadership position in the market.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4 mb-4">
                                    <div class="card revealOnScroll" data-animation="fadeInRight"
                                        style="width: 100%; height: 300px; border-radius: 10px">
                                        <div class="card-body">
                                            <h4 class="card-title mb-0">Our company today, BCI continues to provides
                                            </h4>
                                            <p class="card-text">strong and consistent growth in the revenues and
                                                profits of the company. We aim to be the leader in the
                                                distribution channel for all products by being number
                                                one in all product categories.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-12">
                                    <div class="card revealOnScroll" data-animation="fadeInUp"
                                        style="width: 100%; height: 280px; border-radius: 10px">
                                        <div class="card-body">
                                            <h1 class="card-title font-weight-bold mb-0">VISION</h1>
                                            <div class="col ">
                                                <div>
                                                    Banbros Commercial Inc. vision is to be the Global forefront Top
                                                    Tier
                                                    value-added Supplier of Innovative IT products and end-to-end
                                                    services
                                                    in the Information Technology distribution industry by providing
                                                    holistic and complementing products to provide strong and consistent
                                                    growth in both revenues and profit for the company and for its
                                                    partners.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg mb-12">
                                    <div class="card revealOnScroll" data-animation="fadeInUp"
                                        style="width: 100%; height: 280px; border-radius: 10px">
                                        <div class="card-body">
                                            <h1 class="card-title font-weight-bold mb-0">MISSION</h1>
                                            <div class="col">
                                                <div>
                                                    Banbros Commercial Inc. mission is to be the top forefront Innovator
                                                    that provides IT products, essentials, holistic solution and
                                                    excellent
                                                    services all in one for customer Satisfaction.
                                                    We continuously seek improvements for more
                                                    efficient, productive and satisfied employees, reseller and customer
                                                    so
                                                    we can all gain growth in all aspects.

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg mb-12 mt-5">
                                    <div class="card revealOnScroll" data-animation="fadeInUp"
                                        style="width: 100%; height 280px; border-radius: 10px">
                                        <div class="card-body">
                                            <h1 class="card-title font-weight-bold text-center mb-0">STRATEGY</h1>
                                            <div class="col text-center">
                                                <div class="col">
                                                    We believe in a win-win strategy. We want long-term partners And
                                                    have
                                                    developed and forged relationships with leading Manufacturers so we
                                                    can
                                                    ensure that our customers Enjoy top of the products with the highest
                                                    level Of quality. We are constantly upgrading the quality of our
                                                    Service
                                                    and support group in an effort to Enhance value for dealers and
                                                    eventually More value for their respective clients. We are
                                                    consistently
                                                    expanding our channel assets Covering all distribution networks.

                                                </div>
                                                <br>
                                                <div class="col">
                                                    Banbros Commercial Inc. is beyond
                                                    The traditional distribution / trading company By focusing on
                                                    BRANDING
                                                    strategies for its Products.

                                                    The company believes in brand building As the key to the success of
                                                    products In the market for the long term.

                                                    90% of our products are successful due to our Branding activities

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                    <div class="container mt-8 revealOnScroll" data-animation="fadeInUp">
                        <div class="container mt-8">
                            <div class="mx-auto text-center">
                                <div class="mx-auto text-center org_chart">
                                    <!-- <img src="assets/img/org-chart/tekzone.png" alt=""> -->
                                    <h1 style="color: #0C65C7; font-weight: bold">Tekzone Inc.</h1>

                                    <div class="mt-4 text-left">
                                        <p>Service Company handling repairs and logistics for both end user and channel.
                                            Tekzone has invested on a ( Ball Grid Array Machine ) BGM machine to further
                                            increase the capacity of Tekzone to do board repair of components.</p>

                                        <p>They were also appointed as Brother PH and Acer PH Accredited Service
                                            Provider.</p>

                                        <h5><u>Main Service Centers:</u></h5>

                                        <h6 class="font-weight-bold mb-0">Manila : Tekzone</h6>
                                        <p>1000 sq meter facility dedicated for logistics, after sales support and part
                                            depot located in Cainta Rizal covers Luzon area.</p>

                                        <h6 class="font-weight-bold mb-0">Cebu: Banbros Cebu Office</h6>
                                        <p>Covers Visayas and Mindanao Areas</p>

                                        <p>Our service centers serve as parts depot with complete after sales support
                                            including full staff of technicians.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                    <div class="container mt-8 revealOnScroll" data-animation="fadeInUp">
                        <div class="mx-auto text-center">
                            <h3>DISTRIBUTION CHANNEL <br> Partner for Growth</h3>
                        </div>
                        <div>

                            <p class="text-center">
                                <b>Banbros Commercial Inc.</b> has a network of over 500 dealers from small to medium to
                                large resellers.
                            </p>
                            <div class="mx-auto col-lg-8 col-sm-6">
                                <ul>
                                    <li>IT Retailers – from small to large retail chains</li>
                                    <li>Corporate Resellers – corporate resellers both large and small</li>
                                    <li>System Integrators</li>
                                    <li>CE/Audio/Mobile Shops – large appliance chains such as SM (consignor), Emcor ,
                                        Wellcom, Semicon, Sony Centers, Sony Xperia Shops, Anson’s Appliance, Astro
                                        Vision, Robinson’s Appliance, K-Servico </li>
                                </ul>
                            </div>
                            <p class="text-center">
                                <b>Channel partners spread among all major cities nationwide: </b> <br>
                                Manila Office – serves Luzon Area and parts of Mindanao <br>
                                Cebu Office – serves Visayas and Mindanao Area
                            </p>

                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                    <div class="container revealOnScroll" data-animation="fadeInUp">


                        <div class="mx-auto text-center org_chart">
                            <img src="assets/img/org-chart/org4.png" alt=""><br><br><br>
                            <img src="assets/img/org-chart/org5.png" alt="">
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab">
                    <div class="container">


                        <div class="mx-auto org_chart">
                            <!-- <img src="assets/img/org-chart/satelite.jpg" alt=""> -->
                            <h1 style="color: #0C65C7; font-weight: bold">BANBROS COMMERCIAL INC. SATELLITE OFFICES</h1>

                            <div class="row mt-3">
                                <div class="col-lg-4 col-sm mb-4">
                                    <div class="card bci revealOnScroll" data-animation="fadeInLeftBig">
                                        <div class="card-header bg-info text-white">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="ml-2 mt-1" style="font-weight: bolder">Luzon Main Office:
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="overflow: auto">
                                            <span><u>Sales Office:</u></span>
                                            <p class="mb-0">BB Corporate Center</p>
                                            <p class="mb-0">32 Pilar Street corner Araullo Streets, Addition Hills
                                                SanJuan City, Metro Manila</p>

                                            <div class="mt-3">
                                                <span><u>Logistic/Warehouse:</u></span>
                                                <p class="mb-0">KM21 Ortigas Avenue Extension, Cainta Rizal</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm mb-4">
                                    <div class="card bci revealOnScroll" data-animation="fadeInUpBig">
                                        <div class="card-header bg-info text-white">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="ml-2 mt-1" style="font-weight: bolder">Visayas Office:
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="overflow: auto">
                                            <span><u>Sales/Logistic/Warehouse:</u></span>
                                            <p class="mb-0">RM ICE-A Copenhagen East Res.</p>
                                            <p class="mb-0">Building A.C Cortes Ave., Cambaro Mandaue City, Cebu</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm mb-4">
                                    <div class="card bci revealOnScroll" data-animation="fadeInRightBig">
                                        <div class="card-header bg-info text-white">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="ml-2 mt-1" style="font-weight: bolder">Mindanao:
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="overflow: auto">
                                            <span><u>Sales/Logistic/Warehouse:</u></span>
                                            <p class="mb-0">Jin-Long Complex</p>
                                            <p class="mb-0">R. Castillo St., Agdao Davao City</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm mb-4">
                                    <div class="card bci revealOnScroll" data-animation="fadeInUpBig">
                                        <div class="card-header bg-info text-white">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="ml-2 mt-1" style="font-weight: bolder">Iloilo:
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="overflow: auto">
                                            <span><u>Sales/Logistic/Warehouse:</u></span>
                                            <p class="mb-0">194 Lopez Jaena Norte</p>
                                            <p class="mb-0">St. Lapaz, Iloilo City</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-sm mb-4">
                                    <div class="card bci revealOnScroll" data-animation="fadeInUpBig">
                                        <div class="card-header bg-info text-white">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="ml-2 mt-1" style="font-weight: bolder">CDO:
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body" style="overflow: auto">
                                            <span><u>Sales/Logistic/Warehouse:</u></span>
                                            <p class="mb-0">105 Tres Montanas J. R,</p>
                                            <p class="mb-0">Borja Extension, Gusa, Cagayan De Oro City</p>

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


</main>

<?php include 'view/common/fb_plugins.php';?>
<?php include 'view/common/footer.php';?>

<?php include 'view/common/scripts.php';?>


<script>
$scripts = <?php echo $totals_string; ?>;
$(document).on('ready', function() {
    // initialization of text animation (typing)
    $(".js-display-typing").typed({
        strings: [
            // "HISTORY&nbsp;&&nbsp;GROWTH",
            // "BCI SATELLITE OFFICES",
            // "Banbros Commercial, Inc."
            $scripts
        ],
        typeSpeed: 60,
        loop: true,
        backDelay: 2500
    });
});
</script>
</body>
<!-- End Body -->

</html>