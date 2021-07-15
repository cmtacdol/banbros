<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Career";
$_SESSION['PAGE_NAV_TITLE'] = "Career"; 

include 'view/common/header.php'; 

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/custompage.css">
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
.btn-circle{
    display: flex;
    justify-content: center;
    align-items: center;
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

    <!-- <div class="container mb-7">
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
    </div> -->

    <div class="container py-5">
        <h1 class="text-center">Why join us?</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit nam iusto non. Soluta assumenda distinctio
            veniam doloremque ducimus. Repudiandae, sed amet vitae placeat accusantium corrupti distinctio blanditiis
            odit sit. Amet.</p>

        <div class="row">
            <div class="col-lg">
                <div class="row">
                    <div class="btn-circle btn-lg text-center p-2" style="background: #B1B1B1;">
                        <i class="text-white fas fa-users fa-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-muted pb-0 mb-0">Lorem Ipsum</p>
                        <p>lorem ipsum</p>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="row">
                    <div class="btn-circle btn-lg text-center p-2" style="background: #87B5C4;">
                        <i class="text-white fas fa-gift fa-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-muted pb-0 mb-0">Lorem Ipsum</p>
                        <p>lorem ipsum</p>
                    </div>
                </div>

            </div>
            <div class="col-lg">
                <div class="row">
                    <div class="btn-circle btn-lg text-center p-2" style="background: #77CBEF;">
                        <i class="text-white fas fa-tshirt fa-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-muted pb-0 mb-0">Lorem Ipsum</p>
                        <p>lorem ipsum</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg">
                <div class="row">
                    <div class="btn-circle btn-lg text-center p-2" style="background: #B492DC;">
                        <i class="text-white fas fa-language fa-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-muted pb-0 mb-0">Lorem Ipsum</p>
                        <p>lorem ipsum</p>
                    </div>
                </div>

            </div>
            <div class="col-lg">
                <div class="row">
                    <div class="btn-circle btn-lg text-center p-2" style="background: #86BCBE;">
                        <i class="text-white fas fa-clock fa-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-muted pb-0 mb-0">Lorem Ipsum</p>
                        <p>lorem ipsum</p>
                    </div>
                </div>

            </div>
            <div class="col-lg">
                <div class="row">
                    <div class="btn-circle btn-lg text-center p-2" style="background: #B1DEB5;">
                        <i class="text-white fas fa-user-clock fa-lg"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-muted pb-0 mb-0">Lorem Ipsum</p>
                        <p>lorem ipsum</p>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <div class="container my-5">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingone">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Section 1
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                            id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                            ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                            aliquam vitae. Curabitur molestie eros. </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Section 2
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                            id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                            ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                            aliquam vitae. Curabitur molestie eros. </p>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Section 3
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum
                            id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt
                            ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor
                            aliquam vitae. Curabitur molestie eros. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>

<?php include 'view/common/fb_plugins.php'; ?>
<?php include 'view/common/footer.php'; ?>

<?php include 'view/common/scripts.php'; ?>