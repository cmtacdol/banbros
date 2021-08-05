<?php session_start(); $_SESSION['PAGE_TITLE']="Banbros | Home";   include 'view/common/header.php'; ?>


<style>
.card-images {
    height: 40vh;
}

#newsImage {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>

    <!-- Promo Block -->
    <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white"
        style="background-image: url(assets/1920x1080/bgnew.jpg);">
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

        <!-- End Our Product -->
        <section class="u-content-space">
            <div class="container mx-auto w-100 ">

                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">About Us</h3>
                        <img class="img-fluid products rounded w-100" src="assets/img/about.jpg"
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

        <!-- Stats -->
        <!-- <section class="bg-light position-relative u-hero-img u-overlay u-overlay--dark" style="background-position: 50% 65%; background-image: url(assets/img-temp/1920x1080/img4.jpg);">
        <div class="container u-overlay__inner pt-8">
          <div class="row text-center text-uppercase text-white">
            <div class="col-lg-3 col-sm-6 pb-8">
              <h5 class="js-counter display-4 mb-1">34</h5>
              <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Projects</small>
            </div>

            <div class="col-lg-3 col-sm-6 pb-8">
              <h5 class="js-counter display-4 mb-1">12</h5>
              <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Teams</small>
            </div>

            <div class="col-lg-3 col-sm-6 pb-8">
              <h5 class="js-counter display-4 mb-1">124</h5>
              <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Open Contests</small>
            </div>

            <div class="col-lg-3 col-sm-6 pb-8">
              <h5 class="js-counter display-4 mb-1">575</h5>
              <small class="d-block font-style-normal text-uppercase u-letter-spacing-sm">Happy Customers</small>
            </div>
          </div>
        </div>
      </section> -->
        <!-- End Stats -->

        <!-- Portfolio -->
        <section class="u-content-space">
            <div class="container-fliud">
                <header class="text-center w-md-50 mx-auto mb-8">
                    <h2 class="h1">Featured Products</h2>
                </header>

                <ul class="js-shuffle-controls u-portfolio-controls text-center mb-5">
                    <li class="u-portfolio-controls__item"><a href="#!" data-group="all" class="active">All</a></li>
                    <li class="u-portfolio-controls__item"><a href="#!" data-group="lifaAir">LIFAair</a></li>
                    <li class="u-portfolio-controls__item"><a href="#!" data-group="gamdias">Gamdias</a></li>
                    <li class="u-portfolio-controls__item"><a href="#!" data-group="edifier">Edifier</a></li>
                </ul>

                <!-- Work Content -->
                <div class="js-shuffle u-portfolio row no-gutters mb-6">

                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["lifaAir"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img7.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">LA500V</h6>
                            <small class="d-block">LIFAair</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img7.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["lifaAir"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img8.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">LA350A</h6>
                            <small class="d-block">LIFAair</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img8.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["lifaAir"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img9.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">LAC52</h6>
                            <small class="d-block">LIFAair</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img9.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["lifaAir"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img10.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">LAC100</h6>
                            <small class="d-block">LIFAair</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img10.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["lifaAir"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img11.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">LM991</h6>
                            <small class="d-block">LIFAair</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img11.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["lifaAir"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img12.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">LAF200</h6>
                            <small class="d-block">LIFAair</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img12.jpg">Zoom</a>
                    </figure>

                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["gamdias"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img13.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">Achilles M1A</h6>
                            <small class="d-block">GAMDIAS</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img13.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["gamdias"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img14.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">Apollo DHD 356C Curved</h6>
                            <small class="d-block">GAMDIAS</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img14.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["gamdias"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img15.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">Atlas HD275C Curved Monitor</h6>
                            <small class="d-block">GAMDIAS</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img15.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["gamdias"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img16.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">Gaming Keyboard Hermes E2A</h6>
                            <small class="d-block">GAMDIAS</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img16.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["gamdias"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img17.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">Gaming Mouse Zeus E1</h6>
                            <small class="d-block">GAMDIAS</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img17.jpg">Zoom</a>
                    </figure>
                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["gamdias"]'>
                        <img class="u-portfolio__image" src="assets/portfolio/img18.jpg" alt="Image Description">
                        <figcaption class="u-portfolio__info">
                            <h6 class="mb-0">Hebe E1</h6>
                            <small class="d-block">GAMDIAS</small>
                        </figcaption>
                        <a class="js-popup-image u-portfolio__zoom" href="assets/portfolio/img18.jpg">Zoom</a>
                    </figure>

                    <figure class="col-sm-4 col-md-2 u-portfolio__item" data-groups='["edifier"]'>
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
                    </figure>


                    <!-- sizer -->
                    <!--            <figure class="col-sm-6 col-md-4 u-portfolio__item shuffle_sizer"></figure>-->
                </div>
                <!-- End Work Content -->

            </div>
        </section>
        <!-- End Portfolio -->


        <!-- Testimonials -->
        <section class="u-content-space">
            <div class="container">
                <!-- Testimonials: Header -->
                <header class="text-center w-md-50 mx-auto mb-8">
                    <h2 class="h1 font-weight-bold">EXECUTIVES</h2>

                    <div class="d-flex justify-content-center">
                        <div style="width:30px; padding: 1px;" class="bg-warning"></div>
                    </div>
                </header>
                <!-- End Testimonials: Header -->

                <div class="row">
                    <div class="card-group p-3 mx-auto">
                        <div class="card">
                            <div class="fixImage">
                                <img src="assets/img-temp/ava/bangayan.png" class="card-img-top"
                                    style="width: 70%; margin-left: 15%" alt="">
                            </div>
                            <div class="card-body">
                                <h5 style="color: #115f82;" class="card-title font-weight-bold text-center mb-0">Richard
                                    Bangayan</h5>
                                <p style="color: grey;" class="text-center pt-0 font-italic"><small>Vice President for
                                        Sales</small></p>
                                <div class="row socials mb-0 d-flex justify-content-center">
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="card">
                            <div class="fixImage">
                                <img src="assets/img-temp/ava/lao.png" class="card-img-top"
                                    style="width: 70%; margin-left: 15%" alt="">
                            </div>
                            <div class="card-body">
                                <h5 style="color: #115f82;" class="card-title font-weight-bold text-center mb-0">Paton
                                    Lao</h5>
                                <p style="color: grey;" class="text-center pt-0 font-italic"><small>Vice President for
                                        Operations</small></p>
                                <div class="row socials mb-0 d-flex justify-content-center">
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                        <div class="card">
                            <div class="fixImage">
                                <img src="assets/img-temp/ava/trinidad.png" class="card-img-top"
                                    style="width: 70%; margin-left: 15%" alt="">
                            </div>
                            <div class="card-body">
                                <h5 style="color: #115f82;" class="card-title font-weight-bold text-center mb-0">Gayle
                                    Trinidad</h5>
                                <p style="color: grey;" class="text-center pt-0 font-italic"><small>Vice President for
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
            <div class="container py-9">
                <div class="row">
                    <div class="col-md-4 mb-5 text-center">
                        <h1 style="color: white;" class="card-title font-weight-bold text-center mb-0">Inquire Now</h1>
                        <div class="col text-center d-flex justify-content-center">
                            <div class="text-white" style="height: 9vh">
                                Are you a customer that needs help?<br> That’s what the BCI is for.
                            </div>
                        </div>
                        <a href="contact.php" style="background: white; border-radius: 15px" type="button"
                            class="btn mt-3 text-dark font-weight-bold">Connect with us now.</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1 style="color: white;" class="card-title font-weight-bold text-center mb-0">Get Support</h1>
                        <div class="col text-center d-flex justify-content-center">
                            <div class="text-white" style="height: 9vh">
                                Need support? just contact TEKZONE<br>Computer Sales and Services, Inc.
                            </div>
                        </div>
                        <a href="https://tekzoneph.com/index.php/contact/"
                            style="background: white; border-radius: 15px" type="button"
                            class="btn mt-3 text-dark font-weight-bold">Contact support now.</a>
                    </div>
                    <div class="col-md-4 text-center">
                        <h1 style="color: white;" class="card-title font-weight-bold text-center mb-0">Be Our Partner
                        </h1>
                        <div class="col text-center d-flex justify-content-center">
                            <div class="text-white" style="height: 9vh">
                                Do business with us
                            </div>
                        </div>
                        <a href="" style="background: white; border-radius: 15px" type="button"
                            class="btn mt-3 text-dark font-weight-bold">Register now!</a>
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