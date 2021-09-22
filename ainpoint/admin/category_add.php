<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add New Category";
$_SESSION['PAGE_NAV_TITLE'] = "Add New Category";
include 'view/common/header.php';
include 'controller/categoryController.php';

if(isset($_POST['saveCategory'])){
    saveCategory($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

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
                <form id="newArticleForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="saveCategory"
                                    class="btn btn-primary py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Save</button>
                                <a href="category.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input class="form-control" name="CategoryName" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group"> 
                                            <label for="title">Parent</label>
                                            <!-- <select class="custom-select form-control-md" name="Parent">
                                                <?php foreach($getBrand as $brand){ ?>
                                                <option value="<?php echo $brand['IdBrand']; ?>">
                                                    <?php echo $brand['BrandName']; ?></option>
                                                <?php } ?>
                                            </select> -->
                                            <select class="selectpicker" name="Parent[]" multiple="multiple"
                                                style="width: 100%"> 
                                                <?php foreach($getBrand as $brand){ ?>
                                                <option value="<?php echo $brand['IdBrand']; ?>">
                                                    <?php echo $brand['BrandName']; ?> - <?php echo getMenuById($brand['NavId'])['NavName'] ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="CategoryStatus" name="CategoryStatus">
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

    <?php include 'view/common/toast_messages.php'; ?>
    <script>
        
    $(document).ready(function() {
        $('.selectpicker').select2();
    });
    </script>

</body>

</html>