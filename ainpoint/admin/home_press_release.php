<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Press Release";
$_SESSION['PAGE_NAV_TITLE'] = "Press Release";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/homeController.php';

if(isset($_POST['deletePress'])){
    deletePressRelease($_POST['deletePress']);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$pullPress = pullPressRelease();

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
                            <a href="home_press_release_add.php"
                                class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Press Release</a>
                        </div>

                    </div>
                    <?php } ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Press List</h5>
                        </div>
                        <div class="card-block">
                            <form method="post">
                                <div class="row">
                                    <?php foreach($pullPress as $press){ ?>
                                    <div class="col-lg-4">
                                        <div class="card" style="position: relative">
                                            <div style="position: absolute; right: -12px; top: -12px">
                                                <button type="submit" name="deletePress" class="btn btn-danger"
                                                    value="<?php echo $press['IdPress']; ?>"><i
                                                        class="icofont icofont-trash fa-2x"></i></button>
                                            </div>
                                            <div class="card-body text-center">
                                                <img src="../../<?php echo $press['Image']; ?>"
                                                    style="width:100%; height: 250px; object-fit: contain;">

                                                <h3 class="mt-4" style="height: 80px"><?php echo $press['Title']; ?>
                                                </h3>

                                                <?php echo ($press['Status'] == '0') ? '<small class="badge badge-success">Active</small>' : '<small class="badge badge-danger">Inactive</small>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </form>
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