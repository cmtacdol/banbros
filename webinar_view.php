<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Webinar view";   
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
    /* height: 650px; */
    object-fit: contain;
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

        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>

        <div class="container my-5">

            <div class="row">

                <div class="col-3">
                    <div class="card">
                        <div class="card-header py-0">
                            <h4 class="text-muted mt-2">Webinar</h4>
                        </div>
                        <div class="card-body" style="height: 500px; overflow: auto">
                            <?php for($i=0; $i < 9; $i++){ ?>
                            <div class="p-1 mb-2">
                                <p class="text-muted pb-0 mb-0">Lorem Ipsum</p>
                                <small class="text-muted">01/20/2020 | by: Author</small>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-9 p-0">
                    <div class="card">
                        <div class="card-body pb-0 mb-0">
                            <h2 class="card-title pb-0 mb-0">Lorem Ipsum</h2>
                            <p><small class="text-muted">01/20/2020 | by: Author</small></p>
                            <a href="#" id="share-fb" class="sharer button"><i
                                    class="fab fa-2x fa-facebook-square"></i></a>
                            <a href="#" id="share-tw" class="sharer button"><i
                                    class="fab fa-2x fa-twitter-square"></i></a>
                            <a href="#" id="share-em" class="sharer button"><i
                                    class="fa fa-2x fa-envelope-square"></i></a>
                        </div>
                        <div class="card-body mt-0">
                            <div class="head-image text-center">
                                <img src="view/images/blog1.jpg" class="card-img blog-img">
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aut. Saepe iste mollitia
                                cumque! Minus animi cupiditate, magnam rerum omnis repudiandae soluta enim magni velit
                                autem, necessitatibus nesciunt itaque accusamus.</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aut. Saepe iste mollitia
                                cumque! Minus animi cupiditate, magnam rerum omnis repudiandae soluta enim magni velit
                                autem, necessitatibus nesciunt itaque accusamus.</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aut. Saepe iste mollitia
                                cumque! Minus animi cupiditate, magnam rerum omnis repudiandae soluta enim magni velit
                                autem, necessitatibus nesciunt itaque accusamus.</p>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, aut. Saepe iste mollitia
                                cumque! Minus animi cupiditate, magnam rerum omnis repudiandae soluta enim magni velit
                                autem, necessitatibus nesciunt itaque accusamus.</p>
                        </div>
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