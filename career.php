<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Career";
$_SESSION['PAGE_NAV_TITLE'] = "Career"; 

include 'view/common/header.php'; 

?>
<style>
.banner-image {
    height: 600px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

ul {
    line-height: 2rem;
}
</style>

<head>

    <?php include 'view/common/nav.php'; ?>

</head>
<!-- End Header -->

<main role="main">

    <div class="banner-image" style="background-image: url(assets/1920x1080/BBCC3.jpg); ">
        <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
        <div class="container u-overlay__inner u-ver-center u-content-space text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3">CAREER</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-7">
        <h1 class="text-center mt-5 text-uppercase">Be Part of our team</h1>
        <div class="mt-5">
            <h4 class="text-center text-uppercase">CHANNEL SALES ACCOUNT MANAGER</h4>
            <ul>
                <li>Candidates must possess at least a Bachelor's/College Degree in Computer Science/Information
                    Technology,Sales and Marketing, Engineering (Computer/Telecommunication) or equivalent.</li>
                <li>Preferably with minimum of 2 years relevant sales experience in the following industries:</li>
            </ul>
            <p class="mb-0 ml-4">✓ IT Distribution</p>
            <p class="mb-0 ml-4">✓ Pharmaceutical</p>
            <p class="ml-4">✓ Insurance</p>

            <ul>
                <li>Extensive knowledge on all IT products, computer hardware particularly networking,servers, cctv,
                    ups, medical supplies and equipments such as air purifiers, masks, and the likes</li>
                <li>Strong verbal and written communication skills;</li>
                <li>Possess good negotiation and account management skills;</li>
                <li>Agressive, result oriented, dedicated, and strong passion in selling</li>
                <li>Knows how to drive or owns a vehicle for easy mobility during client calls</li>
            </ul>

        </div>
    </div>




</main>

<?php include 'view/common/fb_plugins.php'; ?>
<?php include 'view/common/footer.php'; ?>

<?php include 'view/common/scripts.php'; ?>