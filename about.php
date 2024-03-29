<?php
session_start();
$_SESSION['PAGE_TITLE'] = "About Us";
$_SESSION['PAGE_NAV_TITLE'] = "About Us";

include 'view/common/header.php';

?>

<head>
    <?php include 'view/common/nav.php'; ?>

    <!-- Promo Block -->
    <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white" style="background-image: url(assets/img-temp/1920x1080/img8.jpg);">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <h3 class="text-uppercase u-letter-spacing-sm mb-0">OUR COMPANY</h3>
                        <h1 class="display-sm-4 display-lg-3 mb-3"> <span class="js-display-typing"></span></h1>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Promo Content -->
    </section>
    <!-- End Promo Block -->
    <style>
        * {
            box-sizing: border-box;
        }

        /* Set a background color */
        body {
            /* background-color: #474e5d; */
            font-family: Helvetica, sans-serif;
        }

        /* The actual timeline (the vertical ruler) */
        .timeline {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* The actual timeline (the vertical ruler) */
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #00aeef;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }

        /* Container around content */
        .containerx {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        /* The circles on the timeline */
        .containerx::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -12px;
            background-color: white;
            border: 4px solid #00aeef;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }

        /* Place the container to the left */
        .leftx {
            left: 0;
        }

        /* Place the container to the right */
        .rightx {
            left: 50%;
        }

        /* Add arrows to the left container (pointing right) */
        .leftx::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: 30px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }

        /* Add arrows to the right container (pointing left) */
        .rightx::before {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: 30px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }

        /* Fix the circle for containers on the right side */
        .rightx::after {
            left: -13px;
        }

        /* The actual content */
        .contentx {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
        }

        /* Media queries - Responsive timeline on screens less than 600px wide */
        @media screen and (max-width: 600px) {

            /* Place the timelime to the left */
            .timeline::after {
                left: 31px;
            }

            /* Full-width containers */
            .containerx {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }

            /* Make sure that all arrows are pointing leftwards */
            .containerx::before {
                left: 60px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            /* Make sure all circles are at the same spot */
            .leftx::after,
            .rightx::after {
                left: 15px;
            }

            /* Make all right containers behave like the left ones */
            .rightx {
                left: 0%;
            }
        }
    </style>
</head>
<!-- End Header -->

<main role="main">

    <!-- Tab navigation -->
    <section class="u-content-space">
        <div class="container">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-one-tab" data-toggle="pill" href="#pills-one" role="tab" aria-controls="pills-one" aria-selected="true">Company History</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-two-tab" data-toggle="pill" href="#pills-two" role="tab" aria-controls="pills-two" aria-selected="false">Affiliates</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-three-tab" data-toggle="pill" href="#pills-three" role="tab" aria-controls="pills-three" aria-selected="false">Channel Distribution</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-four-tab" data-toggle="pill" href="#pills-four" role="tab" aria-controls="pills-contact" aria-selected="false">Organizational chart</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-four-tab" data-toggle="pill" href="#pills-five" role="tab" aria-controls="pills-contact" aria-selected="false">BCI Satelite Offices</a>
                </li>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                    <div class="container">
                        <h2 class="text-center mb-2">HISTORY & GROWTH</h2>
                        <div class="row">
                            <!-- <div class="col-lg-4 col-sm-4 mb-4">
                                <div class="card" style="width: 100%; height: 430px; border-radius: 10px">
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
                                <div class="card" style="width: 100%; height: 430px; border-radius: 10px">
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
                                <div class="card" style="width: 100%; height: 430px; border-radius: 10px">
                                    <div class="card-body">
                                        <h4 class="card-title mb-0">Our company today, BCI continues to provides</h4>
                                        <p class="card-text">strong and consistent growth in the revenues and
                                            profits of the company. We aim to be the leader in the
                                            distribution channel for all products by being number
                                            one in all product categories.

                                        </p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="container mx-auto w-100 mt-8">
                                <div class="timeline">
                                    <div class="containerx leftx">
                                        <div class="contentx">
                                            <h2>Banbros Commercial, Inc.</h2>
                                            <p>Established in 1997, carrying the primary purpose of distributing high quality IT products in the Philippine Market.</p>
                                        </div>
                                    </div>
                                    <div class="containerx rightx">
                                        <div class="contentx">
                                            <h2>Banbros Commercial Inc. (BCI)</h2>
                                            <p>One of the dominant players in the Innovation & Information Technology that provides products which have leadership position in the market.</p>
                                        </div>
                                    </div>
                                    <div class="containerx leftx">
                                        <div class="contentx">
                                            <h2>Our company today, BCI continues to provides</h2>
                                            <p>strong and consistent growth in the revenues and profits of the company. We aim to be the leader in the distribution channel for all products by being number one in all product categories.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container mx-auto w-100 mt-8">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <img class="img-fluid products rounded" src="assets/img/about.jpg" alt="Iamge Description">
                                    </div>
                                    <div class="col-lg-6 mb-5 mb-lg-0 p-2 text-center text-lg-left">


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

                            <div class="container-fluid mt-8">
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <h1 class="card-title font-weight-bold text-center mb-0">STRATEGY</h1>
                                        <div class="col text-center">
                                            <div class="col">
                                                We believe in a win-win strategy. We want long-term partners And have developed and forged relationships with leading Manufacturers so we can ensure that our customers Enjoy top of the products with the highest level Of quality. We are constantly upgrading the quality of our Service and support group in an effort to Enhance value for dealers and eventually More value for their respective clients. We are consistently expanding our channel assets Covering all distribution networks.

                                            </div>
                                            <br>
                                            <div class="col">
                                                Banbros Commercial Inc. is beyond
                                                The traditional distribution / trading company By focusing on BRANDING strategies for its Products.

                                                The company believes in brand building As the key to the success of products In the market for the long term.

                                                90% of our products are successful due to our Branding activities

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="container">

                  <div class="mx-auto font-weight-bold">
                    <h3 class="text-center" style="color: ">ORGANIZATIONAL CHART <br> LUZON</h3>
                  </div>
                  <div class="mx-auto text-center org_chart">
                    <img src="assets/img/org-chart/org1.jpg" alt="">
                    <img src="assets/img/org-chart/org2.jpg" alt="">
                  </div>

                  <div class="mx-auto font-weight-bold">
                    <h3 class="text-center" style="color: ">ORGANIZATIONAL CHART <br> CEBU & DAVAO</h3>
                  </div>
                  <div class="mx-auto text-center org_chart">
                    <img src="assets/img/org-chart/org3.jpg" alt="">
                  </div>

                </div> -->


                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                    <div class="container mt-8">
                        <div class="container mt-8">
                            <div class="mx-auto text-center">
                                <div class="mx-auto text-center org_chart">
                                    <img src="assets/img/org-chart/tekzone.png" alt="">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                    <div class="container mt-8">
                        <div class="mx-auto text-center">
                            <h3>DISTRIBUTION CHANNEL <br> Partner for Growth</h3>
                        </div>
                        <div>

                            <p class="text-center">
                                <b>Banbros Commercial Inc.</b> has a network of over 500 dealers from small to medium to large resellers.
                            </p>
                            <div class="mx-auto col-lg-8 col-sm-6">
                                <ul>
                                    <li>IT Retailers – from small to large retail chains</li>
                                    <li>Corporate Resellers – corporate resellers both large and small</li>
                                    <li>System Integrators</li>
                                    <li>CE/Audio/Mobile Shops – large appliance chains such as SM (consignor), Emcor , Wellcom, Semicon, Sony Centers, Sony Xperia Shops, Anson’s Appliance, Astro Vision, Robinson’s Appliance, K-Servico </li>
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
                    <div class="container">


                        <div class="mx-auto text-center org_chart">
                            <img src="assets/img/org-chart/org4.png" alt=""><br><br><br>
                            <img src="assets/img/org-chart/org5.png" alt="">
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab">
                    <div class="container">


                        <div class="mx-auto text-center org_chart">
                            <img src="assets/img/org-chart/satelite.jpg" alt="">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 


      <section class="u-content-space">
      <div class="container">

      <h2 class="text-center mb-2">HISTORY & GROWTH BCI SATELLITE OFFICES</h2>
      
        <div class="col-sm-6 px-0 mb-4 mx-auto mt-6">
            <div class="card" style="width: 100%; border-radius: 10px">
                <div class="card-body">
                <h5 class="card-title mb-0">Banbros Commercial, Inc.</h5>
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
          <div class="row">
             <div class="col-lg-6 col-sm-6 mb-4">
                <div class="card" style="width: 100%; border-radius: 10px">
                    <div class="card-body">
                    <h5 class="card-title mb-0">Banbros Commercial Inc. (BCI)</h5>
                        <p class="card-text">One of the dominant players in the Innovation &  
                        Information Technology that provides products which  
                        have leadership position in the market. 
                        </p>
                    </div>
                </div>
             </div>
             <div class="col-lg-6 col-sm-6">
                <div class="card" style="width: 100%; border-radius: 10px">
                    <div class="card-body">
                    <h5 class="card-title mb-0">Our company today, BCI continues to provides</h5>
                        <p class="card-text">strong and consistent growth in the revenues and  
                        profits of the company. We aim to be the leader in the  
                        distribution channel for all products by being number  
                        one in all product categories.

                        </p>
                    </div>
                </div>
             </div>

          
        
          </div>
        </div>
      </section>

        <div class="no-mrgn py-7" style="position: relative;">
            <div class="container">

            <div class="row mb-5">
                <div class="col-md-6 mb-5 text-center">
                    <h1 class="card-title font-weight-bold text-center mb-0">VISION</h1>
                    <div class="col text-center d-flex justify-content-center">
                        <div>
                        Banbros Commercial Inc. vision is to be the Global forefront Top Tier value-added Supplier of Innovative IT products and end-to-end services in the Information Technology distribution industry by providing holistic and complementing products to provide strong and consistent growth in both revenues and profit for the company and for its partners.
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5 text-center">
                    <h1 class="card-title font-weight-bold text-center mb-0">MISSION</h1>
                    <div class="col text-center d-flex justify-content-center">
                        <div>
                        Banbros Commercial Inc. mission is to be the top forefront Innovator that provides IT products, essentials, holistic solution and excellent services all in one for customer Satisfaction.
                        We continuously seek improvements for more
                        efficient, productive and satisfied employees, reseller and customer so we can all gain growth in all aspects.

                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            <img src="assets/img/nodeBG.png" class="node-center" alt="">
        </div>
        </div>


      <section>
      <div class="py-7" style="position: relative;">
            <div class="container">

            <div class="row mb-5">
                <div class="col mx-auto text-center">
                    <h1 class="card-title font-weight-bold text-center mb-0">STRATEGY</h1>
                    <div class="col text-center">
                        <div class="col">
                        We believe in a win-win strategy. We want long-term partners And have developed and forged relationships with leading Manufacturers so we can ensure that our customers Enjoy top of the products with the highest level Of quality. We are constantly upgrading the quality of our Service and support group in an effort to Enhance value for dealers and eventually More value for their respective clients. We are consistently expanding our channel assets Covering all distribution networks.

                        </div>
                        <br>
                        <div class="col">
                        Banbros Commercial Inc. is beyond
                        The traditional distribution / trading company By focusing on BRANDING strategies for its Products.

                        The company believes in brand building As the key to the success of products  In the market for the long term.

                        90% of our products are successful due to our Branding activities

                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
            <img src="assets/img/rightnode.png" class="node-right" alt="">
        </div>
      </section>

      <div class="container">

          <div class="mx-auto font-weight-bold">
            <h3 class="text-center" style="color: ">ORGANIZATIONAL CHART <br> LUZON</h3>
          </div>
          <div class="mx-auto text-center org_chart">
            <img src="assets/img/org-chart/org1.jpg" alt="">
            <img src="assets/img/org-chart/org2.jpg" alt="">
          </div>

          <div class="mx-auto font-weight-bold">
            <h3 class="text-center" style="color: ">ORGANIZATIONAL CHART <br> CEBU & DAVAO</h3>
          </div>
          <div class="mx-auto text-center org_chart">
            <img src="assets/img/org-chart/org3.jpg" alt="">
          </div>

      </div> -->
    <!-- 
      <section>
        <div class="container">
          <div class="mx-auto">
              <h3 class="text-center">Products</h3>
              <img src="assets/img/products.jpg" class="products" alt="">
          </div>
        </div>
      </section>

      <section>
        <div class="container mt-8">
            <div class="mx-auto text-center">
              <h3>AFFILIATE COMPANIES</h3>
            </div>
            <div class="text-center">
            <p>
            
            <span style="color: #1d3982; font-weight: bold; font-style: italic">Tekzone Inc.</span>
              Service Company Handling Repairs and logistics for both end user and	channel . Tekzone has invested on a ( Ball Grid Array Machine) BGM	machine to further increase the capability of Tekzone to do board repair	of	components.

              Main Service Centers:
              Manila : Tekzone
              1000 sq meter facility dedicated fro logistics, after sales support and	parts depot Located in Makati Area covers Luzon area

              Cebu: Banbros Cebu Office
              Covers Visayas and Mindanao Areas
              Our service centers serve as parts depot with complete after sales	support including full staff of technicians
            </p>
            </div>

        </div>
     

        <div class="container mt-8">
            <div class="mx-auto text-center">
              <h3>DISTRIBUTION CHANNEL <br> Partner for	Growth</h3>
            </div>
            <div >

                <p class="text-center">
                <b>Banbros Commercial Inc.</b> has a network of over 500 dealers from small to medium to large resellers.
                </p>
                <div class="mx-auto col-lg-8 col-sm-6">
                    <ul>
                        <li>IT Retailers – from small to large retail chains</li>
                        <li>Corporate Resellers – corporate resellers both large and small</li>
                        <li>System Integrators</li>
                        <li>CE/Audio/Mobile Shops	– large appliance chains such as SM (consignor), Emcor , Wellcom, Semicon, Sony Centers, Sony Xperia Shops, Anson’s Appliance, Astro Vision, Robinson’s Appliance, K-Servico </li>
                    </ul>
                </div>
                <p class="text-center">
                <b>Channel partners spread among all major cities nationwide: </b> <br>
                  Manila Office – serves Luzon Area and parts of Mindanao <br>
                  Cebu Office – serves Visayas and Mindanao Area
                </p>
           
            </div>

        </div>
      </section>

      <section class="mt-9">
        <div class="container">
          <div class="mx-auto">
            <h3 class="text-center">GEOGRAPHIC DISTRIBUTION</h3>
            <img src="assets/img/map.png" class="products" alt="">
          </div>
        </div>

        <div class="container mt-6">
        <h3 class="text-center">CHANNEL DISTRIBUTION</h3>
          <div class="row">
            <div class="col-lg-6 text-center">
              <img src="assets/img/org-chart/circle.png" class="circle">
            </div>
            <div class="col-lg-6">
              <p class="d-none d-lg-block mt-7">Chart indicates that	Banbros has a wide	network of clients serving not only IT retailers as	well as covering the CE	Channels, the System	Integrators, Corporate and Cellphone Shops</p>

              <p class="d-block d-lg-none text-center">Chart indicates that	Banbros has a wide	network of clients serving not only IT retailers as	well as covering the CE	Channels, the System	Integrators, Corporate and Cellphone Shops</p>

              <p class="d-none d-lg-block">Chart also indicates that Banbros is able to	maintain sales growth	while maintaining a healthy distribution	across all channels.</p>

              <p class="d-block d-lg-none text-center">Chart also indicates that Banbros is able to	maintain sales growth	while maintaining a healthy distribution	across all channels.</p>
              
            </div>
          </div>
          <div class="mx-auto text-center mt-5">
            <img src="assets/img/org-chart/diamond.png" class="circle">
          </div>
        </div>
      </section>

      <section> 
        <div class="container mt-9">
          <div class="row">
              <div class="col-lg-6 text-center">
              <div class="col mt-9"></div>
                <h1>SOCIAL </h1>
                <h1>MEDIA </h1>
                <hr width="150">
                <p>Connecting bridges to the Virtual World</p>
              </div>
              <div class="col-lg-6">
                <img src="assets/img/org-chart/social.png" class="social">
              </div>
          </div>
        </div>      
      </section> -->

    <!-- <section>
          <div class="row">
           <div class="mx-auto my-6">
           <a style="background: #3c5b9a; color: white" class="btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
           <i class="fab fa-facebook"></i> facebook
            </a>

            <a style="background: #f05161; color: white" class="btn" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <i class="fab fa-instagram"></i> Instagram
            </a>
           </div>
          </div>
      </section> -->



</main>

<?php include 'view/common/fb_plugins.php'; ?>
<?php include 'view/common/footer.php'; ?>

<?php include 'view/common/scripts.php'; ?>


<script>
    $(document).on('ready', function() {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
            strings: [
                "HISTORY&nbsp;&&nbsp;GROWTH",
                "BCI SATELLITE OFFICES",
                "Banbros Commercial, Inc."
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