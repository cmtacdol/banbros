<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Edit Content";
$_SESSION['PAGE_NAV_TITLE'] = "Edit Content";
include 'view/common/header.php';
include 'controller/resellerController.php';

if(isset($_POST['updateContent'])){
    updateContent($_POST);
    saveImages($_POST, $_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

if(isset($_POST['deleteResellersImage'])){
    saveImages($_POST, $_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$parentMenu = getMenu(9);
$content = getResellerContent($_GET['id_content']);

$getImages = getImages($_GET['id_content']);

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
                                <button type="submit" name="updateContent"
                                    class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Update</button>
                                <a href="reseller.php"
                                    class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
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
                                            <input class="form-control" type="text" name="Title"
                                                value="<?php echo $content['Title']; ?>">
                                        </div>

                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Description</label>
                                            <textarea class="form-control" id="Content"
                                                name="Description"><?php echo $content['Description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">

                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0"
                                                    <?php echo ($content['Status'] == '0') ? 'selected' : ''; ?>>Active
                                                </option>
                                                <option value="1"
                                                    <?php echo ($content['Status'] == '1') ? 'selected' : ''; ?>>
                                                    Inactive</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr>

                        <div class="card comp-card mt-3">
                            <div class="card-body p-5">
                                <div class="table-responsive dt-responsive">
                                    <table id="bannerTable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th style="min-width:150px" class="text-left">Image</th>
                                                <th style="min-width:150px" class="text-left">Link</th>
                                                <th class="text-center">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody class="image_wrap">
                                            <?php foreach($getImages as $images){ ?>
                                            <tr>
                                                <td>
                                                    <img src="../../<?php echo $images['Path']; ?>" style="width: 200px; height: 100px; object-fit:contain">
                                                </td>
                                                <td><?php echo $images['Link']; ?></td>
                                                <td>
                                                    <button type="submit" name="deleteResellersImage" class="btn btn-danger btn-icon" value="<?php echo $images['IdResellers']; ?>"><i class="icofont icofont-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td class="text-center">
                                                    <a href="#"
                                                        class="btn waves-effect waves-dark btn-success btn-icon add_image_option"><i
                                                            class="icofont icofont-plus">
                                                        </i></a>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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

    $(document).ready(function() {

        var max_fields_image = 9; //maximum input boxes allowed
        var wrapper_image = $(".image_wrap"); //Fields wrapper_image
        var add_button_image = $(".add_image_option"); //Add button ID


        var x3 = 1; //initlal text box count
        $(add_button_image).click(function(e) { //on add input button click
            e.preventDefault();
            if (x3 < max_fields_image) { //max input box allowed
                x3++; //text box increment
                $(wrapper_image).append(
                    '<tr><td><input type="file" name="images[]" class="form-control form-control-sm mt-4" required></td><td><input type="text" name="link[]" class="form-control form-control-sm mt-4"></td><td><a href="#" class="col-auto remove_field btn btn-danger mt-4"><i class="icofont icofont-trash"></i></a></td></tr>'
                ); //add input box
            }
        });

        $(wrapper_image).on("click", ".remove_field", function(e) { //user click on remove text
            e.preventDefault();
            $(this).closest("tr").remove();
            x3--;
        })
    });
    </script>

    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>