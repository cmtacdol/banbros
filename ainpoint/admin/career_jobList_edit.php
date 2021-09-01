<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edit Jobs";
$_SESSION['PAGE_NAV_TITLE'] = "Edit Jobs";
include 'view/common/header.php';
include 'controller/careerController.php';

if(isset($_POST['updateJobs'])){
    updateJobDescription($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$careerJobs = getAllJobDescriptionById($_GET['careerSection_id']);

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
                <form id="newArticleForm" method="post" enctype="multipart/form-data">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <button type="submit" name="updateJobs"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="career_jobList.php?id_career=<?php echo $_GET['id_career']; ?>"
                                    class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input class="form-control" type="text" name="Title" value="<?php echo $careerJobs['Title']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" id="Content" name="Description"><?php echo $careerJobs['Description']; ?></textarea>
                                        </div>

                                    </div>
                                    <div class="col-lg-3">

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Apply Now Link</label>
                                            <input class="form-control" type="text" name="ApplyNowLink" value="<?php echo $careerJobs['Link']; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="feather icon-facebook"></i></span>
                                                </div>
                                                <input type="text" name="link1" class="form-control"
                                                    placeholder="Shareable Link" aria-label="Shareable Link"
                                                    aria-describedby="basic-addon1" value="<?php echo $careerJobs['ShareLink1']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="feather icon-twitter"></i></span>
                                                </div>
                                                <input type="text" name="link2" class="form-control"
                                                    placeholder="Shareable Link" aria-label="Shareable Link"
                                                    aria-describedby="basic-addon1" value="<?php echo $careerJobs['ShareLink2']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="feather icon-instagram"></i></span>
                                                </div>
                                                <input type="text" name="link3" class="form-control"
                                                    placeholder="Shareable Link" aria-label="Shareable Link"
                                                    aria-describedby="basic-addon1" value="<?php echo $careerJobs['ShareLink3']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0" <?php echo ($careerJobs['Status'] == '0') ? 'selected' : ''; ?>>Active</option>
                                                <option value="1" <?php echo ($careerJobs['Status'] == '1') ? 'selected' : ''; ?>>Inactive</option>
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
    CKEDITOR.replace('Content', {
        filebrowserUploadUrl: 'assets/ckeditor/ck_upload.php',
        filebrowserUploadMethod: 'form',
        height: '350px',
    });


    $(document).ready(function() {
        $('.selectpicker').select2();
    });
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>