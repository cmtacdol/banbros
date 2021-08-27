<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Executives";
$_SESSION['PAGE_NAV_TITLE'] = "Executives";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/homeController.php';

if(isset($_POST['deleteCategory'])){
    deleteCategory($_POST['deleteCategory']);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$getAllExecutive = getAllExecutives();
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
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Executives</h5>
                        </div>
                        <div class="card-block">
                            <div class="row">

                            <?php foreach($getAllExecutive as $executives){ ?>

                                <div class="col-lg-4">
                                    <div class="card" style="position: relative">
                                        <div style="position: absolute; right: -12px; top: -12px">
                                            <a href="home_executives_edit.php?executive_id=<?php echo $executives['IdExecutives']; ?>" class="btn btn-warning"
                                                value="<?php echo $executives['IdFeturedImages']; ?>"><i
                                                    class="icofont icofont-pencil fa-2x"></i></a>
                                        </div>
                                        <div class="card-body text-center">
                                            <img src="../../<?php echo $executives['Image']; ?>" style="width:100%; height: 250px; object-fit: contain;">

                                            <h3 class="mt-4"><?php echo $executives['Name']; ?></h3>
                                            <p><?php echo $executives['Position']; ?></p>
                                            

                                            <?php echo ($executives['Status'] == '0') ? '<small class="badge badge-success">Active</small>' : '<small class="badge badge-danger">Inactive</small>'; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                            
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