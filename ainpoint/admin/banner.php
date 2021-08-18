<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Banner";
$_SESSION['PAGE_NAV_TITLE'] = "Banner";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/banner.php';

$getmenu = getMenu(); 
$articlePost = getPost();

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
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Page Banner</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="article_list" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th style="min-width:150px" class="text-left">Pages</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getmenu as $menu){ ?>
                                        <tr>
                                            <td class="text-left"><?php echo $menu['NavName']; ?></td>
                                            <td class="text-center">
                                                <a href="banner_add.php?banner&IdMenu=<?php echo $menu['IdNavMenu']; ?>"
                                                    class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                        class="icofont icofont-pencil fa-lg tooltip-item">
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

                <hr>

                <div class="page-header card">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Article Banner</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th style="min-width:150px" class="text-left">Pages</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($articlePost as $post){ ?>
                                        <tr>
                                            <td class="text-left"><?php echo $post['Title']; ?></td>
                                            <td class="text-center">
                                                <a href="banner_post_add.php?banner&IdPost=<?php echo $post['IdNewsPost']; ?>"
                                                    class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                        class="icofont icofont-pencil fa-lg tooltip-item">
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

    <script>
    $('#article_list').DataTable({
        "order": [
            [1, "desc"]
        ]
    });
    </script>

</body>

</html>