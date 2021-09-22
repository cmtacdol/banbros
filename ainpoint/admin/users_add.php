<?php 
session_start();
$_SESSION['PAGE_TITLE'] = "Add New User";
$_SESSION['PAGE_NAV_TITLE'] = "Add New User";
include 'view/common/header.php';
include 'controller/usersController.php';

if(isset($_POST['saveUsers'])){
    saveUsers($_POST, $_FILES);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

$role = getRolePermission();
?>
<!-- THIS SECTION IS FOR THE CSS FOR THIS PAGE ONLY -->

</head>

<style>
.profile-pic {
    border-radius: 50%;
    height: 200px;
    width: 200px;
    box-shadow: 0 0 5px 1px #00000052;
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    vertical-align: middle;
    text-align: center;
    color: transparent;
    transition: all .3s ease;
    text-decoration: none;
    cursor: pointer;
}

.profile-pic:hover {
    background-color: rgba(0, 0, 0, .5);
    z-index: 10000;
    color: #fff;
    transition: all .3s ease;
    text-decoration: none;
}

.profile-pic span {
    display: inline-block;
    padding-top: 5.5em;
    padding-bottom: 4.5em;
}

form input[type="file"] {
    display: none;
    cursor: pointer;
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
                <form id="newArticleForm" method="post" enctype="multipart/form-data">
                    <div class="page-header card">
                        <div class="row">
                            <div class="col-lg">
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>"
                                    class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-ui-add"></i> New</a>
                                <button type="submit" name="saveUsers"
                                    class="btn btn-primary py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-edit-alt"></i> Save</button>
                                <a href="users.php" class="btn btn-danger py-1 btn-round waves-effect waves-light"><i
                                        class="icofont icofont-error"></i> Close</a>

                            </div>
                        </div>
                        <div class="card comp-card mt-3">
                            <div class="row justify-content-center mt-5">
                                <div class="col-4 text-center">
                                    <label for="fileImage">
                                        <div class="profile-pic"
                                            style="background-image: url('view/images/no-image.jpg')">
                                            <span class="feather icon-camera"></span>
                                            <span>Change Profile</span>
                                        </div>
                                    </label>
                                    <input type="File" name="fileImage" id="fileImage">
                                </div>
                            </div>
                            <div class="card-body p-5">
                                <div class="row align-items-top">
                                    <div class="col-lg-6">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input class="form-control" type="text" name="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input class="form-control" type="text" name="Username" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input class="form-control" type="email" name="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group scroll">
                                            <label for="exampleInputEmail1">Password</label>
                                            <input class="form-control" type="password" name="Password" id="Password"
                                                required>
                                            <input type="checkbox" id="checkbox" onclick="showPassword()"><label
                                                for="checkbox">&nbsp; Show Password</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select class="form-control form-control-sm" id="Status" name="Status">
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select class="form-control form-control-sm" id="RolePermission"
                                                name="RolePermission">
                                                <?php foreach($role as $permission){ ?>
                                                <option value="<?php echo $permission['IdPermission']; ?>">
                                                    <?php echo $permission['PermissionName']; ?></option>
                                                <?php } ?>
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

    <script src="assets/ckeditor/ckeditor.js"></script>
    <script src="assets/ckeditor/config.js"></script>

    <?php include 'view/common/toast_messages.php'; ?>

    <script>
    $('#fileImage').change(function(e) {
        var fileName = e.target.files[0].name;
        // $("#ImportImage").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            // document.getElementByClass("profile-pic").css = e.target.result;
            $(".profile-pic").css("background-image", "url(" + e.target.result + ")");
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    function showPassword() {
        var x = document.getElementById("Password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>

</body>

</html>