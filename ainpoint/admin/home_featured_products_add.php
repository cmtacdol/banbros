<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add New Brand";
$_SESSION['PAGE_NAV_TITLE'] = "Add New Brand";
include 'view/common/header.php';
include 'controller/homeController.php';

if(isset($_POST['saveFeatured'])){
    saveFeaturedProducts($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$products = getAllProducts();
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
                <form id="newArticleForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
                    enctype="multipart/form-data">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="saveFeatured"
                                    class="btn btn-primary py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Save</button>
                                <a href="home_featured_products.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Tab Title</label>
                                            <input class="form-control" type="text" name="Title">
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
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
                                            </select>
                                        </div>

                                    </div>
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
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>