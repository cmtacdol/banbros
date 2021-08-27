<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add New Brand";
$_SESSION['PAGE_NAV_TITLE'] = "Add New Brand";
include 'view/common/header.php';
include 'controller/homeController.php';

if(isset($_POST['updateExecutives'])){
    updateExecutives($_POST, $_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$executives = getExecutivesById($_GET['executive_id']);

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
                                <button type="submit" name="updateExecutives"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="home_executives.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>
                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <input type="hidden" name="executive_id" value="<?php echo $executives['IdExecutives']; ?>">
                                        <div class="form-group">
                                            <img src="../../<?php echo $executives['Image']; ?>" id="preview" class="img-thumbnail"
                                                style="width:100%; height: 450px; object-fit: contain">
                                            <div class="">
                                                <input type="file" class="form-control form-control-sm text-truncate"
                                                    id="LogoImage" name="LogoImage">
                                            </div>
                                        </div>
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input class="form-control" type="text" name="Name" value="<?php echo $executives['Name']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Position</label>
                                            <input class="form-control" type="text" name="Position" value="<?php echo $executives['Position']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">

                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0" <?php echo ($executives['Status'] == '0') ? 'selected' : ''; ?>>Active</option>
                                                <option value="1" <?php echo ($executives['Status'] == '1') ? 'selected' : ''; ?>>Inactive</option>
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
    $('#LogoImage').change(function(e) {
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