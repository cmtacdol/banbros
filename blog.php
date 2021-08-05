<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Blog";   
include 'view/common/header.php'; 
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
    -webkit-line-clamp: 2;
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
                <?php for($i=0; $i < 6; $i++){ ?>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-0">
                                <img src="view/images/blog.png" class="card-img blog-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body" style="height: 190px;">
                                   <a href="blog_view.php">
                                   <h5 class="card-title">Lorem ipsum dolor sit amet consectetur ddddddddddddddddddd
                                    </h5>
                                   </a>
                                    <div class="row">
                                        <div class="col-auto pr-0">
                                            <a href="#" class="text-dark"><i class="fab fa-facebook-square"></i></a>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <a href="#" class="text-dark"><i class="fab fa-twitter-square"></i></a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="text-dark"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                    <p class="card-text mt-2"><small class="text-muted">July 20, 2021</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
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