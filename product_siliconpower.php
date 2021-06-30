<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Silicon Power Products";
$_SESSION['PAGE_NAV_TITLE'] = "Silicon Power Products"; 

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

.img-strech {
    width: 100%;
    height: 130px;
}

#businessImage {
    width: 70%;
    height: 100%;
    object-fit: contain;
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

.new-style {
    position: absolute;
    z-index: 15;
    right: 0;
    top: 0;
}

.card-header {
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.card-body {
    height: 22vh;
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
    display: -webkit-box;
    width: 100%;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
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
                    <h6 class="font-weight-light text-center text-lg-left mt-4 mb-0">
                        Silicon Power is an international brand and a
                        Taiwan-based manufacturer of flash memory products, including flash memory cards, USB
                        flash drives, portable hard drives, DRAM modules, card readers, solid state drives, USB
                        adapters.
                    </h6>

                    <hr class="mt-2 mb-5">

                    <div class="row text-center text-lg-left">

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/Armor A30 1TB Black and Armor A30 2TB Black.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Armor A30 1TB Black / Armor A30 2TB Black
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/Armor A80 1TB Blue.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Armor A80 1TB Blue
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/Stream S03 1TB Black.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Stream S03 1TB Black
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/Diamond D30 4TB Black.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Diamond D30 4TB Black
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/S103 (10,000MAH) with LCD.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">S103 (10,000MAH) w/ LCD
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="span badge badge-secondary new-style">New</div>
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/GP 25 (10,000MAH) MINI (New).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">GP 25 (10,000MAH) MINI
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="span badge badge-secondary new-style">New</div>
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/CELL C200 (20,000MAH) MINI (New).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">CELL C200 (20,000MAH) MINI
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/C200 (20,000MAH).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">C200 (20,000MAH)
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/TOUCH 835.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">TOUCH 835
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/T03.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">T03
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/T02 black.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">T02 black
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/M01 USB 3.0.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">M01 USB 3.0
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/BLAZE B05 USB 3.0 SLIDE USE.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">BLAZE B05 USB 3.0 SLIDE USE
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/U31.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">U31
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/ULTIMA U05 LED INDICATOR  SLIDE.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">ULTIMA U05 LED INDICATOR / SLIDE
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/X21 31 OTG (Android).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">X21 / 31 OTG (Android).png
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/Z30 OTG For (iPod,iPhone, iPad).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Z30 OTG For (iPod,iPhone, iPad)
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/siliconpower/SP - Micro SD Class 10 & 4 (without Adaptor).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">SP - Micro SD Class 10 & 4 (without Adaptor) / SP - Micro SD Class 10 & 4 (with Adaptor)
                                        </small></h6>
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