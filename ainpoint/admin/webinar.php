<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Webinar";
$_SESSION['PAGE_NAV_TITLE'] = "Webinar";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/webinarController.php';

if(isset($_POST['deleteWebinar'])){
    deleteWebinar($_POST['deleteWebinar']);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$getWebinar = getAllWebinar();
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
                            <a href="webinar_add.php" class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Webinar</a>
                        </div>

                    </div>
                    <?php } ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Webinar</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="ctegory" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Image</th>
                                            <th class="text-left">Title</th>
                                            <th class="text-left">Author</th>
                                            <th class="text-left">Date Added</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getWebinar as $webinar){ ?>
                                        <tr>
                                            <td>
                                                <img src="../../<?php echo $webinar['Image']; ?>"
                                                    style="width: 150px; height: 80px; object-fit: contain">
                                            </td>
                                            <td><?php echo $webinar['Title']; ?></td>
                                            <td><?php echo $webinar['Author']; ?></td>
                                            <td><?php echo $webinar['Date_added']; ?></td>
                                            <td class="text-center">
                                                <?php 
                                                if($webinar['Status'] == '0'){
                                                    echo '<span class="badge badge-danger">Upcoming</span>';
                                                 } 
                                                 else if($webinar['Status'] == '1'){
                                                    echo '<span class="badge badge-warning">Lorem</span>';
                                                 }
                                                 else if($webinar['Status'] == '2'){
                                                    echo '<span class="badge badge-warning">Lorem</span>';
                                                 }
                                                 else if($webinar['Status'] == '3'){
                                                    echo '<span class="badge badge-warning">Lorem</span>';
                                                 }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <a href="webinar_edit.php?webinar_id=<?php echo $webinar['IdWebinar']; ?>"
                                                        class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                            class="icofont icofont-edit tooltip-item">
                                                        </i></a>
                                                    <?php if($_SESSION['admin_details']['PermissionId'] == 1){ ?>
                                                    <button name="deleteWebinar" type="submit"
                                                        value="<?php echo $webinar['IdWebinar']; ?>"
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