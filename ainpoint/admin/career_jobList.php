<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Job List";
$_SESSION['PAGE_NAV_TITLE'] = "Job List";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/careerController.php';

if(isset($_POST['SaveCareer'])){
    saveCareer($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$getCareerJobs = getAllJobDescription($_GET['id_career']);

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
                            <a href="career_jobList_add.php?id_career=<?php echo $_GET['id_career']; ?>"
                                class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Job Description</a>
                        </div>

                    </div>
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
                                            <th class="text-left">Status</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getCareerJobs as $jobs){ ?>
                                        <tr>
                                            <td><?php echo $jobs['Title']; ?></td>
                                            <td class="text-center"><?php echo ($jobs['Status'] == '0') ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>'; ?></td>
                                            <td class="text-center">

                                                <a href="career_jobList_edit.php?careerSection_id=<?php echo $jobs['IdCareerSection']; ?>&&id_career=<?php echo $_GET['id_career']; ?>"
                                                    class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                        class="icofont icofont-edit tooltip-item">
                                                    </i></a>


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
</body>

</html>