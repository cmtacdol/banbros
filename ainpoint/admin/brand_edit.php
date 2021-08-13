<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edit Brand";
$_SESSION['PAGE_NAV_TITLE'] = "Edit Brand";
include 'view/common/header.php';
include 'controller/brandController.php';

if(isset($_POST['updateBrand'])){
    updateBrand($_POST, $_FILES);
}

$parentMenu = getMenu();
$brand = getSingleBrand($_GET['brand_id']);
?>
<!-- THIS SECTION IS FOR THE CSS FOR THIS PAGE ONLY -->

</head>


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
                <form id="newArticleForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?brand_id=<?php echo $_GET['brand_id']; ?>"
                    enctype="multipart/form-data">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="updateBrand"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="brand.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>
                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <input type="hidden" name="brandId" value="<?php echo $_GET['brand_id']; ?>">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Brand Name</label>
                                            <input class="form-control" type="text" name="BrandName" value="<?php echo $brand['BrandName']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" id="Content" name="Content"><?php echo $brand['Description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="title">Parent</label>
                                            <select class="custom-select" name="Parent">
                                                <?php foreach($parentMenu as $menu){ ?>
                                                <option value="<?php echo $menu['IdNavMenu']; ?>" <?php echo ($menu['IdNavMenu'] == $brand['NavId']) ? 'selected' : ''; ?>>
                                                    <?php echo $menu['NavName']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="w-100">Logo</label>
                                            <img src="<?php echo (!empty($brand['Logo'])) ? '../../'.$brand['Logo'] : 'view\images\no-image.jpg'; ?>" id="preview" class="img-thumbnail"
                                                style="width:100%; height: 150px; object-fit: cover">
                                            <div class="">
                                                <input type="file" class="form-control form-control-sm text-truncate"
                                                    id="LogoImage" name="LogoImage">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0" <?php echo ($brand['NavId'] == '0') ? 'selected' : ''; ?>>Active</option>
                                                <option value="1" <?php echo ($brand['NavId'] == '1') ? 'selected' : ''; ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <input type="file" id="bannerImage" name="bannerImage">
                                        <img src="<?php echo (!empty($brand['Banner'])) ? '../../'.$brand['Banner'] : 'view\images\imgpreview.png'; ?>" id="previewBanner"
                                            class="img-thumbnail w-100 previewBanner">
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

    <?php include 'view/common/toast_messages.php'; ?>
    <script>
    CKEDITOR.replace('Content', {
        filebrowserUploadUrl: 'assets/ckeditor/ck_upload.php',
        filebrowserUploadMethod: 'form',
        height: '220px',
    });

    $('#bannerImage').change(function(e) {
        var fileName = e.target.files[0].name;
        // $("#ImportImage").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("previewBanner").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });
    $('#LogoImage').change(function(e) {
        var fileName = e.target.files[0].name;
        // $("#ImportImage").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    $(document).ready(function() {
        $('.selectpicker').select2();
    });
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>