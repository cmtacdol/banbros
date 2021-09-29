<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Partner";
$_SESSION['PAGE_NAV_TITLE'] = "Partner";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/partnerController.php';

$getPartners = getPartners();

?>
<!-- THIS SECTION IS FOR THE CSS FOR THIS PAGE ONLY -->
<style>
.trunc {
    max-width: 200px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>

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
                            <a href="post_add.php" class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Post</a>
                        </div>

                    </div> -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Partner List</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="ctegory" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Business Name</th>
                                            <th class="text-left">Tax Identification</th>
                                            <th class="text-center">Address</th>
                                            <th class="text-center">Telephone No/s.</th>
                                            <th class="text-center">Email Address</th>
                                            <th style="min-width:50px" class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getPartners as $partner){ ?>
                                        <tr>
                                            <td><?php echo $partner['GBusinessName']; ?></td>
                                            <td><?php echo $partner['GTaxNo']; ?></td>
                                            <td><?php echo $partner['GAddress']; ?></td>
                                            <td><?php echo $partner['GTelephoneNo']; ?></td>
                                            <td><?php echo $partner['GEmailAddress']; ?></td>
                                            <td>
                                                <a href="partners_details.php?business_partner_id=<?php echo $partner['IdBusinessPartner']; ?>"
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
    $('#ctegory').DataTable({
        "order": [
            [1, "desc"]
        ]
    });
    </script>

</body>

</html>