<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Thieye Products";
$_SESSION['PAGE_NAV_TITLE'] = "Thieye Products"; 

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
                                    <a href="#" > 
                                        <h6 class="title">Camera </h6>
                                    </a>
                                </header>
                            </article>
                            <article class="filter-group p-0 mt-2">
                                <header class="card-header p-1">
                                    <a href="#" > 
                                        <h6 class="title">Camera </h6>
                                    </a>
                                </header>
                            </article>
                            <article class="filter-group p-0 mt-2">
                                <header class="card-header p-1">
                                    <a href="#" > 
                                        <h6 class="title">Camera </h6>
                                    </a>
                                </header>
                            </article>

                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h6 class="font-weight-light text-center text-lg-left mt-4 mb-0">ThiEYE is specialized in an
                        integrated
                        outdoor camera scheme, focusing on action cameras development, design, production and sales.
                    </h6>

                    <hr class="mt-2 mb-5">

                    <div class="row text-center text-lg-left">

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/thieye/thieyei30.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6><span class="font-weight-bold">ThiEye i30</span></h6>
                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/thieye/t5wifi.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6><span class="font-weight-bold">ThiEye T5</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/thieye/t5e.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6><span class="font-weight-bold">ThiEye T5 Edge</span></h6>

                                    <button class="btn btn-info">Check more</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-6 previewImg">
                            <div class="card shadow-sm mb-4 border border-0">
                                <div class="text-center pt-4">
                                    <img src="view/images/thieye/b64kwifi.jpg" class="card-img-top" id="businessImage">
                                </div>
                                <div class="card-body text-center">
                                    <h6><span class="font-weight-bold">ThiEye V6</span></h6>

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