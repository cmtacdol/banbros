<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Reseller";
$_SESSION['PAGE_NAV_TITLE'] = "Reseller";
$nav_id = 9;
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/resellerController.php';

if(isset($_POST['UpdateCareer'])){
    updateCareer($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$resellersContent = getReseller($nav_id);

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
                    <!-- <div class="row">
                        <div class="col-lg">
                            <a href="reseller_add.php"
                                class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Content</a>
                        </div>
                    </div> -->
                    <div class="card mt-3">
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
                                        <?php foreach($resellersContent as $reseller){ ?>
                                        <tr>
                                            <td><?php echo $reseller['Title']; ?></td>
                                            <td class="text-center">
                                                <a href="reseller_edit.php?id_content=<?php echo $reseller['IdContent']; ?>"
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
    <script>
    $(document).on("click", "#editModal", function() {
        $(".modal-body #id_career").val($(this).data('id'));
        $(".modal-body #Title").val($(this).data('title'));
        $(".modal-body #Description").val($(this).data('description'));
    });
    </script>
</body>

</html>