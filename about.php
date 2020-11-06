<?php include 'view/common/header.php'; ?>

  <body>
   
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
    </header>
    <!-- End Header -->

    <main role="main">

    <?php include 'view/common/clientImage.php'; ?>

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
                <!-- <div class="card" style="width: 100%; border-radius: 10px 10px 0 0">
                    <div class="card-header py-2" style="border-radius: 10px 10px 0 0; background: #0094da">
                        <h5 class="card-title mb-0 text-white">Banbros Commercial Inc. (BCI)</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">One of the dominant players in the Innovation &  
                        Information Technology that provides products which  
                        have leadership position in the market. 
                        </p>
                    </div>
                </div> -->
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
     

    </main>

    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>


    <script>
      $(document).on('ready', function () {
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