<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Brand List";
$_SESSION['PAGE_NAV_TITLE'] = "Brand List";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/brandController.php';

if(isset($_POST['deleteBrand'])){
    deleteBrand($_POST['deleteBrand']);
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

                <div class="page-header card">
                    <div class="row">
                        <div class="col-lg">
                            <a href="brand_add.php" class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Brand</a>
                        </div>

                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Brand List</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="ctegory" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Image</th>
                                            <th class="text-center">Description</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Date Created</th>
                                            <th style="min-width:50px" class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getBrand as $brand){ ?>
                                        <tr>
                                            <td class="text-left">
                                                <img src="../../<?php echo $brand['Logo']; ?>"
                                                    style="width: 150px; height: 100px; object-fit: contain">
                                            </td>
                                            <td class="text-center">
                                                <?php echo $brand['Description']; ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo ($brand['Status'] == '0') ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>'; ?>
                                            </td>
                                            <td class="text-center"><?php echo $brand['Date_added']; ?></td>
                                            <td class="text-center">
                                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <a href="brand_edit.php?brand_id=<?php echo $brand['IdBrand']; ?>"
                                                        class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                            class="icofont icofont-edit tooltip-item">
                                                        </i></a>
                                                    <button name="deleteBrand" type="submit"
                                                        value="<?php echo $brand['IdBrand']; ?>"
                                                        class="btn waves-effect waves-dark btn-danger btn-outline-danger btn-icon"><i
                                                            class="icofont icofont-trash"></i></button>
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