<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Content";
$_SESSION['PAGE_NAV_TITLE'] = "Content";
include 'view/common/header.php';
include 'controller/resellerController.php';

if(isset($_POST['saveContent'])){
    saveContent($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$parentMenu = getMenu(9);
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
                                <button type="submit" name="saveContent"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Save</button>
                                <a href="home_content.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <input type="hidden" name="id_content">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input class="form-control" type="text" name="Title">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" id="Content" name="Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="title">Parent</label>
                                            <select class="custom-select" name="Parent" id="Parent" style="width: 100%">
                                                <?php foreach($parentMenu as $menu){ ?>
                                                <option value="<?php echo $menu['IdNavMenu']; ?>">
                                                    <?php echo $menu['NavName']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
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
        height: '240px',
    });

    $('#Parent').attr("style", "pointer-events: none;");
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>