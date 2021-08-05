<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Promos View";   
include 'view/common/header.php'; 
?>
<style>
body {
    background: #F4F6F9;
    height: 100%;
}

/* 
.card-text {
    display: -webkit-box;
    width: 100%;
    height: 109.2px;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    text-overflow: ellipsis;
    overflow: hidden;
} */


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
                <h1 class="text-center text-muted">PROMOS</h1>
                <div class="card-images">
                    <img src="view/images/blog.png" class="card-img-top mx-auto d-block" id="newsImage">
                </div>
                <div class="card-body text-center">
                    <h4 class="card-title text-center text-danger mb-0 pb-0 font-weight-bold">Lorem ipsum dolor
                        sit</h4>
                    <p class="text-muted">Promo valid until December 31, 2021</p>
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
                    <p class="card-text text-left mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupiditate doloremque consequatur minima unde quam tempora eaque sunt ea laborum neque,
                        maiores dolor soluta perferendis nulla. Repellendus deleniti obcaecati laborum
                        veritatis.</p>

                    <p class="card-text text-left mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupiditate doloremque consequatur minima unde quam tempora eaque sunt ea laborum neque,
                        maiores dolor soluta perferendis nulla. Repellendus deleniti obcaecati laborum
                        veritatis.</p>

                    <p class="card-text text-left mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupiditate doloremque consequatur minima unde quam tempora eaque sunt ea laborum neque,
                        maiores dolor soluta perferendis nulla. Repellendus deleniti obcaecati laborum
                        veritatis.</p>

                    <p class="card-text text-left mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Cupiditate doloremque consequatur minima unde quam tempora eaque sunt ea laborum neque,
                        maiores dolor soluta perferendis nulla. Repellendus deleniti obcaecati laborum
                        veritatis.</p>


                </div>
            </div>
        </div>




    </main>


    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>

</body>
<!-- End Body -->