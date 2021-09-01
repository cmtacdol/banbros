<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Career";
$_SESSION['PAGE_NAV_TITLE'] = "Career"; 

include 'view/common/header.php'; 
include 'controllers/careerController.php'; 

$careers = getCareer();

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

    <div class="banner-image" style="background-image: url(assets/1920x1080/CAREER.jpg); ">
        <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
        <div class="container u-overlay__inner u-ver-center u-content-space text-white">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                        <h1 class="display-sm-4 display-lg-3 mb-3 revealOnScroll" data-animation="fadeInUp">CAREER</h1>
                        <h4>UNLEASH YOUR POTENTIAL WITH US AND BE PART OF HISTORY IN MAKING A DIFFERENCE</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h1 class="text-center revealOnScroll" data-animation="fadeInUp"><?php echo $careers['Title']; ?></h1>
        <p class="revealOnScroll" data-animation="fadeInUp"><?php echo $careers['Description']; ?></p>

        <div class="row">
            <?php foreach(getCareerImage($careers['IdCareer']) as $imageCareer){ ?>

            <div class="col-lg-3 col-sm-4 revealOnScroll" data-animation="fadeInLeftBig" revealOnScroll"
                data-animation="fadeInLeftBig">
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo $imageCareer['Path']; ?>" style="width: 50px; height: 50px; object-fit: contain">
                    </div>
                    <div class="ml-3 col-auto">
                        <p class="text-muted pb-0 mb-0"><?php echo $imageCareer['Title']; ?></p>
                        <p><?php echo $imageCareer['Description']; ?></p>
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
                            href="#collapse<?php echo $jobs['IdCareerSection']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $jobs['IdCareerSection']; ?>">
                            <?php echo $jobs['Title']; ?>
                        </a>
                    </h4>
                </div>
                <div id="collapse<?php echo $jobs['IdCareerSection']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $jobs['IdCareerSection']; ?>">
                    <div class="panel-body revealOnScroll" data-animation="fadeInDown">

                    <?php echo $jobs['Description']; ?>
                    
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $jobs['Link']; ?>" class="btn btn-info">Apply Now</a>
                            </div>
                            <div class="col-lg">
                                <div class="row justify-content-center">
                                <?php if(!empty($jobs['ShareLink1'])){ ?>
                                    <div class="col-auto pr-0">
                                        <a href="<?php echo $jobs['ShareLink1']; ?>" class="text-dark"><i class="fab fa-facebook-square fa-lg"></i></a>
                                    </div>
                                <?php } ?>

                                <?php if(!empty($jobs['ShareLink2'])){ ?>
                                    <div class="col-auto pr-0">
                                        <a href="<?php echo $jobs['ShareLink2']; ?>" class="text-dark"><i class="fab fa-twitter-square fa-lg"></i></a>
                                    </div>
                                <?php } ?>
                                
                                <?php if(!empty($jobs['ShareLink3'])){ ?>
                                    <div class="col-auto pr-0">
                                        <a href="<?php echo $jobs['ShareLink3']; ?>" class="text-dark"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div>
                                <?php } ?>
                                   
                                </div>
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