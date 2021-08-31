<?php
session_start();
$_SESSION['PAGE_TITLE'] = "About Us";
$_SESSION['PAGE_NAV_TITLE'] = "About Us";
$nav_id = 2;

include 'view/common/header.php'; 
include 'controllers/aboutController.php'; 

$getBanners = getBanner($nav_id);
$totals = []; 

foreach($getBanners as $banner){
    $total_formated = "\"".$banner['Title']."\"";
    $total_images = $banner['Image'];

    array_push($totals,$total_formated);
}
$totals_string = implode(",", $totals);

$tabTitle = getTabTitle();
?>
<style>
.carousel-inner {
    height: 600px;
}

.imgCarousel {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

@media screen and (max-width: 769px) {
    .imgCarousel {
        height: 600px;
        object-fit: cover;
    }
}

.bci {
    height: 250px;
}

.card ::-webkit-scrollbar {
    width: 10px;
}

/* Track */
.card ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey;
    border-radius: 10px;
}

/* Handle */
.card ::-webkit-scrollbar-thumb {
    background: skyblue;
    border-radius: 10px;
}

/* Handle on hover */
.card ::-webkit-scrollbar-thumb:hover {
    background: #b30000;
}
</style>

<head>
    <?php include 'view/common/nav.php';?>

    <div id="carouselIndicators1" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="container u-overlay__inner u-ver-center u-content-space u-overlay--dark">
            <div class="overay-dark"
                style="background: #0a0a0a2a; position: absolute; width: 100%; top:0; bottom: 0; left: 0; right: 0;">
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center text-white">
                        <h3 class="text-uppercase u-letter-spacing-sm mb-0 revealOnScroll" data-animation="fadeInUp">OUR
                            COMPANY</h3>
                        <h1 class="display-sm-4 display-lg-3 mb-3"> <span class="js-display-typing"></span></h1>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-inner main-banner-inner">
            <?php 
                $count = 0;
                foreach($getBanners as $banner){ 
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
</head>
<!-- End Header -->

<main role="main">

    <!-- Tab navigation -->
    <section class="u-content-space">
        <div class="container">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <?php 
                $count = 0;
                foreach($tabTitle as $tabs){ 
                    $count++;
                    if($count == 1){
                        $count = 'active';
                    }
                ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link <?php echo $count; ?>" id="pills-<?php echo $tabs['IdContentTab']; ?>-tab"
                        data-toggle="pill" href="#pills-<?php echo $tabs['IdContentTab']; ?>" role="tab"
                        aria-controls="pills-<?php echo $tabs['IdContentTab']; ?>"
                        aria-selected="true"><?php echo $tabs['TabTitle']; ?></a>
                </li>
                <?php } ?>
            </ul>
            <div class="tab-content mt-5" id="pills-tabContent">
                <?php 
                $count = 0;
                foreach($tabTitle as $tabs){ 
                    $count++;
                    if($count == 1){
                        $count = 'active';
                    }
                ?>
                <div class="tab-pane fade show <?php echo $count; ?>" id="pills-<?php echo $tabs['IdContentTab']; ?>"
                    role="tabpanel" aria-labelledby="pills-<?php echo $tabs['IdContentTab']; ?>-tab">
                    <div class="container">

                        <?php 
                        if($tabs['BodyHeader'] == "HISTORY & GROWTH"){
                            echo '<h2 class="text-center mb-2">'.$tabs['BodyHeader'].'</h2>';
                        }

                        else if($tabs['BodyHeader'] == "Tekzone Inc."){
                            echo '<h1 class="text-center" style="color: #0C65C7; font-weight: bold">'.$tabs['BodyHeader'].'</h1>';
                        }

                        else if($tabs['BodyHeader'] == "DISTRIBUTION CHANNEL Partner for Growth"){
                            echo '<h3 class="text-center">'.$tabs['BodyHeader'].'</h3>';
                        }

                        else if($tabs['BodyHeader'] == "BANBROS COMMERCIAL INC. SATELLITE OFFICES"){
                            echo '<h1 class="text-center" style="color: #0C65C7; font-weight: bold">'.$tabs['BodyHeader'].'</h1>';
                        }
                        else{
                            echo '<h2 class="text-center mb-2">'.$tabs['BodyHeader'].'</h2>';
                        }
                        ?>

                        <div class="row">
                            <?php foreach(getContentByTab($nav_id, $tabs['IdContentTab']) as $tabContents){ ?>

                            <?php if($tabContents['Title'] == "" && !empty($tabContents['Description']) && !is_null($tabContents['Description'])){ ?>
                            <div class="animated fadeInUp" data-animation="fadeInUp">
                                <?php echo $tabContents['Description']; ?>
                            </div>
                            <?php } ?>

                            <?php if($tabContents['Title'] == "Banbros Commercial, Inc." || $tabContents['Title'] == "Banbros Commercial Inc. (BCI)" || $tabContents['Title'] == "Our company today, BCI continues to provides"){ ?>
                            <div class="col-lg-4 col-sm-4 mb-4">
                                <div class="card revealOnScroll" data-animation="fadeInLeft"
                                    style="width: 100%; height: 300px; border-radius: 10px">
                                    <div class="card-body">
                                        <h4 class="card-title mb-0"><?php echo $tabContents['Title']; ?></h4>
                                        <p class="card-text">
                                            <?php echo $tabContents['Description']; ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if($tabContents['Title'] == "VISION" || $tabContents['Title'] == "MISSION"){ ?>
                            <div class="col-lg-6 mb-12">
                                <div class="card revealOnScroll" data-animation="fadeInUp"
                                    style="width: 100%; height: 280px; border-radius: 10px">
                                    <div class="card-body">
                                        <h1 class="card-title font-weight-bold mb-0">
                                            <?php echo $tabContents['Title']; ?></h1>
                                        <div class="col ">
                                            <div>
                                                <?php echo $tabContents['Description']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if($tabContents['Title'] == "STRATEGY"){ ?>
                            <div class="col-lg mb-12 mt-5">
                                <div class="card revealOnScroll" data-animation="fadeInUp"
                                    style="width: 100%; height 280px; border-radius: 10px">
                                    <div class="card-body">
                                        <h1 class="card-title font-weight-bold text-center mb-0">
                                            <?php echo $tabContents['Title']; ?></h1>
                                        <div class="col text-center">
                                            <?php echo $tabContents['Description']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php if($tabContents['Title'] == "Luzon Main Office:" || $tabContents['Title'] == "Visayas Office:" || $tabContents['Title'] == "Mindanao:" || $tabContents['Title'] == "Iloilo:" || $tabContents['Title'] == "CDO:"){ ?>
                            <div class="col-lg-4 col-sm mb-4">
                                <div class="card bci revealOnScroll" data-animation="fadeInLeft">
                                    <div class="card-header bg-info text-white">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="ml-2 mt-1" style="font-weight: bolder">
                                                <?php echo $tabContents['Title']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body" style="overflow: auto">
                                        <?php echo $tabContents['Description']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php } ?>

                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>


</main>

<?php include 'view/common/fb_plugins.php';?>
<?php include 'view/common/footer.php';?>

<?php include 'view/common/scripts.php';?>


<script>
$scripts = <?php echo $totals_string; ?>;
$(document).on('ready', function() {
    // initialization of text animation (typing)
    $(".js-display-typing").typed({
        strings: [
            // "HISTORY&nbsp;&&nbsp;GROWTH",
            // "BCI SATELLITE OFFICES",
            // "Banbros Commercial, Inc."
            $scripts
        ],
        typeSpeed: 60,
        loop: true,
        backDelay: 2500
    });
});
</script>
</body>
<!-- End Body -->

</html>