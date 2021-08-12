<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edit Product";
$_SESSION['PAGE_NAV_TITLE'] = "Edit Product";
include 'view/common/header.php';
include 'controller/categoryController.php';
include 'controller/productController.php';

if(isset($_POST['updateProduct'])){
    updateProducts($_POST,$_FILES);
}

if($_POST['deleteProductImage']){
    deleteImagesByIdImage($_POST['deleteProductImage']);
}

$getSingProduct = getSingleProduct($_GET['productId']);
$getCategories = getAllCategories();

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
                <form id="newProductForm" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>?productId=<?php echo $_GET['productId']; ?>">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="updateProduct"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="product.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>
                                        
                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-8">
                                    <input type="hidden" name="productid" value="<?php echo $_GET['productId']; ?>">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input class="form-control" type="text" name="ProductName"
                                                value="<?php echo $getSingProduct['ProductName']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" name="Description"
                                                rows="4"><?php echo $getSingProduct['Description']; ?></textarea>
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Specification</label>
                                            <textarea class="form-control" id="Content"
                                                name="Specification"><?php echo $getSingProduct['Specification']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="title">Category</label>
                                            <select class="custom-select" name="Category" style="width: 100%">
                                                <?php foreach($getCategories as $category){ ?>
                                                <option value="<?php echo $category['IdCategory']; ?>"
                                                    <?php echo($getSingProduct['CategoryId'] == $category['IdCategory']) ? 'selected' : ''; ?>>
                                                    <?php echo $category['CategoryName']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Link</label>
                                            <input class="form-control" type="text" name="Link"
                                                value="<?php echo $getSingProduct['Link']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="title">Product Image</label>
                                            <img src="<?php echo (!empty($getSingProduct['Image'])) ? '../../'.$getSingProduct['Image'] : 'view\images\no-image.jpg'; ?>"
                                                id="preview" class="img-thumbnail"
                                                style="width:100%; height: 180px; object-fit: cover">
                                            <div class="">
                                                <input type="file" class="form-control form-control-sm text-truncate"
                                                    id="ProductImage" name="ProductImage">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="ProductStatus"
                                                name="ProductStatus">
                                                <option value="0"
                                                    <?php echo ($getSingProduct['ProductStatus'] == '0') ? 'selected' : ''; ?>>
                                                    Active</option>
                                                <option value="1"
                                                    <?php echo ($getSingProduct['ProductStatus'] == '1') ? 'selected' : ''; ?>>
                                                    Inactive</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col">
                                        <h3>Product Gallery</h3>
                                        <div class="table-responsive dt-responsive">
                                            <table id="bannerTable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="min-width:150px" class="text-left">Image</th>
                                                        <th class="text-center">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="image_wrap">
                                                    <?php foreach(getProductImages($_GET['productId']) as $image){ ?>
                                                    <tr>
                                                        <td class="text-left">
                                                            <img src="../../<?php echo $image['Path']; ?>" style="width: 110px; height: 80px; object-fit: contain">
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="submit" name="deleteProductImage" value="<?php echo $image['IdProductImage']; ?>"
                                                                class="btn btn-danger"><i
                                                                    class="icofont icofont-trash tooltip-item">
                                                                </i></button>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="1"></td>
                                                        <td class="text-center">
                                                            <a href="#"
                                                                class="btn waves-effect waves-dark btn-success btn-icon add_image_option"><i
                                                                    class="icofont icofont-plus">
                                                                </i></a>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
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

    <?php include 'view/common/toast_messages.php'; ?>
    <script>
    CKEDITOR.replace('Content', {
        filebrowserUploadUrl: 'assets/ckeditor/ck_upload.php',
        filebrowserUploadMethod: 'form',
        height: '220px',
    });

    $(document).ready(function() {
        $('.selectpicker').select2();
    });

    $('#ProductImage').change(function(e) {
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

        var max_fields_image = 7; //maximum input boxes allowed
        var wrapper_image = $(".image_wrap"); //Fields wrapper_image
        var add_button_image = $(".add_image_option"); //Add button ID


        var x3 = 1; //initlal text box count
        $(add_button_image).click(function(e) { //on add input button click
            e.preventDefault();
            if (x3 < max_fields_image) { //max input box allowed
                x3++; //text box increment
                $(wrapper_image).append(
                    '<tr><td><input type="file" name="images[]" class="form-control form-control-sm mt-4"></td><td class="text-center"><a href="#" class="col-auto remove_field btn btn-danger mt-4"><i class="icofont icofont-trash"></i></a></td></tr>'
                ); //add input box
            } else {
                toastr.error("Only 6 file are allowed");
            }
        });

        $(wrapper_image).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).closest("tr").remove();
            x3--;
        })
    });
    </script>

</body>

</html>