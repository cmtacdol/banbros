<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "UBTECH Products";
$_SESSION['PAGE_NAV_TITLE'] = "UBTECH Products"; 

include 'view/common/header.php'; 

?>
<link rel="stylesheet" type="text/css" href="assets/css/modal.css">
<style>
body {
    background: #fafafa;
    height: 100%;
}


.business-text {
    display: -webkit-box;
    width: 100%;
    height: 109.2px;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
}

#businessImage {
    width: 70%;
}

.filter-group {
    border-bottom: 1px solid #e4e4e4
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.37rem
}

.card-header {
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.filter-group .card-header {
    border-bottom: 0
}

.icon-control {
    margin-top: 6px;
    float: right;
    font-size: 80%
}

.list-menu {
    list-style: none;
    margin: 0;
    padding-left: 0
}

.list-menu a {
    color: #343a40
}

a {
    text-decoration: none !important;
    background-color: transparent
}

.h-custom {
    height: 50px;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>
    <?php include 'view/common/modal.php'; ?>


    <main role="main">
        <!-- header color -->
        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>


        <div class="container my-5 ">
            <div class="row justify-content-around">
                <div class="col-lg-3 py-0 px-0">
                    <div class="card shadow-sm mb-4 border border-0 h-100">
                        <div class="card-body">
                            <article class="filter-group p-0">
                                <header class="card-header p-1">
                                    <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true"
                                        aria-expanded="false" class="collapsed"> <i
                                            class="icon-control fa fa-chevron-down"></i>
                                        <h6 class="title">Categories </h6>
                                    </a>
                                </header>
                                <div class="filter-content collapse" id="collapse_aside1" style="">
                                    <div class="card-body pt-0 mt-0">
                                        <ul class="list-menu">
                                            <li><a href="#" data-abc="true">Electronics </a></li>
                                            <li><a href="#" data-abc="true">Watches </a></li>
                                            <li><a href="#" data-abc="true">Laptops </a></li>
                                            <li><a href="#" data-abc="true">Clothes </a></li>
                                            <li><a href="#" data-abc="true">Accessories </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                            <article class="filter-group p-0 mt-2">
                                <header class="card-header p-1">
                                    <a href="#">
                                        <h6 class="title">Robot </h6>
                                    </a>
                                </header>
                            </article>
                            <article class="filter-group p-0 mt-2">
                                <header class="card-header p-1">
                                    <a href="#">
                                        <h6 class="title">Robot </h6>
                                    </a>
                                </header>
                            </article>
                            <article class="filter-group p-0 mt-2">
                                <header class="card-header p-1">
                                    <a href="#">
                                        <h6 class="title">Robot </h6>
                                    </a>
                                </header>
                            </article>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">

                    <!-- Slider carousel -->
                    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/banner/ubtech.jpg" class="d-block w-100" alt="...">
                            </div>
                            <!-- <div class="carousel-item">
                                <img src="assets/banner/asus1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/banner/gam.jpg" class="d-block w-100" alt="...">
                            </div> -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <h6 class="font-weight-light text-center text-lg-left mt-4 mb-0">UBTECH is the only company offering
                        such a broad, open
                        ecosystem of robot innovations, from entry level consumer products, to educational
                        tools, to advanced devices offering complex capabilities solving difficult challenges.
                    </h6>

                    <hr class="mt-2 mb-5">

                    <div class="row text-center text-lg-left">

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/astrobot-kit.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">ASTROBOT KIT</span></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/kit-entry.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">UBTECH Ukit Entry</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/ukit-advance.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">Ukit Advance</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/yanshee.png" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">UBTECH Yanshee</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/alpha1-pro.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">UBTech Alpha1 Pro</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/storm-trooper.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">UBTECH Storm Trooper</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/buzzbot-muttbot.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">UBTech Buzzbot and Muttbot
                                            Kit</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/ubtech/tankbot.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><span class="font-weight-bold">UBTech Tankbot Kit</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <script>
    $(document).on("click", "#btnModals", function() {
        $(".modal-body #Imagehead").attr('src', $(this).data('image'));
        $(".modal-body #description").text($(this).data('desc'));
    });
    </script>
</body>
<!-- End Body -->

</html>