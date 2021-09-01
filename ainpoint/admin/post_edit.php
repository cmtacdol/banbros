<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edit Post";
$_SESSION['PAGE_NAV_TITLE'] = "Edit Post";
include 'view/common/header.php';
include 'controller/postController.php';

if(isset($_POST['updatePost'])){
    editPost($_POST, $_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$parentMenu = getMenu();
$post = getSinglePost($_GET['post_id']);

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
                                <button type="submit" name="updatePost"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="post.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-9">
                                        <input type="hidden" name="idnewspost" value="<?php echo $_GET['post_id']; ?>">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input class="form-control" type="text" name="Title"
                                                value="<?php echo $post['Title']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" name="Description"
                                                rows="13"><?php echo $post['Description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="title">Parent</label>
                                            <select class="custom-select" name="Parent" style="width: 100%">
                                                <?php foreach($parentMenu as $menu){ ?>
                                                <option value="<?php echo $menu['IdNavMenu']; ?>">
                                                    <?php echo $menu['NavName']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="w-100">Image</label>
                                            <img src="../../<?php echo (isset($post['Image'])) ? $post['Image'] : 'view\images\no-image.jpg'; ?>"
                                                id="preview" class="img-thumbnail"
                                                style="width:100%; height: 150px; object-fit: cover">
                                            <div class="">
                                                <input type="file" class="form-control form-control-sm text-truncate"
                                                    id="Image" name="Image">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0"
                                                    <?php echo ($post['PostStatus'] == '0') ? 'selected' : ''; ?>>Active
                                                </option>
                                                <option value="1"
                                                    <?php echo ($post['PostStatus'] == '1') ? 'selected' : ''; ?>>
                                                    Inactive</option>
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

    <?php include 'view/common/toast_messages.php'; ?>
    <script>
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
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>