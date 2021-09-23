<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Events";   
include 'view/common/header.php'; 
include 'controllers/newsController.php'; 
 
$token = openssl_random_pseudo_bytes(5);
$token = bin2hex($token);

global $pdo;

$limit = 3;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;

$events = getEvents($_GET['post_id'], $paginationStart, $limit);

// Get total records
$sql = $pdo->query("SELECT count(IdEvents) AS id FROM news_events")->fetchAll();
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
</style>
<link rel="stylesheet" href="assets/css/banner.css">

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">


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
            <h1 class="text-center text-muted">EVENTS</h1>
            <div class="row">
                <?php foreach($events as $eventDetails) { ?>
                <div class="col-lg-12">
                    <div class="card mb-3" style="height: 260px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-0" style="position: relative">
                                <img src="<?php echo $eventDetails['Image']; ?>" class="card-img blog-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        <?php echo $eventDetails['Title']; ?>
                                    </h2>
                                    <p class="mb-0">Date: <?php echo date("F j, Y", strtotime($eventDetails['Date'])); ?>
                                    </p>
                                    <p class="mb-0">Time: <?php echo str_replace('.', ':', $eventDetails['Time']); ?></p>
                                    <p class="mb-0">Venue: <?php echo $eventDetails['Venue']; ?></p>
                                    <div class="row mt-5 py-0">
                                        
                                        <div class="col-lg">
                                            <a href="news_events_view.php?events_id=<?php echo $eventDetails['IdEvents']; ?>"
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
                            href="news_events.php?page=<?= $i; ?>&<?= $token; ?>&post_id=<?= $_GET['post_id']; ?>">
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