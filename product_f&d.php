<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "F&D Products";
$_SESSION['PAGE_NAV_TITLE'] = "F&D Products"; 

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
                    <h6 class="font-weight-light text-center text-lg-left mt-4 mb-0">Fenda Company was founded in 2005,
                        starting with
                        loudspeaker development and manufacturing, and achieved its own core competence of
                        electro-acoustic design, wireless technology, software development to give
                        extra-ordinary experience.
                    </h6>

                    <hr class="mt-2 mb-5">

                    <div class="row text-center text-lg-left">

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="span badge badge-secondary new-style">New</div>
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D V320 Computer Speaker (New).jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D V320 Computer Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="span badge badge-secondary new-style">New</div>
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D F5060x (New).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D F5060x
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D F3800X(Deform Box).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D F3800X (Deform Box)
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D F203G Wired Speaker.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D F203G Wired Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D A140X 2.1 Bluetooth Multimedia Speaker.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D A140X 2.1 Bluetooth Multimedia Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D F550X.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D F550X
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D F210X 2.1 Bluetooth Multimedia Speaker.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D F210X 2.1 Bluetooth Multimedia Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D T5 Trolley Speaker.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D T5 Trolley Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D T400x.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D T400x
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D T60X TV Speaker.jpg" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D T60X TV Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D T360x.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D T360x
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D T200x.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D T200x
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D T280x.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D T280x
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D W40 Portable Bluetooth Speaker.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D W40 Portable Bluetooth Speaker
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="span badge badge-secondary new-style">New</div>
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D W5 Plus Black (New).png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D W5 Plus Black
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D EW201.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D EW201
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D EW202.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D EW202
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D E310.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D E310
                                        </small></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center img-strech">
                                    <img src="view/images/f&d/F&D E330.png" class="card-img-top"
                                        id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6 class="h-custom"><small class="font-weight-bold">F&D E330
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