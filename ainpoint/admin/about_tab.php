<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "About Tab List";
$_SESSION['PAGE_NAV_TITLE'] = "About Tab List";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/aboutController.php';

if(isset($_POST['SaveContents'])){
    saveTab($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

if(isset($_POST['UpdateTabContents'])){
    updateTab($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}
$tabContents = getTabContent();

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

                <?php include 'view/common/modal.php'; ?>

                <div class="page-header card">
                    <div class="row">
                        <div class="col-lg">
                            <a href="#TabContent" data-toggle="modal"
                                class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Tab</a>
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
                                            <th class="text-left">Tab Title</th>
                                            <th class="text-center">Body Header</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($tabContents as $tabs){ ?>
                                        <tr>
                                            <td><?php echo $tabs['TabTitle']; ?></td>
                                            <td><?php echo $tabs['BodyHeader']; ?></td>
                                            <td class="text-center">
                                                <?php echo ($tabs['Status'] == '0') ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>'; ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="#EditTabContent" id="editTabs" data-toggle="modal" 
                                                    data-id="<?php echo $tabs['IdContentTab']; ?>"
                                                    data-tabtitle="<?php echo $tabs['TabTitle']; ?>"
                                                    data-bodyheader="<?php echo $tabs['BodyHeader']; ?>"
                                                    data-status="<?php echo $tabs['Status']; ?>"
                                                    class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                        class="icofont icofont-edit tooltip-item">
                                                    </i></a>

                                                <a href="about_content.php?idTabContent=<?php echo $tabs['IdContentTab']; ?>"
                                                    class="btn waves-effect waves-dark btn-info btn-outline-info btn-icon"><i
                                                        class="icofont icofont-eye fa-lg tooltip-item">
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
    $(document).on("click", "#editTabs", function() {
        $(".modal-body #id_tab").val($(this).data('id'));
        $(".modal-body #TabTitle").val($(this).data('tabtitle'));
        $(".modal-body #BodyHeader").val($(this).data('bodyheader'));
        $(".modal-body #Status").val($(this).data('status'));
    });
    </script>
</body>

</html>