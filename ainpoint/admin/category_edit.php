<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edit Category";
$_SESSION['PAGE_NAV_TITLE'] = "Edit Category";
include 'view/common/header.php';
include 'controller/categoryController.php';

if(isset($_POST['updateCategory'])){
    updateCategory($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$category = getCategoriesById($_GET['categoryId']);
$getBrand = getBrand();

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
                <form id="categoryForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>?categoryId=<?php echo $_GET['categoryId']; ?>">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="updateCategory"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="category.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <input type="hidden" name="CategoryId" value="<?php echo $_GET['categoryId']; ?>">
                                    <div class="col-lg">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input class="form-control" name="CategoryName" type="text" value="<?php echo $category['CategoryName']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="title">Parent</label>
                                            <select class="custom-select form-control-md" name="Parent">
                                                <?php foreach($getBrand as $brand){ ?>
                                                <option value="<?php echo $brand['IdBrand']; ?>" <?php echo ($category['BrandId'] == $brand['IdBrand']) ? 'selected' : ''; ?>>
                                                    <?php echo $brand['BrandName']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="CategoryStatus" name="CategoryStatus">
                                                <option value="0" <?php echo ($category['CategoryStatus'] == '0') ? 'selected' : ''; ?>>Active</option>
                                                <option value="1" <?php echo ($category['CategoryStatus'] == '1') ? 'selected' : ''; ?>>Inactive</option>
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

    <?php include 'view/common/toast_messages.php'; ?>

</body>

</html>