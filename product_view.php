<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "View Product";
$_SESSION['PAGE_NAV_TITLE'] = "View Product"; 

include 'view/common/header.php'; 

?>
<link rel="stylesheet" type="text/css" href="assets/css/modal.css">
<style>
body {
    background: #fafafa;
    height: 100%;
}

.image-gallery {
    margin: 0 auto;
    display: table;
}

.primary,
.thumbnails {
    display: table-cell;
}

.thumbnails {
    width: 200px;

}

.primary {
    border: 1px solid #cccc;
    width: 85%;
    height: 400px;
    background-color: white;
    background-size: contain;
    background-position: center center;
    background-repeat: no-repeat;
}

.thumbnail:hover .thumbnail-image,
.selected .thumbnail-image {
    border: 2px solid #0094DA;
}

.thumbnail-image {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    border: 4px solid transparent;
}
</style>

<body>

    <?php include 'view/common/nav.php'; ?>
    <?php include 'view/common/modal.php'; ?>


    <main role="main">
        <!-- header color -->
        <div class="clas" style="height: 120px; width: 100%; background: #0094DA"></div>


        <div class="container my-5 ">

            <div class="card">
                <div class="card-body text-center">
                    <div class="image-gallery">
                        <aside class="thumbnails">
                            <a href="#" class="selected thumbnail" data-big="http://placekitten.com/420/600">
                                <div class="thumbnail-image"
                                    style="background-image: url(http://placekitten.com/420/600); width: 80%">
                                </div>
                            </a>
                            <a href="#" class="thumbnail" data-big="http://placekitten.com/450/600">
                                <div class="thumbnail-image"
                                    style="background-image: url(http://placekitten.com/450/600); width: 80%">
                                </div>
                            </a>
                            <a href="#" class="thumbnail" data-big="http://placekitten.com/460/700">
                                <div class="thumbnail-image"
                                    style="background-image: url(http://placekitten.com/460/700); width: 80%">
                                </div>
                            </a>
                            <a href="#" class="thumbnail" data-big="http://placekitten.com/480/700">
                                <div class="thumbnail-image"
                                    style="background-image: url(http://placekitten.com/480/700); width: 80%">
                                </div>
                            </a>
                            <a href="#" class="thumbnail" data-big="http://placekitten.com/480/700">
                                <div class="thumbnail-image"
                                    style="background-image: url(http://placekitten.com/480/700); width: 80%">
                                </div>
                            </a>
                        </aside>

                        <main class="primary" style="background-image: url('http://placekitten.com/420/600');"></main>
                    </div>
                    <div class="mt-5 text-left">
                        <h4 class="mb-0 mt-5 font-weight-bold">Desciption</h4>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit tempore deserunt fuga id,
                            aliquam ex. Adipisci, sit rerum fuga iste doloribus explicabo consequuntur modi recusandae
                            perferendis inventore alias voluptatum nostrum.</p>
                    </div>

                    <div class="mt-5 text-left">
                        <h4 class="mb-0 mt-5 font-weight-bold">Specification</h4>
                        <hr>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit tempore deserunt fuga id,
                            aliquam ex. Adipisci, sit rerum fuga iste doloribus explicabo consequuntur modi recusandae
                            perferendis inventore alias voluptatum nostrum.</p>
                    </div>

                    <a href="#" class="btn btn-info mt-5 mb-2">Inquire Now</a>
                </div>

            </div>
        </div>
        <!-- /.container -->

    </main>

    <?php include 'view/common/fb_plugins.php'; ?>
    <?php include 'view/common/footer.php'; ?>

    <?php include 'view/common/scripts.php'; ?>
    <script>
    $('.thumbnail').on('click', function() {
        var clicked = $(this);
        var newSelection = clicked.data('big');
        var $img = $('.primary').css("background-image", "url(" + newSelection + ")");
        clicked.parent().find('.thumbnail').removeClass('selected');
        clicked.addClass('selected');
        $('.primary').empty().append($img.hide().fadeIn('slow'));
    });
    </script>
</body>
<!-- End Body -->

</html>