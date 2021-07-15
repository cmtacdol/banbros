<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Articles";
$_SESSION['PAGE_NAV_TITLE'] = "Articles";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';


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
                    <div class="row">
                        <div class="col-lg">
                            <a href="article_new.php" class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New Article</a>
                            <!-- <button class="btn btn-primary py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-edit-alt"></i> Edit</button>
                            <button class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-check-circled"></i> Publish</button>
                            <button class="btn btn-secondary py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-close-circled"></i> Unpublish</button>
                            <button class="btn btn-default py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-archive"></i> Archive</button>
                            <button class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-trash"></i> Trash</button> -->
                        </div>

                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Articles</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="article_list" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Title</th>
                                            <th class="text-center">Author</th>
                                            <th class="text-center">Date Created</th>
                                            <th class="text-center">Status</th>
                                            <th style="min-width:150px" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="text-left">asd</td>
                                            <td class="text-center">asd </td>
                                            <td class="text-center">asd</td>
                                            <td class="text-center">asd</td>
                                            <td class="text-center">
                                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <a href="article_modify.php?article_id=<?php echo $article['IdArticle']; ?>"
                                                        class="btn waves-effect waves-dark btn-success btn-outline-success btn-icon"><i
                                                            class="icofont icofont-edit tooltip-item">
                                                        </i></a>
                                                    <button name="IdArticle" type="submit"
                                                        value="<?php echo $article['IdArticle']; ?>"
                                                        class="btn waves-effect waves-dark btn-danger btn-outline-danger btn-icon"><i
                                                            class="icofont icofont-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>



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