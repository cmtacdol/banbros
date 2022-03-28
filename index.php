<?php session_start();
$_SESSION['PAGE_TITLE'] = "Banbros | Home";
include 'view/common/header.php'; ?>


<head>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <?php include 'view/common/nav.php'; ?>

    <!-- Promo Block -->
    <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white" style="background-image: url(assets/1920x1080/BBCC.jpg);">
        <!-- Promo Content -->
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
        <!-- End Promo Content -->
    </section>
    <!-- End Promo Block -->
    <!-- End Header -->

    <main role="main">
        <?php include 'view/common/clientImage.php'; ?>

        <!-- Our Product -->
        <!-- <section class="u-content-space">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center mb-5 mb-lg-0 pr-lg-5">
              <header class="mb-5">
              <img src="assets/img/logoblack.png" alt="Banbros" style="width: 70%;">
              </header>

              <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis dolorem error beatae vitae deleniti nulla soluta inventore voluptas illo mollitia, fugit nemo sit eligendi alias laboriosam necessitatibus corporis veniam enim.</p>

              <a href="" type="button" class="btn btn-outline-primary float-right">Read more</a>
            </div>
            <div class="col-lg-6 align-self-center text-center">
              <img class="img-fluid products rounded" src="assets/img/man.png" alt="Iamge Description">
           
            </div>
          </div>
        </div>
      </section> -->
        <!-- End Our Product -->
        <!-- <section class="u-content-space">
            <div class="container mx-auto w-100 ">
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-fluid products rounded" src="assets/img/about.jpg" alt="Iamge Description">
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 p-2 text-center text-lg-left">
                        <div class="mb-2 text-center text-lg-left">
                            <p class="mb-0" style="color: grey">About Us</p>
                            <h5 style="color: #474a21" class="font-weight-bold">Banbros Commercial, Inc.</h5>
                        </div>

                        <p class="mb-4"><small>Established in 1997, carrying the primary purpose of distributing high
                                quality IT products in the Philippine Market.</small></p>

                        <div class="row">
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

                        <div class="row mt-4">
                            <div class="mt-2 d-none d-lg-block">
                                <div class="rounded-border">
                                    <i class="fas fa-rocket"></i>
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
        </section> -->
        <!-- End Why We? -->



        <!-- Portfolio -->
        <section class="u-content-space" style="background-color: #f7f8f8;">
            <div class="container" style="background-color: #f7f8f8;">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section class="u-content-space">
            <div class="container">
                <header class="text-center w-md-50 mx-auto mb-8">
                    <h2 class="h1"><b>Featured Products</b></h2>
                </header>
                <!-- Work Content -->
                <div class="js-shuffle u-portfolio row no-gutters">

                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img7.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">LA500V</h5>
                                <small class="d-block">LIFAair</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img7.jpg"></a>
                        </div>
                    </figure>

                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img8.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">LA350A</h5>
                                <small class="d-block">LIFAair</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>

                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img9.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">LAC52</h5>
                                <small class="d-block">LIFAair</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>

                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img10.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">LAC100</h5>
                                <small class="d-block">LIFAair</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img11.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">LM991</h5>
                                <small class="d-block">LIFAair</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img12.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">LAF200</h5>
                                <small class="d-block">LIFAair</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img13.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">Achilles M1A</h5>
                                <small class="d-block">GAMDIAS</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img14.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">Apollo DHD 356C</h5>
                                <small class="d-block">GAMDIAS</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img15.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">Atlas HD275C</h5>
                                <small class="d-block">GAMDIAS</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img16.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">Hermes E2A</h5>
                                <small class="d-block">GAMDIAS</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img17.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">Zeus E1</h5>
                                <small class="d-block">GAMDIAS</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>
                    <figure class="col-sm-4 col-md-3" data-groups='["lifaAir"]'>
                        <div class="u-portfolio__item">
                            <img class="u-portfolio__image" src="assets/portfolio/img18.jpg" alt="Image Description">
                            <figcaption class="u-portfolio__info text-center">
                                <h5 class="mb-0">Hebe E1</h5>
                                <small class="d-block">GAMDIAS</small>
                            </figcaption>
                            <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                        </div>
                    </figure>

                    <!-- <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["edifier"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img19.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">XM3BT Multimedia Speaker</h6>
                            <small class="d-block">EDIFIER</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img19.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["edifier"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img20.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">W855BT Premiere Bluetooth Headset</h6>
                            <small class="d-block">EDIFIER</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img20.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["edifier"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img21.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">W820BT Bluetooth Headset</h6>
                            <small class="d-block">EDIFIER</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img21.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["edifier"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img22.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">V4 Gaming Headset</h6>
                            <small class="d-block">EDIFIER</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img22.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["edifier"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img23.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">TWS5 True Wireless Earbuds</h6>
                            <small class="d-block">EDIFIER</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img23.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["edifier"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img24.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">MP100</h6>
                            <small class="d-block">EDIFIER</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img24.jpg">Zoom</a>
                    </figure> -->
                    <!-- sizer -->
                    <!--            <figure class="col-sm-6 col-md-4 u-portfolio__item shuffle_sizer"></figure>-->
                </div>
                <!-- End Work Content -->

            </div>
        </section>
        <!-- End Portfolio -->
        <div class="container">
            <header class="text-center w-md-50 mx-auto mb-8 mt-8">
                <h2 class="h1"><b>What's New</b></h2>
            </header>

            <div class="card-group my-5">
                <div class="card">
                    <img src="assets/img/m1.jpg" class="card-img-top mx-auto d-block" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">LIFAair in our room</h5>
                        <p class="card-text">Eversince we put LIFAair in our room , our allergies improve a lot. We do not need to tak medicine.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/m1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/img/m1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>



    </main>

    <div class="overFooter">
        <div class="overlay">
            <!-- <img src="assets/img/footerimg.jpg" alt="Banbros"> -->
        </div>
        <div style="z-index: 99;" class="container text-center text-white">
            <div class="pt-9">
<<<<<<< HEAD
                <div class="col mb-1">
                    <h2 class="font-weight-bold">Newsletter</h2>
=======
                <div class="col">
                    <h2 class="font-weight-bold">News Letter</h2>
>>>>>>> parent of 68e5c70 (Policy)
                </div>
                <div class="mx-auto mt-1" style="width: 50%;">
                    <p><small class="font-italic">Be updated with the trends in technology. Subscribe to us and we will keep you posted. </small></p>
                </div>
                <div class="mx-auto mb-9" style="width: 50%;">
                    <div class="input-group">
                        <input type="email" class="form-control border border-none" placeholder="Enter your email">
                        <div class="input-group-append">
                            <button class="btn btn-warning text-white" type="submit">Subscribe</button>
                        </div>
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