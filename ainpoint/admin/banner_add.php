<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add Banner";
$_SESSION['PAGE_NAV_TITLE'] = "Add Banner";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/banner.php';

if(isset($_POST['saveBanner'])){
    saveBanner($_POST,$_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

if(isset($_POST['deleteBanner'])){
    deleteBanner($_POST['deleteBanner']);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$banner = getBannerByMenu($_GET['IdMenu']);

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

                <form method="post" enctype="multipart/form-data">
                    <div class="page-header card">
                        <?php if($_SESSION['admin_details']['PermissionId'] == 1){ ?>
                        <div class="row">
                            <div class="col-lg">
                                <button type="submit" name="saveBanner"
                                    class="btn btn-primary py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Save</button>
                                <a href="banner.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="card mt-3">
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="bannerTable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th style="min-width:150px" class="text-left">Image</th>
                                                <th style="min-width:150px" class="text-left">Title</th>
                                                <th style="min-width:150px" class="text-left">Link</th>
                                                <th class="text-center">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody class="image_wrap">

                                            <?php if(isset($banner) && !empty($banner)){ ?>
                                            <?php foreach($banner as $getbanner){ ?>
                                            <tr>
                                                <td>
                                                    <input type="hidden" name="idBanner[]"
                                                        class="form-control form-control-sm mt-4"
                                                        value="<?php echo $getbanner['IdBanner']; ?>">
                                                    <img src="../../<?php echo $getbanner['Image']; ?>"
                                                        style="width: 300px; height: 100px; object-fit: contain">
                                                </td>
                                                <td>

                                                    <?php echo $getbanner['Title']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $getbanner['Link']; ?>
                                                </td>
                                                <td>
                                                    <button type="submit" name="deleteBanner"
                                                        value="<?php echo $getbanner['IdBanner']; ?>"
                                                        class="col-auto btn btn-danger mt-4"><i
                                                            class="icofont icofont-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            <?php } ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td class="text-center">
                                                    <a href="#"
                                                        class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon add_image_option"><i
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
    <?php include 'view/common/toast_messages.php'; ?>
    <script>
    $(document).ready(function() {

        var max_fields_image = 10; //maximum input boxes allowed
        var wrapper_image = $(".image_wrap"); //Fields wrapper_image
        var add_button_image = $(".add_image_option"); //Add button ID


        var x3 = 1; //initlal text box count
        $(add_button_image).click(function(e) { //on add input button click
            e.preventDefault();
            if (x3 < max_fields_image) { //max input box allowed
                x3++; //text box increment
                $(wrapper_image).append(
                    '<tr><td><input type="file" name="images[]" class="form-control form-control-sm mt-4"></td><td><input type="text" name="title[]" class="form-control form-control-sm mt-4"></td><td><input type="text" name="links[]" class="form-control form-control-sm mt-4"></td><td><a href="#" class="col-auto remove_field btn btn-danger mt-4"><i class="icofont icofont-trash"></i></a></td></tr>'
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

</body>

</html>