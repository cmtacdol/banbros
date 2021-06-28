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
</style>

<body>

    <?php include 'view/common/nav.php'; ?>
    <?php include 'view/common/modal.php'; ?>


    <main role="main">
        <!-- header color -->
        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>


        <div class="container my-5">
            <h6 class="font-weight-light text-center text-lg-left mt-4 mb-0">ThiEYE is specialized in an integrated
                outdoor camera scheme, focusing on action cameras development, design, production and sales.</h6>

            <hr class="mt-2 mb-5">

            <div class="row text-center text-lg-left">

                <div class="col-lg-3 col-md-4 col-6 previewImg">
                    <div class="card shadow-sm mb-4 border border-0">
                        <div class="text-center pt-4">
                            <img src="view/images/thieyei30.jpg" class="card-img-top" id="businessImage">
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
                            <img src="view/images/t5wifi.jpg" class="card-img-top" id="businessImage">
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
                            <img src="view/images/t5e.jpg" class="card-img-top" id="businessImage">
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
                            <img src="view/images/b64kwifi.jpg" class="card-img-top" id="businessImage">
                        </div>
                        <div class="card-body text-center">
                            <h6><span class="font-weight-bold">ThiEye V6</span></h6>

                            <button class="btn btn-info">Check more</button>
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