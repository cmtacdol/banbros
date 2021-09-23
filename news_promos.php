<?php
session_start();
$_SESSION['PAGE_TITLE']="Promos";
include 'view/common/header.php';
include 'controllers/newsController.php';

$token = openssl_random_pseudo_bytes(5);
$token = bin2hex($token);

global $pdo;

$limit = 2;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;

$getPromos = getPromos($_GET['post_id'], $paginationStart, $limit);

// Get total records
$sql = $pdo->query("SELECT count(IdPromos) AS id FROM news_promos")->fetchAll();
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

.card-images {
    height: 40vh;
}

#newsImage {
    width: 100%;
    height: 100%;
    object-fit: cover;
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
            <h1 class="text-center text-muted">PROMOS</h1>

            <div class="row justify-content-center mb-5">
                <?php foreach($getPromos as $promo){ ?>
                    <div class="col-lg-5 col-sm">
                    <div class="card revealOnScroll" data-animation="fadeInLeftBig" style="height: 520px">
                        <div class="card-images">
                            <img src="<?php echo $promo['Image']; ?>" class="card-img-top mx-auto d-block" id="newsImage">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title text-center text-danger mb-0 pb-0 font-weight-bold"><?php echo $promo['Title']; ?></h4>
                            <p class="text-muted">Promo valid until <?php echo date("F j, Y", strtotime($promo['Date_Validity'])); ?></p>
                            <div class="row justify-content-center">
                                <div class="col-auto pr-0">
                                    <a href="#" class="text-dark"><i class="fab fa-facebook-square fa-lg"></i></a>
                                </div>
                                <div class="col-auto pr-0">
                                    <a href="#" class="text-dark"><i class="fab fa-twitter-square fa-lg"></i></a>
                                </div>
                                <div class="col-auto">
                                    <a href="#" class="text-dark"><i class="fab fa-instagram fa-lg"></i></a>
                                </div>
                            </div>

                            <a href="news_promos_view.php?id_promos=<?php echo $promo['IdPromos']; ?>" class="btn btn-info rounded-pill py-1 mt-5" id="btnModals">View
                                Details</a>
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
                            href="news_promos.php?page=<?= $i; ?>&<?= $token; ?>&post_id=<?= $_GET['post_id']; ?>">
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