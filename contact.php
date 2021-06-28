<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Contacts";
$_SESSION['PAGE_NAV_TITLE'] = "Contacts"; 

include 'view/common/header.php'; 
include 'controllers/inquiry.php'; 

if(isset($_POST['sendEmails'])){
    sendToEmail($_POST);
}

?>

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

        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel"
            style="background: rgb(6,103,148); background: linear-gradient(0deg, rgba(6,103,148,0.6702031154258579) 0%, rgba(70,121,145,0.7707457983193278) 100%);">

            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <section class="js-parallax u-promo-block u-promo-block--mheight-450 u-overlay u-overlay--dark text-white"
            style="background-color: #0094da;">
            <!-- Promo Content -->
            <div class="container u-overlay__inner u-ver-center u-content-space">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                            <h1 class="display-sm-4 display-lg-3 mb-3">CONTACT US</h1>
                        </div>
                        <!--
              <div class="row">
                  <div class="col-auto">
                      <div class="border" style="border: 2px solid; width: 2px; height: 100%"></div>
                  </div>
                  <div class="col">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque itaque, aut eligendi deleniti facilis nostrum quam delectus molestias alias placeat dicta amet, eos cumque quaerat minima error repellat? Cum, nisi!</p>
              
                  </div>
                </div>
-->
                    </div>
                </div>
            </div>
            <!-- End Promo Content -->
        </section>

        <div class="container">
            <div class="mx-auto mt-8">
                <h1 class="text-center">Inquire now</h1>
                <div class="col-lg-8 mx-auto">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col">
                                <label>Your Name:</label>
                                <input class="form-control" name="FirstName" type="text" placeholder="First Name"
                                    required>
                            </div>
                            <div class="col">
                                <label>&nbsp;</label>
                                <input class="form-control" name="LastName" type="text" placeholder="Last Name"
                                    required>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <label>Email:</label>
                                <input class="form-control" name="Email" type="email" placeholder="Email Address"
                                    required>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <label>Purpose:</label>
                                <select class="form-control" name="Purpose" type="text">
                                    <option>Reseller Accreditation</option>
                                    <option>Request for Quote</option>
                                    <option>Product Inquiry</option>
                                    <option>Services</option>
                                    <option>Marketing</option>
                                    <option>Others/General Inquiry</option>
                                    <option>Looking for Contact Person</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="exampleFormControlTextarea1">Message:</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1"
                                placeholder="Write Something..." rows="4" required></textarea>
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-info" name="sendEmails" type="submit"
                                style="width: 100%">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center">
                <h1>BCI Main Office</h1>
                <div class="mx-auto my-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.119851342746!2d121.03845681420658!3d14.592245781194913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c82e3d009d2b%3A0xa1f741f07ac97b1f!2sBanbros%20Commercial%2C%20Incorporated!5e0!3m2!1sen!2sph!4v1604657035326!5m2!1sen!2sph"
                        width="800" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>





    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <?php include 'view/common/toast_messages.php'; ?>
</body>
<!-- End Body -->

</html>