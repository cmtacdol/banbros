<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edit Blog";
$_SESSION['PAGE_NAV_TITLE'] = "Edit Blog";
include 'view/common/header.php';
include 'controller/newsController.php';

if(isset($_POST['updateBlog'])){
    updateBlog($_POST, $_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$parentMenu = getSinglePost(1);
$blog = getSingleBlogPost($_GET['blog_id']);
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
                                <button type="submit" name="updateBlog"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="blog.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                            <input class="form-control" type="hidden" name="blog_id" value="<?php echo $_GET['blog_id']; ?>">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input class="form-control" type="text" name="Title" value="<?php echo $blog['Title']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" id="Content" name="Description"><?php echo $blog['Description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">&nbsp;</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="feather icon-facebook"></i></span>
                                                </div>
                                                <input type="text" name="link1" class="form-control" placeholder="Shareable Link"
                                                    aria-label="Shareable Link" aria-describedby="basic-addon1" value="<?php echo $blog['link_1']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="feather icon-twitter"></i></span>
                                                </div>
                                                <input type="text" name="link2" class="form-control" placeholder="Shareable Link"
                                                    aria-label="Shareable Link" aria-describedby="basic-addon1" value="<?php echo $blog['link_2']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="feather icon-instagram"></i></span>
                                                </div>
                                                <input type="text" name="link3" class="form-control" placeholder="Shareable Link"
                                                    aria-label="Shareable Link" aria-describedby="basic-addon1" value="<?php echo $blog['link_3']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="w-100">Intro Image</label>
                                            <img src="<?php echo (isset($blog['Image']) && !empty($blog['Image'])) ? '../../'.$blog['Image'] : "view\images\no-image.jpg"; ?>" id="preview" class="img-thumbnail"
                                                style="width:100%; height: 150px; object-fit: cover">
                                            <div class="">
                                                <input type="file" class="form-control form-control-sm text-truncate"
                                                    id="Image" name="Image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0" <?php echo ($blog['Status'] == "0") ? 'selected' : ''; ?>>Active</option>
                                                <option value="1" <?php echo ($blog['Status'] == "1") ? 'selected' : ''; ?>>Inactive</option>
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