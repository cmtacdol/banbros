<?php include 'view/common/header.php'; ?>

<style>

.blockquote-custom {
  position: relative;
  font-size: 1.1rem;
}

.blockquote-custom-icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -25px;
  left: 50px;
}
</style>
  <body>
   
  <?php include 'view/common/nav.php'; ?>


    <main role="main">

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"  style="background: rgb(6,103,148); background: linear-gradient(0deg, rgba(6,103,148,0.6702031154258579) 0%, rgba(70,121,145,0.7707457983193278) 100%);">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="py-5 mt-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <header class="text-center pb-5">
                                    <h1 class="text-white">Quote</h1>
                                </header>
                            </div>
                        </div><!-- END -->


                        <div class="row">
                            <div class="col-lg-6 mx-auto">

                                <!-- CUSTOM BLOCKQUOTE -->
                                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info">@consequat</a>."</p>
                                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote><!-- END -->

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="py-5 mt-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <header class="text-center pb-5">
                                    <h1 class="text-white">Quote</h1>
                                </header>
                            </div>
                        </div><!-- END -->


                        <div class="row">
                            <div class="col-lg-6 mx-auto">

                                <!-- CUSTOM BLOCKQUOTE -->
                                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info">@consequat</a>."</p>
                                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote><!-- END -->

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="py-5 mt-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 mx-auto">
                                <header class="text-center pb-5">
                                    <h1 class="text-white">Quote</h1>
                                </header>
                            </div>
                        </div><!-- END -->


                        <div class="row">
                            <div class="col-lg-6 mx-auto">

                                <!-- CUSTOM BLOCKQUOTE -->
                                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info">@consequat</a>."</p>
                                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                                        <cite title="Source Title">Source Title</cite>
                                    </footer>
                                </blockquote><!-- END -->

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="mx-auto mt-8">
            <h1 class="text-center">Contact Us</h1>
               <div class="col-lg-8 mx-auto">
                    <div class="row">
                        <div class="col">
                            <label>Your Name:</label>
                            <input class="form-control" type="text" placeholder="First Name">
                        </div>
                        <div class="col">
                            <label>&nbsp;</label>
                            <input class="form-control" type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <label>Email:</label>
                            <input class="form-control" type="text" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label for="exampleFormControlTextarea1">Message:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
               </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h1>Branches</h1>
            <div class="mx-auto my-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.119851342746!2d121.03845681420658!3d14.592245781194913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c82e3d009d2b%3A0xa1f741f07ac97b1f!2sBanbros%20Commercial%2C%20Incorporated!5e0!3m2!1sen!2sph!4v1604657035326!5m2!1sen!2sph" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>


    


    </main>

    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
  </body>
  <!-- End Body -->
  
</html>