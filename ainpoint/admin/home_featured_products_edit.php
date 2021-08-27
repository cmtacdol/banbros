<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add New Brand";
$_SESSION['PAGE_NAV_TITLE'] = "Add New Brand";
include 'view/common/header.php';
include 'controller/homeController.php';

if(isset($_POST['updateFeatured'])){
    updateFeaturedProducts($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}
if(isset($_POST['deleteSingleFeaturedImage'])){
    deleteFeaturedProductImage($_POST['deleteSingleFeaturedImage']);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$productImage = getFeaturedProductsImages($_GET['featured_id']);
$products = getAllProducts();

$getSingleFeatured = getSingleFeaturedProducts($_GET['featured_id']);
?>
<!-- THIS SECTION IS FOR THE CSS FOR THIS PAGE ONLY -->

</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />

<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include 'view/common/nav.php'; ?>
            <?php include 'view/common/sidebar.php'; ?>
            <div class="pcoded-content">
                <form id="newArticleForm" method="post"
                    enctype="multipart/form-data">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <button type="submit" name="updateFeatured"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="home_featured_products.php"
                                    class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <input type="hidden" name="featured_id" value="<?php echo $_GET['featured_id']; ?>">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Tab Title</label>
                                            <input class="form-control" type="text" name="Title"
                                                value="<?php echo $getSingleFeatured['Title']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="title">Select Multiple Products</label>
                                            <select class="w-100" name="Products[]" multiple data-live-search="true"
                                                style="width: 100%">

                                                <?php foreach($products as $product){ ?>
                                                <option value="<?php echo $product['IdProduct']; ?>">
                                                    <?php echo $product['ProductName']; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <select id="disableThis" class="w-100" multiple data-live-search="true"
                                                style="width: 100%">
                                                <?php foreach(getFeaturedProductsImages($_GET['featured_id']) as $product){ ?>
                                                <option value="<?php echo $product['IdProduct']; ?>"
                                                    <?php echo ($getSingleFeatured['IdFeatured'] == $product['FeaturedId']) ? 'selected' : ''; ?>>
                                                    <?php echo $product['ProductName']; ?>
                                                </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0"
                                                    <?php echo ($getSingleFeatured['Status'] == '0') ? 'selected' : ''; ?>>
                                                    Active</option>
                                                <option value="1"
                                                    <?php echo ($getSingleFeatured['Status'] == '1') ? 'selected' : ''; ?>>
                                                    Inactive</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card mt-1">
                            <div class="card-body">
                                <div class="row">
                                    <?php foreach($productImage as $image){ ?>
                                    <div class="col-lg-3 text-center" style="position: relative">
                                        <div style="position: absolute; right: 0; top: 0">
                                            <button type="submit" name="deleteSingleFeaturedImage" class="btn btn-danger" value="<?php echo $image['IdFeturedImages']; ?>"><i
                                                    class="icofont icofont-trash"></i></button>
                                        </div>

                                        <img src="../../<?php echo $image['Image']; ?>"
                                            style="width: 100%; height: 150px; object-fit:contain">
                                        <p><?php echo $image['ProductName']; ?></p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>



    <?php include 'view/common/scripts.php'; ?>

    <script src="assets/ckeditor/ckeditor.js"></script>
    <script src="assets/ckeditor/config.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <?php include 'view/common/toast_messages.php'; ?>
    <script>
    CKEDITOR.replace('Content', {
        filebrowserUploadUrl: 'assets/ckeditor/ck_upload.php',
        filebrowserUploadMethod: 'form',
        height: '220px',
    });

    $(document).ready(function() {
        $('select').selectpicker();
    });

    $('#disableThis').attr('disabled', 'disabled');
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>