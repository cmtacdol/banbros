<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add New Webinar";
$_SESSION['PAGE_NAV_TITLE'] = "Add New Webinar";
include 'view/common/header.php';
include 'controller/webinarController.php';

if(isset($_POST['updateWebinar'])){
    updateWebinar($_POST, $_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$parentMenu = getSinglePost(3);
$webinar = getSingleWebinar($_GET['webinar_id']);
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
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="updateWebinar"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="webinar.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <input type="hidden" name="webinar_id" value="<?php echo $_GET['webinar_id']; ?>">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input class="form-control" type="text" name="Title" value="<?php echo $webinar['Title']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" id="Content" name="Description"><?php echo $webinar['Description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">

                                        <div class="form-group">
                                            <label class="w-100">Intro Image</label>
                                            <img src="<?php echo (isset($webinar['Image']) && !empty($webinar['Image'])) ? '../../'.$webinar['Image'] : 'view\images\no-image.jpg'; ?>" id="preview" class="img-thumbnail"
                                                style="width:100%; height: 150px; object-fit: cover">
                                            <div class="">
                                                <input type="file" class="form-control form-control-sm text-truncate"
                                                    id="Image" name="Image">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Date</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="background: rgba(60, 60, 60, 0.5);"><i
                                                            class="feather icon-calendar"></i></span>
                                                </div>
                                                <input type="date" name="DateWebinar" class="form-control"
                                                    placeholder="Shareable Link" aria-label="Shareable Link"
                                                    aria-describedby="basic-addon1" value="<?php echo $webinar['Date']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="background: rgba(60, 60, 60, 0.5);"><i
                                                            class="feather icon-clock"></i></span>
                                                </div>
                                                <input type="time" name="TimeWebinar" class="form-control"
                                                    placeholder="Shareable Link" aria-label="Shareable Link"
                                                    aria-describedby="basic-addon1" value="<?php echo date('G:i', strtotime($webinar['Time'])); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Venue</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" style="background: rgba(60, 60, 60, 0.5);"><i
                                                            class="feather icon-map-pin"></i></span>
                                                </div>
                                                <input type="text" name="VenueWebinar" class="form-control" aria-label="Shareable Link"
                                                    aria-describedby="basic-addon1" value="<?php echo $webinar['Venue']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0" <?php echo ($webinar['Status'] == '0') ? 'selected' : ''; ?>>Upcoming</option>
                                                <option value="1" <?php echo ($webinar['Status'] == '1') ? 'selected' : ''; ?>>Ongoing</option>
                                                <option value="2" <?php echo ($webinar['Status'] == '2') ? 'selected' : ''; ?>>Completed</option>
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
        height: '540px',
    });

    $('#Image').change(function(e) {
        var fileName = e.target.files[0].name;
        // $("#ImportImage").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
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