<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Career";
$_SESSION['PAGE_NAV_TITLE'] = "Career";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/careerController.php';

if(isset($_POST['SaveCareer'])){
    saveCareer($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

if(isset($_POST['UpdateCareer'])){
    updateCareer($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$getCareer = getCareer();

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

                <?php include 'view/common/modal.php'; ?>

                <div class="page-header card">
                    <?php if($_SESSION['admin_details']['PermissionId'] == 1){ ?>
                    <div class="row">
                        <div class="col-lg">
                            <a href="#Career" data-toggle="modal"
                                class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Tab</a>
                        </div>

                    </div>
                    <?php } ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Tab List</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="ctegory" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Title</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getCareer as $careers){ ?>
                                        <tr>
                                            <td><?php echo $careers['Title']; ?></td>
                                            <td class="text-center">
                                                <a href="#EditCareer" id="editModal" data-toggle="modal"
                                                    data-id="<?php echo $careers['IdCareer']; ?>"
                                                    data-title="<?php echo $careers['Title']; ?>"
                                                    data-description="<?php echo $careers['Description']; ?>"
                                                    class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                        class="icofont icofont-edit tooltip-item">
                                                    </i></a>

                                                <?php if($_SESSION['admin_details']['PermissionId'] == 1){ ?>
                                                <a href="career_images.php?id_career=<?php echo $careers['IdCareer']; ?>"
                                                    class="btn waves-effect waves-dark btn-info btn-outline-info btn-icon"><i
                                                        class="icofont icofont-image fa-lg tooltip-item">
                                                    </i></a>

                                                <a href="career_jobList.php?id_career=<?php echo $careers['IdCareer']; ?>"
                                                    class="btn waves-effect waves-dark btn-info btn-outline-info btn-icon"><i
                                                        class="icofont icofont-list fa-lg tooltip-item">
                                                    </i></a>
                                                <?php } ?>
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
    $(document).on("click", "#editModal", function() {
        $(".modal-body #id_career").val($(this).data('id'));
        $(".modal-body #Title").val($(this).data('title'));
        $(".modal-body #Description").val($(this).data('description'));
    });
    </script>
</body>

</html>