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
.banner-image {
    height: 600px;
    position: relative;
    padding-top: 6.25rem;
    padding-bottom: 6.25rem;
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: cover;
}

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

        <div class="banner-image" style="background-image: url(assets/1920x1080/CONTACT.jpg); ">
            <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
            <div class="container u-overlay__inner u-ver-center u-content-space text-white">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                            <h1 class="display-sm-4 display-lg-3 mb-3 font-weight-bold revealOnScroll"
                                data-animation="fadeInUp">CONTACT US
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container revealOnScroll mb-7" data-animation="fadeInUp">
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
    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <?php include 'view/common/toast_messages.php'; ?>
</body>
<!-- End Body -->

</html>