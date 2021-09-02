<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Reseller";  
$_SESSION['PAGE_NAV_TITLE'] = "Reseller";  
$nav_id = 9;

include 'view/common/header.php'; 
include 'controllers/resellerController.php'; 

$content = getReseller($nav_id);


?>

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <div class="container my-5">
            <h1 class="text-center text-muted text-uppercase"><?php echo $content['Title']; ?></h1>

            <div class="mt-4">
                <?php echo $content['Description']; ?>
            </div>

            <hr>

            <div class="row">
            
            <?php foreach(getResellerImages($content['IdContent']) as $images){ ?>

                <div class="col-lg-3 col-md-4 col-6 previewImg revealOnScroll" data-animation="fadeInDown">
                    <a href="<?php echo $images['Link']; ?>" target="_blank"
                        class="d-block mb-4 h-100">
                        <img class="img-fluid border-0 img-thumbnail"
                            src="<?php echo $images['Path']; ?>" alt="">
                    </a>
                </div>

            <?php } ?>

            </div>

        </div>



    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>

</body>
<!-- End Body -->