<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Career";
$_SESSION['PAGE_NAV_TITLE'] = "Career"; 
$nav_id = 6;

include 'view/common/header.php';  
include 'controllers/careerController.php'; 

$careers = getCareer();
$getbanner = getBanner($nav_id);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="assets/css/custompage.css">
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

.btn-circle {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

<head>

    <?php include 'view/common/nav.php'; ?>

</head>
<!-- End Header -->

<main role="main">

    <?php if(count($getbanner) <= 1){ ?>

    <?php foreach($getbanner as $banner){ ?>
    <div class="banner-image" style="background-image: url(<?php echo $banner['Image']; ?>); ">
        <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
        <div class="container u-overlay__inner u-ver-center u-content-space text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3 revealOnScroll" data-animation="fadeInUp">
                            <?php echo $banner['Title']; ?></h1>
                        <h4>UNLEASH YOUR POTENTIAL WITH US AND BE PART OF HISTORY IN MAKING A DIFFERENCE</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

    <?php }else{ ?>
    <div id="carouselIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="container u-overlay__inner u-ver-center u-content-space">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center text-white">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3"> <span class="js-display-typing"></span></h1>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-inner main-banner-inner">
            <?php 
                $count = 0;
                foreach($getbanner as $banner){ 
                    $count++;
                    if($count == 1){
                        $count = "active";
                    }
                ?>
            <div class="carousel-item <?php echo $count; ?>">
                <img src="<?php echo $banner['Image']; ?>" class="d-block w-100 imgCarousel">
            </div>
            <?php }  ?>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators1" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php } ?>



    <div class="container py-5">
        <h1 class="text-center revealOnScroll" data-animation="fadeInUp"><?php echo $careers['Title']; ?></h1>
        <p class="revealOnScroll" data-animation="fadeInUp"><?php echo $careers['Description']; ?></p>

        <div class="row">
            <?php foreach(getCareerImage($careers['IdCareer']) as $imageCareer){ ?>

            <div class="col-lg-3 col-sm-4 mt-2 revealOnScroll" data-animation="fadeInLeftBig" revealOnScroll
                data-animation="fadeInLeftBig">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo $imageCareer['Path']; ?>"
                            style="width: 50px; height: 50px; object-fit: contain">
                    </div>
                    <div class="ml-3 col-auto">
                        <p class="text-muted pb-0 mb-0"><?php echo $imageCareer['Title']; ?></p>
                        <p style="width: 170px; word-wrap: break-word;"><?php echo $imageCareer['Description']; ?></p>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>

    </div>

    <div class="container my-5">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <?php foreach(getCareerJobs($careers['IdCareer']) as $jobs){ ?>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading<?php echo $jobs['IdCareerSection']; ?>">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                            href="#collapse<?php echo $jobs['IdCareerSection']; ?>" aria-expanded="false"
                            aria-controls="collapse<?php echo $jobs['IdCareerSection']; ?>">
                            <?php echo $jobs['Title']; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo $jobs['IdCareerSection']; ?>" class="panel-collapse collapse"
                    role="tabpanel" aria-labelledby="heading<?php echo $jobs['IdCareerSection']; ?>">
                    <div class="panel-body revealOnScroll" data-animation="fadeInDown">

                        <?php echo $jobs['Description']; ?>

                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $jobs['Link']; ?>" class="btn btn-info">Apply Now</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <?php } ?>

        </div>
    </div>


</main>

<?php include 'view/common/fb_plugins.php'; ?>
<?php include 'view/common/footer.php'; ?>

<?php include 'view/common/scripts.php'; ?>