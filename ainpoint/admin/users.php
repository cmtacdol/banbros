<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Users List";
$_SESSION['PAGE_NAV_TITLE'] = "Users List";
// include 'scripts/session_check.php'; 
include 'view/common/header.php';
include 'controller/usersController.php';

if(isset($_POST['deleteBlog'])){
    deleteBlog($_POST['deleteBlog']);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}
$getAllUser = getAllUsers();
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
                            <a href="users_add.php" class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                    class="icofont icofont-ui-add"></i> New User</a>
                        </div>

                    </div>
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>Blogs</h5>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive dt-responsive">
                                <table id="ctegory" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Profile</th>
                                            <th class="text-left">Role</th>
                                            <th class="text-left">Name</th>
                                            <th class="text-left">Username</th>
                                            <th class="text-left">Email</th>
                                            <th class="text-center">Date Added</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($getAllUser as $user){ ?>
                                        <tr>
                                            <td>
                                                <img src="../../<?php echo $user['Image']; ?>"
                                                    style="width: 75px; height: 75px; object-fit: cover; border-radius: 50%">
                                            </td>
                                            <td><?php echo getIdRoles($user['PermissionId'])['PermissionName']; ?></td>
                                            <td><?php echo $user['Name']; ?></td>
                                            <td><?php echo $user['Username']; ?></td>
                                            <td><?php echo $user['Email']; ?></td>
                                            <td><?php echo $user['Date_added']; ?></td>
                                            <td>
                                                <?php echo ($user['UserStatus'] == '0') ? '<span class="badge badge-success">Enabled</span>' : '<span class="badge badge-danger">Disabled</span>'; ?>
                                            </td>
                                            <td>
                                            <a href="users_edit.php?id_user=<?php echo $user['IdUsers']; ?>"
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