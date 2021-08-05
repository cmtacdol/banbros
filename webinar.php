<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Webinar";   
include 'view/common/header.php'; 
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

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <div class="container my-5">
            <h1 class="text-center text-muted">WEBINAR</h1>
            <div class="row">
                <?php for($i=0; $i<3; $i++) { ?>
                <div class="col-lg-12">
                    <div class="card mb-3" style="height: 260px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 p-0" style="position: relative">
                                <img src="view/images/blog.png" class="card-img blog-img">
                                <h5 class="bg-danger px-3 text-white rounded" style="position: absolute; bottom: 0; right: 8px">Upcoming</h5>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title">Lorem ipsum dolor sit amet consectetur
                                    </h2>
                                    <p class="mb-0">Date: July 20, 2021</p>
                                    <p class="mb-0">Time: 6pm</p>
                                    <p class="mb-0">Venue: Manila</p>
                                    <div class="row mt-5 py-0">
                                        <div class="col-lg">
                                            <div class="row">
                                                <div class="col-auto pr-0">
                                                    <a href="#" class="text-dark"><i
                                                            class="fab fa-facebook-square fa-2x"></i></a>
                                                </div>
                                                <div class="col-auto pr-0">
                                                    <a href="#" class="text-dark"><i
                                                            class="fab fa-twitter-square fa-2x"></i></a>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-dark"><i
                                                            class="fab fa-instagram fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <a href="webinar_view.php" class="btn btn-danger float-right">View Details</a>
                                        </div>
                                    </div>
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