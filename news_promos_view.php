<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Promos View";   
include 'view/common/header.php'; 
include 'controllers/newsController.php';

$getSinglePromos = getSinglePromos($_GET['id_promos']);
?>
<style>
body {
    background: #F4F6F9;
    height: 100%;
}

#newsImage {
    width: 50%;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>

    <main role="main">

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <div class="container my-5">
            <div class="card revealOnScroll p-5" data-animation="fadeInLeftBig">
                <div class="card-images">
                    <img src="view/images/blog.png" class="card-img-top mx-auto d-block" id="newsImage">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title text-center text-danger mb-0 pb-0 font-weight-bold">
                        <?php echo $getSinglePromos['Title']; ?></h4>
                    <p class="text-muted">Promo valid until
                        <?php echo date("F j, Y", strtotime($getSinglePromos['Title'])); ?></p>
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
                    <div class="mt-3 text-left">
                        <?php echo $getSinglePromos['Description']; ?>
                    </div>


                </div>
            </div>
        </div>




    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>

</body>
<!-- End Body -->