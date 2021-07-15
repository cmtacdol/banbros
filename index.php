<?php session_start(); $_SESSION['PAGE_TITLE']="Banbros | Home";   include 'view/common/header.php'; ?>


<style>
.carousel-fade .carousel-item {
    position: relative;
    opacity: 0;
    transition-duration: .6s;
    transition-property: opacity;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    opacity: 0;
}

.carousel-fade .carousel-item-next,
.carousel-fade .carousel-item-prev,
.carousel-fade .carousel-item.active,
.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-prev {
    transform: translateX(0);
    transform: translate3d(0, 0, 0);
}

.card-images {
    height: 40vh;
}

.main-banner-inner {
    height: 600px;
}

.imgCarousel {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.blog-title {
    display: -webkit-box;
    width: 100%;
    height: 10vh;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
}

#newsImage {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.text-main {
    color: #1B97CF;
}

.nav-tabs .nav-link.active {
    font-weight: bold;
    background-color: transparent;
    border-bottom: 3px solid #0094DA;
    border-right: none;
    border-left: none;
    border-top: none;
}
.figures{
    box-shadow: 0 0 2px 0 #888888;
}
</style>

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
            <ol class="carousel-indicators">
                <li data-target="#carouselIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselIndicators1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner main-banner-inner">
                <div class="carousel-item active">
                    <img src="assets/1920x1080/bgnew.jpg" class="d-block w-100 imgCarousel">
                </div>
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
        <section class="u-content-space">
            <div class="container mx-auto w-100 ">

                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">About Us</h3>
                        <img class="img-fluid products rounded w-100" src="assets/img/about2.jpg"
                            alt="Iamge Description">
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 style="color: #474a21" class="font-weight-bold">Banbros Commercial, Inc.</h5>
                        <p class="mb-4"><small>Established in 1997, carrying the primary purpose of distributing high
                                quality IT products in the Philippine Market.</small></p>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6 col-sm">
                        <div class="card" style="height: 40vh">
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
                        <div class="card" style="height: 40vh">
                            <div class="card-body">
                                <div class="row p-2">
                                    <div class="mt-2 d-none d-lg-block">
                                        <div class="rounded-border">
                                            <i class="far fa-eye"></i>
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


        <div class="container">
            <!-- Slider mini banner -->
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                <!-- <ol class="carousel-indicators">
                    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselIndicators" data-slide-to="2"></li>
                </ol> -->
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

        <div class="container my-5 py-5">
            <header class="text-center w-md-50 mx-auto mb-8">
                <h2 class="h1">Featured Products</h2>
            </header>
            <div class="row">
                <div class="col-md-12 text-center ">
                    <nav class="nav-justified ">
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="pop1-tab" data-toggle="tab" href="#pop1" role="tab"
                                aria-controls="pop1" aria-selected="true">LIFAair</a>
                            <a class="nav-item nav-link" id="pop2-tab" data-toggle="tab" href="#pop2" role="tab"
                                aria-controls="pop2" aria-selected="false">Gamdias</a>
                            <a class="nav-item nav-link" id="pop3-tab" data-toggle="tab" href="#pop3" role="tab"
                                aria-controls="pop3" aria-selected="false">Edifier</a>
                            <a class="nav-item nav-link" id="pop4-tab" data-toggle="tab" href="#pop4" role="tab"
                                aria-controls="pop4" aria-selected="false">Lorem Ipsum</a>
                            <a class="nav-item nav-link" id="pop5-tab" data-toggle="tab" href="#pop5" role="tab"
                                aria-controls="pop5" aria-selected="false">Lorem Ipsum</a>
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

                        <div class="tab-pane fade" id="pop4" role="tabpanel" aria-labelledby="pop4-tab">
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

                        <div class="tab-pane fade" id="pop5" role="tabpanel" aria-labelledby="pop5-tab">
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
                <header class="text-center w-md-50 mx-auto mb-8">
                    <h2 class="h1 font-weight-bold text-white">EXECUTIVES</h2>

                    <div class="d-flex justify-content-center">
                        <div style="width:30px; padding: 1px;" class="bg-warning"></div>
                    </div>
                </header>
                <!-- End Testimonials: Header -->

                <div class="row">
                    <div class="card-group p-3 mx-auto">
                        <div class="card border border-0" style="background: none">
                            <div class="fixImage p-3">
                                <img src="assets/img-temp/ava/bangayan.png" class="card-img-top"
                                    style="width: 70%; margin-left: 15%" alt="">
                            </div>
                            <div class="card-body p-0">
                                <h5 style="color:white;" class="card-title font-weight-bold text-center mb-0">Richard
                                    Bangayan</h5>
                                <p class="text-center pt-0 font-italic text-white"><small>Vice President for
                                        Sales</small></p>
                                <div class="row socials mb-0 d-flex justify-content-center">
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="card border border-0" style="background: none">
                            <div class="fixImage p-3">
                                <img src="assets/img-temp/ava/lao.png" class="card-img-top"
                                    style="width: 70%; margin-left: 15%" alt="">
                            </div>
                            <div class="card-body p-0">
                                <h5 style="color:white;" class="card-title font-weight-bold text-center mb-0">Paton
                                    Lao</h5>
                                <p class="text-center pt-0 font-italic text-white"><small>Vice President for
                                        Operations</small></p>
                                <div class="row socials mb-0 d-flex justify-content-center">
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="card border border-0" style="background: none">
                            <div class="fixImage p-3">
                                <img src="assets/img-temp/ava/trinidad.png" class="card-img-top"
                                    style="width: 70%; margin-left: 15%" alt="">
                            </div>
                            <div class="card-body p-0">
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
            </div>
        </section>
        <!-- End Testimonials -->

        <!-- Testimonials -->
        <section class="u-content-space">
            <div class="container">
                <!-- Testimonials: Header -->
                <header class="text-center w-md-50 mx-auto mb-8">
                    <h2 class="h1">Press Release</h2>
                    <p class="h5">What's New</p>
                </header>
                <!-- End Testimonials: Header -->

                <div class="row">
                    <div class="col-lg-4 mb-7 mb-lg-0 px-lg-5">
                        <a href="https://preview.mailerlite.com/a8y3t4/1708399749796729310/l9y2/">
                            <div class="card u-box-shadow-lg">
                                <div class="card-images">
                                    <img src="view/images/othersrc/TipEdgecore.PNG" class="card-img-top mx-auto d-block"
                                        id="newsImage">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-7 mb-lg-0 px-lg-5">
                        <a href="https://mailchi.mp/764e819c6688/mltg-cn-the-best-point-to-point-choice?e=b4e161d2be">
                            <div class="card u-box-shadow-lg">
                                <div class="card-images">
                                    <img src="view/images/othersrc/MetroLinq.PNG" class="card-img-top mx-auto d-block"
                                        id="newsImage">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 mb-7 mb-lg-0 px-lg-5">
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
            <div class="container py-5">
                <div class="row">

                    <div class="col-lg text-center">
                        <button type="button" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-phone-volume fa-2x"></i></button>
                        <h4 class="text-white mt-3">Inquire Now</h4>
                    </div>

                    <div class="col-lg text-center">
                        <button type="button" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-tv fa-2x"></i></button>
                        <h4 class="text-white mt-3">Webinar</h4>
                    </div>

                    <div class="col-lg text-center">
                        <button type="button" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-tags fa-2x"></i></button>
                        <h4 class="text-white mt-3">Promos</h4>
                    </div>

                    <div class="col-lg text-center">
                        <button type="button" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-user-plus fa-2x"></i></button>
                        <h4 class="text-white mt-3">Contact support <br> now</h4>
                    </div>

                    <div class="col-lg text-center">
                        <button type="button" class="btn btn-white btn-circle btn-xl"><i
                                class="text-main fas fa-chart-pie fa-2x"></i></button>
                        <h4 class="text-white mt-3">Do business <br> with us</h4>
                    </div>
                    <!-- <div class="col-lg col-sm mb-5 text-center">
                        <a href="contact.php" type="button">
                            <div class="box-part text-center pt-5">
                                <i class="fas fa-phone-volume fa-4x mt-2" aria-hidden="true"></i>
                                <div class="title mt-3">
                                    <p>Inquire Now</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg col-sm mb-5 text-center">
                        <a href="#">
                            <div class="box-part text-center pt-5">
                                <i class="fas fa-tv fa-4x mt-2" aria-hidden="true"></i>
                                <div class="title mt-3">
                                    <p>Webinar</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg col-sm mb-5 text-center">
                        <a href="#">
                            <div class="box-part text-center pt-5">
                                <i class="fas fa-tags fa-4x mt-2" aria-hidden="true"></i>
                                <div class="title mt-3">
                                    <p>Promos</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg col-sm text-center">
                        <a href="https://tekzoneph.com/index.php/contact/">
                            <div class="box-part text-center pt-5">
                                <i class="fas fa-user-plus fa-4x mt-2" aria-hidden="true"></i>
                                <div class="title mt-3">
                                    <p>Contact support now</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg col-sm text-center">
                        <a href="https://tekzoneph.com/index.php/contact/">
                            <div class="box-part text-center pt-5">
                                <i class="fas fa-chart-pie fa-4x mt-2" aria-hidden="true"></i>
                                <div class="title mt-3">
                                    <p>Do business with us</p>
                                </div>
                            </div>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>

    </main>

    <div class=" overFooter">
        <div class="overlay">
            <!-- <img src="assets/img/footerimg.jpg" alt="Banbros"> -->
        </div>
        <div style="z-index: 99;" class="container text-center text-white">
            <div class="pt-9">
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
                    "Your Value",
                    "Added Distributor"
                ],
                typeSpeed: 60,
                loop: true,
                backDelay: 2500
            });
        });
        </script>
</body>
<!-- End Body -->