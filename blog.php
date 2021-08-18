<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Blog";   
include 'view/common/header.php'; 
include 'controllers/newsController.php'; 

$token = openssl_random_pseudo_bytes(5);
//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);


global $pdo;

if(isset($_POST['records-limit'])){
    $_SESSION['records-limit'] = $_POST['records-limit'];
}

$limit = 6;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;

$blog = getBlog($_GET['post_id'], $paginationStart, $limit);

// Get total records
$sql = $pdo->query("SELECT count(IdBlog) AS id FROM news_blog")->fetchAll();
$allRecrods = $sql[0]['id'];

// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;

?>
<style>
body {
    background: #F4F6F9;
    height: 100%;
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

.blog-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-title {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">

        <div class="banner-image" style="background-image: url(assets/1920x1080/CAREER.jpg); ">
            <!-- <img src="assets/1920x1080/BBCC3.jpg" class="imgCarousel"> -->
            <div class="container u-overlay__inner u-ver-center u-content-space text-white">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="text-uppercase u-letter-spacing-sm mb-0"></p>
                            <h1 class="display-sm-4 display-lg-3 mb-3 revealOnScroll" data-animation="fadeInUp">BLOG
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container my-5">

            <div class="row">
                <?php foreach($blog as $blogs){ ?>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-0">
                                <img src="<?php echo $blogs['Image']; ?>" class="card-img blog-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="height: 140px;">
                                    <a href="blog_view.php?blog_id=<?php echo $blogs['IdBlog']; ?>">
                                        <h5 class="card-title"><?php echo $blogs['Title']; ?>
                                        </h5>
                                    </a>
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <a href="<?php echo $blogs['link_1']; ?>" class="text-dark"><i
                                                    class="fab fa-facebook-square"></i></a>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <a href="<?php echo $blogs['link_2']; ?>" class="text-dark"><i
                                                    class="fab fa-twitter-square"></i></a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="<?php echo $blogs['link_3']; ?>" class="text-dark"><i
                                                    class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <p class="card-text mt-2"><small
                                            class="text-muted"><?php echo date("F j, Y", strtotime($blogs['Date_added'])); ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation example mt-5">
                <ul class="pagination justify-content-end">
                    <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                        <a class="page-link"
                            href="<?php if($page <= 1){ echo '#'; } else { echo "?page=" . $prev; } ?>&<?= $token; ?>&post_id=<?= $_GET['post_id']; ?>">Previous</a>
                    </li>

                    <?php for($i = 1; $i <= $totoalPages; $i++ ): ?>
                    <li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
                        <a class="page-link" href="blog.php?page=<?= $i; ?>&<?= $token; ?>&post_id=<?= $_GET['post_id']; ?>"> <?= $i; ?> </a>
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
    <script>
    $(document).ready(function() {
        $('#records-limit').change(function() {
            $('form').submit();
        })
    });
    </script>

</body>
<!-- End Body -->