<?php 
session_start(); 
$_SESSION['PAGE_TITLE']="Events view";   
include 'view/common/header.php'; 
include 'controllers/newsController.php'; 

$getSingleEvents = getSingleEvents($_GET['events_id']);

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
                            <h4 class="text-muted mt-2">Events</h4>
                        </div>
                        <div class="card-body" style="height: 500px; overflow: auto">
                            <?php foreach(getEventsRelated() as $events){ ?>
                                <a href="news_events_view.php?events_id=<?php echo $events['IdEvents']; ?>">
                                    <img src="<?php echo $events['Image']; ?>" style="width: 100%; height: 140px; object-fit: contain">
                                    <p class=" pb-0 mb-0"><?php echo $events['Title']; ?></p>
                                    <small
                                        class="text-muted"><?php echo date("Y-m-d", strtotime($events['Date_added'])); ?>
                                        |
                                        by: <?php echo $events['Author'] ?></small>
                                </a>
                            <hr>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-9 p-0">
                    <div class="card">
                        <div class="card-body pb-0 mb-0">
                        <h2 class="card-title pb-0 mb-0"><?php echo $getSingleEvents['Title'] ?></h2>
                            <p><small class="text-muted"><?php echo date("Y-m-d", strtotime($getSingleEvents['Date_added'])); ?> |
                                    by: <?php echo $getSingleEvents['Author'] ?></small></p>
                        </div>
                        <div class="card-body mt-0">
                        <div class="head-image text-center mb-4">
                                <img src="<?php echo $getSingleEvents['Image']; ?>" class="card-img blog-img">
                            </div>
                            <?php echo $getSingleEvents['Description'] ?>
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