<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Webinar";   
include 'view/common/header.php'; 
include 'controllers/newsController.php'; 
 
$token = openssl_random_pseudo_bytes(5);
$token = bin2hex($token);

global $pdo;

$limit = 6;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;

$webinar = getWebinar($_GET['post_id'], $paginationStart, $limit);

// Get total records
$sql = $pdo->query("SELECT count(IdWebinar) AS id FROM news_webinar")->fetchAll();
$allRecrods = $sql[0]['id'];

// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;

$getbanner = getBannerByPost($_GET['post_id']);
?>
<style>
body {
    background: #F4F6F9;
    height: 100%;
}

.blog-img {
    width: 100%;
    height: 257px;
    object-fit: cover;
}

.banner-image {
    height: 600px;
    position: relative;
    padding-top: 6.25rem;
    padding-bottom: 6.25rem;
    background-repeat: no-repeat;
    background-position: 50% 0;
    background-size: cover;
}

.parallax {
    /* The image used */
    position: absolute;
    top: 30px;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: .16;
    z-index: -1;
    background-image: url("assets/img/circlelogo.png");
    /* min-height: 1700px; */
    width: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<link rel="stylesheet" href="assets/css/banner.css">

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main" style="position: relative">
        <div class="parallax"></div>

        <?php if (count($getbanner) < 1) { ?>

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <?php } else { ?>
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
                foreach ($getbanner as $banner) {
                    $count++;
                    if ($count == 1) {
                        $count = "active";
                    } ?>
                <div class="carousel-item <?php echo $count; ?>">
                    <img src="<?php echo $banner['Image']; ?>" class="d-block w-100 imgCarousel">
                </div>
                <?php
                }  ?>
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

        <div class="container my-5">
            <h1 class="text-center text-muted">WEBINAR</h1>
            <div class="row">
                <?php foreach($webinar as $webinars) { ?>
                <div class="col-lg-12">
                    <div class="card mb-3" style="height: 260px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-0" style="position: relative">
                                <img src="<?php echo $webinars['Image']; ?>" class="card-img blog-img">

                                <?php  
                                if($webinars['Status'] == '0'){
                                    echo '<h5 class="bg-danger px-3 text-white rounded" style="position: absolute; bottom: 0; right: 8px">Upcoming</h5>';
                                }
                                else if($webinars['Status'] == '1'){
                                    echo '<h5 class="bg-warning px-3 text-white rounded" style="position: absolute; bottom: 0; right: 8px">Ongoing</h5>';
                                }
                                else {
                                    echo '<h5 class="bg-success px-3 text-white rounded" style="position: absolute; bottom: 0; right: 8px">Completed</h5>';
                                }
                                ?>

                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <?php echo $webinars['Title']; ?>
                                    </h2>
                                    <p class="mb-0">Date: <?php echo date("F j, Y", strtotime($webinars['Date'])); ?>
                                    </p>
                                    <p class="mb-0">Time: <?php echo $webinars['Time']; ?></p>
                                    <p class="mb-0">Venue: <?php echo $webinars['Venue']; ?></p>
                                    <div class="row mt-5 py-0">
                                        <div class="col-lg">
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <a href="<?php echo $webinars['link_1']; ?>" class="text-dark"><i
                                                            class="fab fa-facebook-square fa-2x"></i></a>
                                                </div>
                                                <div class="col-auto pr-0">
                                                    <a href="<?php echo $webinars['link_2']; ?>" class="text-dark"><i
                                                            class="fab fa-twitter-square fa-2x"></i></a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="<?php echo $webinars['link_3']; ?>" class="text-dark"><i
                                                            class="fab fa-instagram fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <a href="news_webinar_view.php?webinar_id=<?php echo $webinars['IdWebinar']; ?>"
                                                class="btn btn-danger float-right">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <nav aria-label="Page navigation example mt-5">
                <ul class="pagination justify-content-end">
                    <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                        <a class="page-link"
                            href="<?php if($page <= 1){ echo '#'; } else { echo "?page=" . $prev; } ?>&<?= $token; ?>&post_id=<?= $_GET['post_id']; ?>">Previous</a>
                    </li>

                    <?php for($i = 1; $i <= $totoalPages; $i++ ): ?>
                    <li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
                        <a class="page-link"
                            href="news_webinar.php?page=<?= $i; ?>&<?= $token; ?>&post_id=<?= $_GET['post_id']; ?>">
                            <?= $i; ?> </a>
                    </li>
                    <?php endfor; ?>

                    <li class="page-item <?php if($page >= $totoalPages) { echo 'disabled'; } ?>">
                        <a class="page-link"
                            href="<?php if($page >= $totoalPages){ echo '#'; } else {echo "?page=". $next; } ?>&<?= $token; ?>&post_id=<?= $_GET['post_id']; ?>">Next</a>
                    </li>
                </ul>
            </nav>
        </div>



    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>

</body>
<!-- End Body -->