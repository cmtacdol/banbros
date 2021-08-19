<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Home";   
$_SESSION['PAGE_NAV_TITLE'] = "Home"; 
$nav_id = 1;

include 'view/common/header.php'; 
include 'controllers/homepageController.php'; 

$getBanners = getBanner($nav_id);
$totals = [];

foreach($getBanners as $banner){
    $total_formated = "\"".$banner['Title']."\"";

    array_push($totals,$total_formated);
}
$totals_string = implode(",", $totals);
// $countWords = str_word_count($totals_string, 2);
// $withComma = implode(', ', $countWords);
// var_dump($withComma); die();

?>

<link rel="stylesheet" href="assets/css/custome_hompage.css">

<body>

    <?php include 'view/common/nav.php'; ?>

    <!-- <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white"
        style="background-image: url(assets/1920x1080/bgnew.jpg);">
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3"> <span class="js-display-typing"></span></h1>

                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <main role="main">

        <!-- Slider mini banner -->
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

        <?php include 'view/common/clientImage.php'; ?>

        <!-- End Our Product -->
        <section class="u-content-space pb-1 mb-0 revealOnScroll" data-animation="fadeInUp">
            <div class="container mx-auto w-100 ">

                <div class="card border-0">
                    <div class="card-body">
                        <h3 class="text-center">About Us</h3>
                        <img class="img-fluid products rounded w-100" src="assets/img/about2.jpg"
                            alt="Iamge Description">
                    </div>
                </div>

                <div class="card border-0 mt-3 revealOnScroll" data-animation="fadeInRight">
                    <div class="card-body">
                        <h5 style="color: #474a21" class="font-weight-bold">Banbros Commercial, Inc.</h5>
                        <p class="mb-4"><small>Established in 1997, carrying the primary purpose of distributing high
                                quality IT products in the Philippine Market.</small></p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6 col-sm">
                        <div class="card border-0 revealOnScroll" data-animation="fadeInLeft" style="height: 40vh">
                            <div class="card-body">
                                <div class="row p-2">
                                    <div class="mt-2 d-none d-lg-block">
                                        <div class="rounded-border">
                                            <i class="far fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-0">VISION</h5>
                                        <small>Our vision is to be the Global forefront Top
                                            Tier value-added Supplier of Innovative IT
                                            products and end-to-end services in the
                                            Information Technology distribution industry
                                            by providing holistic and complementing
                                            products to provide strong and consistent
                                            growth in both revenues and profit for the
                                            company and for its partners.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm">
                        <div class="card border-0 revealOnScroll" data-animation="fadeInRight" style="height: 40vh">
                            <div class="card-body">
                                <div class="row p-2">
                                    <div class="mt-2 d-none d-lg-block">
                                        <div class="rounded-border">
                                            <i class="far fa-building"></i>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h5 class="mb-0">MISSION</h5>
                                        <small>Our mission is to be the top forefront
                                            Innovator that provides IT products,
                                            essentials, holistic solution and
                                            excellent services all in one for customer
                                            Satisfaction.<br><br>
                                            We continuously seek improvements for
                                            more efficient, productive and satisfied
                                            employees, reseller and customer so we
                                            can all gain growth in all aspects.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- End Why We? -->


        <div class="container revealOnScroll" data-animation="fadeInUp">
            <!-- Slider mini banner -->
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/banner/belkin.jpg" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item ">
                        <img src="assets/banner/brother.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container my-5 py-5 revealOnScroll" data-animation="fadeInUp">
            <header class="text-center w-md-50 mx-auto mb-8">
                <h2 class="h1">Featured Products</h2>
            </header>
            <div class="row">
                <div class="col-md-12 text-center ">
                    <nav class="nav-justified tabbable">
                        <div class="nav nav-tabs pb-2" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link text-dark active" id="pop1-tab" data-toggle="tab" href="#pop1"
                                role="tab" aria-controls="pop1" aria-selected="true">LIFAair</a>
                            <a class="nav-item nav-link text-dark" id="pop2-tab" data-toggle="tab" href="#pop2"
                                role="tab" aria-controls="pop2" aria-selected="false">Gamdias</a>
                            <a class="nav-item nav-link text-dark" id="pop3-tab" data-toggle="tab" href="#pop3"
                                role="tab" aria-controls="pop3" aria-selected="false">Edifier</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="pop1" role="tabpanel" aria-labelledby="pop1-tab">
                            <div class="pt-3"></div>
                            <div class="row">
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img7.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">LA500V</h6>
                                        <small class="d-block">LIFAair</small>
                                    </figcaption>
                                </a>

                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img8.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">LA350A</h6>
                                        <small class="d-block">LIFAair</small>
                                    </figcaption>
                                </a>

                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img9.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">LAC52</h6>
                                        <small class="d-block">LIFAair</small>
                                    </figcaption>
                                </a>

                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img9.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">LAC52</h6>
                                        <small class="d-block">LIFAair</small>
                                    </figcaption>
                                </a>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="pop2" role="tabpanel" aria-labelledby="pop2-tab">
                            <div class="pt-3"></div>

                            <div class="row">
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img13.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">Achilles M1A</h6>
                                        <small class="d-block">GAMDIAS</small>
                                    </figcaption>
                                </a>
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img14.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">Apollo DHD 356C Curved</h6>
                                        <small class="d-block">GAMDIAS</small>
                                    </figcaption>
                                </a>
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img15.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">Atlas HD275C Curved Monitor</h6>
                                        <small class="d-block">GAMDIAS</small>
                                    </figcaption>
                                </a>
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img15.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">Atlas HD275C Curved Monitor</h6>
                                        <small class="d-block">GAMDIAS</small>
                                    </figcaption>
                                </a>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pop3" role="tabpanel" aria-labelledby="pop3-tab">
                            <div class="pt-3"></div>

                            <div class="row">
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img19.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">XM3BT Multimedia Speaker</h6>
                                        <small class="d-block">EDIFIER</small>
                                    </figcaption>
                                </a>
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img20.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">W855BT Premiere Bluetooth Headset</h6>
                                        <small class="d-block">EDIFIER</small>
                                    </figcaption>
                                </a>
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img21.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">W820BT Bluetooth Headset</h6>
                                        <small class="d-block">EDIFIER</small>
                                    </figcaption>
                                </a>
                                <a href="#" class="col-sm-4 col-md mx-2 u-portfolio__item figures">
                                    <img class="u-portfolio__image" src="assets/portfolio/img21.jpg"
                                        alt="Image Description">
                                    <figcaption class="u-portfolio__info">
                                        <h6 class="mb-0">W820BT Bluetooth Headset</h6>
                                        <small class="d-block">EDIFIER</small>
                                    </figcaption>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- Testimonials -->
        <section class="u-content-space pt-5 pb-5" style="background:#0094DA">
            <div class="container">
                <!-- Testimonials: Header -->
                <header class="text-center w-md-50 mx-auto mb-3">
                    <h2 class="h1 font-weight-bold text-white revealOnScroll" data-animation="fadeInUp">EXECUTIVES</h2>
                </header>
                <!-- End Testimonials: Header -->

                <div class="row">
                    <div class="col-lg col-sm">
                        <div class="card text-center border border-0 revealOnScroll" data-animation="fadeInUp"
                            style="background: none">
                            <div class="fixImage text-center p-3">
                                <img src="assets/img-temp/ava/bangayan.png" class="card-img-top" style="width: 80%;"
                                    alt="">
                            </div>
                            <h5 style="color:white;" class="card-title font-weight-bold text-center mb-0">Richard
                                Bangayan</h5>
                            <p class="text-center pt-0 font-italic text-white"><small>Vice President for
                                    Sales</small></p>
                            <div class="row socials mb-0 d-flex justify-content-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-sm">
                        <div class="card text-center border border-0 revealOnScroll" data-animation="fadeInDown"
                            style="background: none">
                            <div class="fixImage text-center p-3">
                                <img src="assets/img-temp/ava/lao.png" class="card-img-top" style="width: 80%;" alt="">
                            </div>
                            <h5 style="color:white;" class="card-title font-weight-bold text-center mb-0">Paton
                                Lao</h5>
                            <p class="text-center pt-0 font-italic text-white"><small>Vice President for
                                    Operations</small></p>
                            <div class="row socials mb-0 d-flex justify-content-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg col-sm">
                        <div class="card text-center border border-0 revealOnScroll" data-animation="fadeInUp"
                            style="background: none">
                            <div class="fixImage text-center p-3">
                                <img src="assets/img-temp/ava/trinidad.png" class="card-img-top" style="width: 80%;"
                                    alt="">
                            </div>
                            <h5 style="color:white;" class="card-title font-weight-bold text-center mb-0">Gayle
                                Trinidad</h5>
                            <p class="text-center pt-0 font-italic text-white"><small>Vice President for
                                    Sales and Marketing</small></p>
                            <div class="row socials mb-0 d-flex justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonials -->

        <!-- Testimonials -->
        <section class="u-content-space">
            <div class="container">
                <!-- Testimonials: Header -->
                <header class="text-center w-md-50 mx-auto mb-8 revealOnScroll" data-animation="fadeInUp">
                    <h2 class="h1">Press Release</h2>
                    <p class="h5">What's New</p>
                </header>
                <!-- End Testimonials: Header -->

                <div class="row">
                    <div class="col-lg-4 mb-7 mb-lg-0 px-lg-5 revealOnScroll" data-animation="fadeInLeftBig">
                        <a href="https://preview.mailerlite.com/a8y3t4/1708399749796729310/l9y2/">
                            <div class="card u-box-shadow-lg">
                                <div class="card-images">
                                    <img src="view/images/othersrc/TipEdgecore.PNG" class="card-img-top mx-auto d-block"
                                        id="newsImage">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-7 mb-lg-0 px-lg-5 revealOnScroll" data-animation="fadeInUpBig">
                        <a href="https://mailchi.mp/764e819c6688/mltg-cn-the-best-point-to-point-choice?e=b4e161d2be">
                            <div class="card u-box-shadow-lg">
                                <div class="card-images">
                                    <img src="view/images/othersrc/MetroLinq.PNG" class="card-img-top mx-auto d-block"
                                        id="newsImage">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-7 mb-lg-0 px-lg-5 revealOnScroll" data-animation="fadeInRightBig">
                        <a
                            href="http://app.edm.sangfor.cn/e/es?s=1587972869&e=121325&elqTrackId=a72ae390af474d9c960befe4cc2eef6c&elq=d065ec4c4e6c48bda7ee0ac72d3acfa2&elqaid=1066&elqat=1">
                            <div class="card u-box-shadow-lg">
                                <div class="card-images">
                                    <img src="view/images/othersrc/sangfor.PNG" class="card-img-top mx-auto d-block"
                                        id="newsImage">
                                </div>

                            </div>
                        </a>
                    </div>

                    <!-- End Testimonial -->
                </div>
            </div>
            </div>
        </section>
        <!-- End Testimonials -->


        <div style="background: #1b97cf;" class="py-5">
            <div class="py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-2 text-center revealOnScroll" data-animation="fadeInUp">
                        <button onclick="location.href='contact.php';" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-phone-volume fa-lg"></i></button>
                        <h6 class="text-white mt-3">Inquire Now</h6>
                    </div>

                    <div class="col-lg-2 text-center revealOnScroll" data-animation="fadeInUp">
                        <button type="button" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-tv fa-lg"></i></button>
                        <h6 class="text-white mt-3">Webinar</h6>
                    </div>

                    <div class="col-lg-2 text-center revealOnScroll" data-animation="fadeInUp">
                        <button type="button" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-tags fa-lg"></i></button>
                        <h6 class="text-white mt-3">Promos</h6>
                    </div>

                    <div class="col-lg-2 text-center revealOnScroll" data-animation="fadeInUp">
                        <button onclick="location.href='https://tekzoneph.com/index.php/contact/';"
                            class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-user-plus fa-lg"></i></button>
                        <h6 class="text-white mt-3">Contact support</h6>
                    </div>

                    <div class="col-lg-2 text-center revealOnScroll" data-animation="fadeInUp">
                        <button onclick="location.href='partners.php';" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-chart-pie fa-lg"></i></button>
                        <h6 class="text-white mt-3">Do business with us</h6>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <div class=" overFooter">
        <div class="overlay"></div>
        <div style="z-index: 99;" class="container text-center text-white">
            <div class="pt-4">
                <div class="col">
                    <h2 class="font-weight-bold">Newsletter</h2>
                </div>
                <div class="mx-auto" style="width: 50%;">
                    <p><small class="font-italic">Be updated with the trends in technology.<br>Subscribe to us and we
                            will keep you posted. </small></p>
                </div>
                <div class="mx-auto mb-7" style="width: 50%;">
                    <div class="input-group">
                        <input type="email" class="form-control border border-none" placeholder="Enter your email">
                        <div class="input-group-append">
                            <button class="btn btn-warning text-white" type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'view/common/fb_plugins.php'; ?>
        <?php include 'view/common/footer.php'; ?>

        <?php include 'view/common/scripts.php'; ?>


        <script>
        $(document).on('ready', function() {
            // initialization of text animation (typing)
            $(".js-display-typing").typed({
                strings: [
                    <?php echo $totals_string; ?>
                ],
                typeSpeed: 60,
                loop: true,
                backDelay: 2500
            });
        });
        </script>
</body>
<!-- End Body -->