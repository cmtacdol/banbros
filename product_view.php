<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "View Product";
$_SESSION['PAGE_NAV_TITLE'] = "View Product"; 

include 'view/common/header.php'; 
include 'controllers/productController.php'; 

$product = getProducts($_GET['produc_id']);
$product_gallery = getProductGallery($_GET['produc_id']);

?>
<link rel="stylesheet" type="text/css" href="assets/css/product_view.css">

<body>

    <?php include 'view/common/nav.php'; ?>
    <?php include 'view/common/modal.php'; ?>


    <main role="main">
        <!-- header color -->
        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>


        <div class="container my-5 ">

            <div class="card">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="head-img">
                            <img src="<?php echo $product['Image']; ?>"
                                style="width:100%; height:100%; object-fit:contain" />
                        <h3 class="text-center"><?php echo $product['ProductName']; ?></h3>
                        <hr>
                        </div>
                    </div>
                    <h1 class="section-header">Product Gallery</h1>
                    <div class="video-gallery mt-5">
                        <div class="row">

                            <?php foreach($product_gallery as $gallery) { ?>
                            <?php if(getimagesize($gallery['Path'])) { ?>
                            <div class="col-lg-4">
                                <div class="gallery-item">
                                    <img src="<?php echo $gallery['Path']; ?>" alt="Olympic National Park" />
                                    <div class="gallery-item-caption">
                                        <a class="vimeo-popup" href="<?php echo $gallery['Path']; ?>"></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if(mime_content_type($gallery['Path']) == 'video/mp4' || mime_content_type($gallery['Path']) == 'video/webm') { ?>
                            <div class="col-lg-4">
                                <div class="gallery-item">
                                    <video controls>
                                        <source src="<?php echo $gallery['Path']; ?>#t=0.5"
                                            type="video/mp4">
                                    </video>
                                    <div class="gallery-item-caption">
                                        <a class="vimeo-popup" href="<?php echo $gallery['Path']; ?>"></a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>

                        </div>

                    </div>
                    <div class="mt-5 text-left">
                        <h4 class="mb-0 mt-5 font-weight-bold">Desciption</h4>
                        <hr>
                        <?php echo $product['Description']; ?>
                    </div>

                    <div class="mt-5 text-left">
                        <h4 class="mb-0 mt-5 font-weight-bold">Specification</h4>
                        <hr>
                        <?php echo $product['Specification']; ?>
                    </div>

                    <a href="<?php echo $product['Link']; ?>" class="btn btn-info mt-5 mb-2">Inquire Now</a>
                </div>

            </div>
        </div>
        <!-- /.container -->

    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <script>
    $(document).ready(function() {
        $('.video-gallery').magnificPopup({
            delegate: 'a',
            type: 'iframe',
            gallery: {
                enabled: true
            }
        });
    });
    </script>
</body>
<!-- End Body -->

</html>