<?php 
include 'admin/controller/usersController.php';
if(isset($_POST['btnPass'])){
    saveEmailForgotPass($_POST);
    echo '<script>window.history.replaceState( null, null, window.location.href );</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Reset Password | Ainpoint 2.0</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="colorlib" />

    <link rel="icon" href="assets/img/fav.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="admin/css/waves.min.css" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/feather.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/css/login.css">

    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/pages.css">
    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/toastr.min.css">
</head>

<body>

    <div class="green"></div>

    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="login-block">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <form method="post" class="md-float-material form-material">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <img src="assets/img/ainpoint_logo.jpg" style="width: 100%;">
                                        </div>
                                        <h5 class="text-left">Recover your password</h5>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="emailAccount" onkeyup="checkEmail(this.value)" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <p id="emailResult" class="text-danger text-center"></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="btnPass"
                                            class="btn bg-main btn-success btn-md btn-block waves-effect text-center m-b-20">Reset
                                            Password</button>
                                    </div>
                                </div>
                                <p class="f-w-600 text-left"> <a href="index.php">Back to Login.</a></p>
                                <div class="row">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </section>



    <script src="admin/assets/vendor/js/jquery.min.js"></script>
    <script src="admin/assets/vendor/js/jquery-ui.min.js"></script>
    <script src="admin/assets/vendor/js/popper.min.js"></script>
    <script src="admin/assets/vendor/js/bootstrap.min.js"></script>
    <script src="admin/assets/vendor/js/waves.min.js"></script>
    <script src="admin/assets/vendor/js/jquery.slimscroll.js"></script>
    <script src="admin/assets/vendor/js/modernizr.js"></script>
    <script src="admin/assets/vendor/js/css-scrollbars.js"></script>
    <script src="admin/assets/vendor/js/pcoded.min.js"></script> 
    <script src="admin/assets/vendor/js/vertical-layout.min.js"></script>
    <script src="admin/assets/vendor/js/jquery.mcustomscrollbar.concat.min.js"></script>
    <script src="admin/assets/vendor/js/script.js"></script>
    <script src="admin/assets/vendor/js/toastr.min.js"></script>
    <?php include 'admin/view/common/toast_messages.php'; ?>

    <script>
    function checkEmail(emailAccount) {

        $.ajax({
            type: 'POST',
            async: false,
            url: 'admin/controller/usersController.php',
            data: {
                emailAccount: emailAccount,
                usage: "checkEmail",
            },
            success: function(response) {

                if (response == "Success") {
                    $("#emailResult").text('');
                    $("button").attr("disabled", false);
                    return true;
                } else if (response == "2") {
                    $("#emailResult").text('Email not found!');
                    $("#emailResult").show();
                    $("button").attr("disabled", true);
                    // $("button").remove();
                    return false;
                }

            }
        });

    }
    </script>
</body>

</html>