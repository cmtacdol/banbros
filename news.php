<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "News";
$_SESSION['PAGE_NAV_TITLE'] = "News"; 

include 'view/common/header.php'; 

?>

<head>

    <?php include 'view/common/nav.php'; ?>

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

    .card-title {
        height: 10vh;
    }

    .card-text {
        display: -webkit-box;
        width: 100%;
        height: 109.2px;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        overflow: hidden;
    }

    .card-images {
        height: 40vh;
    }

    #newsImage {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    </style>

</head>
<!-- End Header -->

<main role="main">

    <div class="banner-image" style="background-image: url(assets/1920x1080/bgnew.jpg); ">
        <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
        <div class="container u-overlay__inner u-ver-center u-content-space text-white" style="position: none">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3">NEWS</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center mt-5">BLOGS</h1>
        <div class="row my-5">
            <div class="col-lg col-sm">
                <div class="card">
                    <div class="card-images">
                        <img src="view/images/othersrc/TipEdgecore.PNG" class="card-img-top mx-auto d-block"
                            id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-left">TIP OpenWiFi Ready Access Point</h5>
                        <p class="card-text text-left">Edgecore provides the comprehensive product line of TIP OpenWiFi
                            Ready Access
                            Points. From indoor to outdoor, Wi-Fi 5 to Wi-Fi 6, the robust & resilient designs can
                            assist
                            you to build the optimal networks. </p>

                        <a href="https://preview.mailerlite.com/a8y3t4/1708399749796729310/l9y2/"
                            class="btn btn-info rounded-pill py-1" id="btnModals">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="card">
                    <div class="card-images">
                        <img src="view/images/othersrc/MetroLinq.PNG" class="card-img-top mx-auto d-block"
                            id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-left">MetroLinq Terragraph Certified Product-MLTG-CN</h5>
                        <p class="card-text text-left">MLTG-CN is a Terragraph certified client node. MLTG-CN supports
                            IEEE802.11ay standard to deliver high-speed Internet in a noise-free and unlicensed 60GHz
                            spectrum. When connected with Terragraph certified distribution node, MLTG-CN can function.
                        </p>

                        <a href="https://mailchi.mp/764e819c6688/mltg-cn-the-best-point-to-point-choice?e=b4e161d2be"
                        class="btn btn-info rounded-pill py-1" id="btnModals">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="card">
                    <div class="card-images">
                        <img src="view/images/othersrc/sangfor.PNG" class="card-img-top mx-auto d-block" id="newsImage">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-left">Sangfor Hybrid Cloud</h5>
                        <p class="card-text text-left">The COVID-19 pandemic has largely proven to be an accelerator of
                            cloud adoption and extension and will continue to drive a faster conversion to cloud-centric
                            IT. According to a new whole cloud forecast from International Data Corporation (IDC), total
                            worldwide spending on cloud services, the hardware and software components underpinning
                            cloud services, and the professional and managed services opportunities around</p>

                        <a href="http://app.edm.sangfor.cn/e/es?s=1587972869&e=121325&elqTrackId=a72ae390af474d9c960befe4cc2eef6c&elq=d065ec4c4e6c48bda7ee0ac72d3acfa2&elqaid=1066&elqat=1"
                        class="btn btn-info rounded-pill py-1" id="btnModals">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>

<?php include 'view/common/fb_plugins.php'; ?>
<?php include 'view/common/footer.php'; ?>

<?php include 'view/common/scripts.php'; ?>


</body>
<!-- End Body -->

</html>