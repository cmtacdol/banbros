<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Blog";   
include 'view/common/header.php'; 
?>
<style>
body {
    background: #F4F6F9;
    height: 100%;
}

.card-title {
    height: 10vh;
}

.card-text {
    display: -webkit-box;
    width: 100%;
    height: 109.2px;
    -webkit-line-clamp: 7;
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

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <div class="container my-5 text-center">
            <h1 class="my-5">Blog</h1>

            <div class="row mb-5">
                <div class="col-lg col-sm">
                    <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                        <div class="card-images">
                            <img src="view/images/othersrc/TipEdgecore.PNG" class="card-img-top mx-auto d-block"
                                id="newsImage">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-left">TIP OpenWiFi Ready Access Point</h5>
                            <p class="card-text text-left">Edgecore provides the comprehensive product line of TIP
                                OpenWiFi
                                Ready Access
                                Points. From indoor to outdoor, Wi-Fi 5 to Wi-Fi 6, the robust & resilient designs can
                                assist
                                you to build the optimal networks. </p>

                            <a href="#" class="btn btn-none rounded-pill py-1" id="btnModals">Read more &nbsp; <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-sm">
                    <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                        <div class="card-images">
                            <img src="view/images/othersrc/TipEdgecore.PNG" class="card-img-top mx-auto d-block"
                                id="newsImage">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-left">TIP OpenWiFi Ready Access Point</h5>
                            <p class="card-text text-left">Edgecore provides the comprehensive product line of TIP
                                OpenWiFi
                                Ready Access
                                Points. From indoor to outdoor, Wi-Fi 5 to Wi-Fi 6, the robust & resilient designs can
                                assist
                                you to build the optimal networks. </p>

                            <a href="#" class="btn btn-none rounded-pill py-1" id="btnModals">Read more &nbsp; <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-sm">
                    <div class="card revealOnScroll" data-animation="fadeInLeftBig">
                        <div class="card-images">
                            <img src="view/images/othersrc/TipEdgecore.PNG" class="card-img-top mx-auto d-block"
                                id="newsImage">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-left">TIP OpenWiFi Ready Access Point</h5>
                            <p class="card-text text-left">Edgecore provides the comprehensive product line of TIP
                                OpenWiFi
                                Ready Access
                                Points. From indoor to outdoor, Wi-Fi 5 to Wi-Fi 6, the robust & resilient designs can
                                assist
                                you to build the optimal networks. </p>

                            <a href="#" class="btn btn-none rounded-pill py-1" id="btnModals">Read more &nbsp; <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>



    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>

</body>
<!-- End Body -->