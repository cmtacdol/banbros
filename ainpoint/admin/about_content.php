<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "About Content";
$_SESSION['PAGE_NAV_TITLE'] = "About Content";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/aboutController.php';

$getcontent = getContent(2, $_GET['idTabContent']);
?>
<!-- THIS SECTION IS FOR THE CSS FOR THIS PAGE ONLY -->

</head>
<style>
td {
    max-width: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

td.column_b {
    width: 30%;
}
</style>

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
                    <?php if($_SESSION['admin_details']['PermissionId'] == 1){ ?>
                    <div class="row">
                        <div class="col-lg">
                            <a href="about_content_add.php?idTabContent=<?php echo $_GET['idTabContent']; ?>"
                                class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Content</a>
                        </div>

                    </div>
                    <?php } ?>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Content</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getcontent as $content){ ?>
                                        <tr>
                                            <td><?php echo $content['Title']; ?></td>
                                            <td>
                                                <?php echo $content['Description']; ?>
                                            </td>
                                            <td><?php echo ($content['Status'] == '0') ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>'; ?>
                                            </td>
                                            <td class="text-right">
                                                <form method="post">
                                                    <a href="about_content_edit.php?idTabContent=<?php echo $content['ParentId']; ?>&&id_content=<?php echo $content['IdContent']; ?>"
                                                        class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                            class="icofont icofont-edit tooltip-item">
                                                        </i></a>
                                                </form>
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