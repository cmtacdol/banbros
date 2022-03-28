<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edifier Products";
$_SESSION['PAGE_NAV_TITLE'] = "Edifier Products"; 

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
                        Edifier is a Chinese audio manufacturer that produces
                        speakers, music systems, and headphones for personal and home entertainment.
                    </h6>

                    <hr class="mt-2 mb-5">

                    <div class="row text-center text-lg-left">

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier X3.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier X3
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier TWS5.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier TWS5
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier GM3SE.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier GM3SE
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier K800.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier K800
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier W820BT Bluetooth Headset.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier W820BT Bluetooth Headset
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier W855BT Premiere Bluetooth Headset.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier W855BT Premiere Bluetooth Headset
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier V4 Gaming Headset.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier V4 Gaming Headset
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier MP80 Portable Bluetooth Speaker.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier MP80 Portable Bluetooth Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier MP100.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier MP100
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier Mp202 black.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier Mp202 black
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier Headset SR-L700.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier Headset SR-L700
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier Stax D10.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier Stax D10
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier R1280DB.png" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier R1280DB
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier R2000DB.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier R2000DB
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier S880DB.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier S880DB
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier S2000 Pro.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier S2000 Pro
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier S350DB.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier S350DB
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier E25HD 2.0.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier E25HD 2.0
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier E235HD 2.1.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier E235HD 2.1
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier E255 HD 5.1.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier E255 HD 5.1
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier CineSound B7.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier CineSound B7
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier S50DB.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier S50DB
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier S70DB.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier S70DB
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier R12U.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier R12U
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier G2000.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier G2000
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier X230.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier X230
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier XM2PF.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier XM2PF
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier X100.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier X100
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/edifier/Edifier M1360.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">Edifier M1360
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