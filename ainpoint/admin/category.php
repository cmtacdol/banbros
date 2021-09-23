<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Category";
$_SESSION['PAGE_NAV_TITLE'] = "Category";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/categoryController.php';

if(isset($_POST['deleteCategory'])){
    deleteCategory($_POST['deleteCategory']);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

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

                <div class="page-header card">
                    <?php if($_SESSION['admin_details']['PermissionId'] == 1){ ?>
                    <div class="row">
                        <div class="col-lg">
                            <a href="category_add.php"
                                class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Category</a>
                        </div>

                    </div>
                    <?php } ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Articles</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="ctegory" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Category Name</th>
                                            <th class="text-center">Brand Name</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getCategories as $category){ ?>
                                        <tr>
                                            <td class="text-left"><?php echo $category['CategoryName']; ?></td>
                                            <td class="text-center">
                                                <?php echo (getBrandbyId($category['BrandId']) == true) ? getBrandbyId($category['BrandId'])['BrandName'] : ""; ?>
                                                -
                                                <?php echo getMenuById(getBrandbyId($category['BrandId'])['NavId'])['NavName']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo ($category['CategoryStatus'] == '0') ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>'; ?>
                                            </td>
                                            <td class="text-center">
                                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <a href="category_edit.php?categoryId=<?php echo $category['IdCategory']; ?>"
                                                        class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                            class="icofont icofont-edit tooltip-item">
                                                        </i></a>
                                                    <?php if($_SESSION['admin_details']['PermissionId'] == 1){ ?>
                                                    <button name="deleteCategory" type="submit"
                                                        value="<?php echo $category['IdCategory']; ?>"
                                                        class="btn waves-effect waves-dark btn-danger btn-outline-danger btn-icon"><i
                                                            class="icofont icofont-trash"></i></button>
                                                    <?php } ?>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    </div>
    </div>



    <?php include 'view/common/scripts.php'; ?>
    <?php include 'view/common/toast_messages.php'; ?>

    <script>
    $('#ctegory').DataTable({
        "order": [
            [1, "desc"]
        ]
    });
    </script>

</body>

</html>