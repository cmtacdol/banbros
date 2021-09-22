<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Ainpoint 2.0</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="icon" href="assets/img/fav.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/bootstrap.min.css">

    <link rel="stylesheet" href="admin/assets/vendor/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/feather.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/themify-icons.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/icofont.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/css/login.css">

    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/toastr.min.css">

    <link rel="stylesheet" type="text/css" href="admin/assets/vendor/css/pages.css">

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

    <section class="login-block align-content-center">

        <div class="container-fluid">
            <div class="row "> 
                <div class="col-sm-12">
                    <form method="post" id="loginForm" name="loginForm"
                        class="md-float-material form-material">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <img src="assets/img/ainpoint_logo.jpg" style="width: 100%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" id="username" name="username" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" id="password" name="password" class="form-control" required>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="forgot-phone text-center ">
                                            <a href="auth-reset-password.php" class="text-right f-w-600"> Forgot
                                                Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="btn bg-main btn-success btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>

                </div>

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
    <script src="admin/assets/vendor/js/rocket-loader.min.js" data-cf-settings="4878d7dfa7bc22a8dfa99416-|49" defer="">
    
    </script>
    <script>
    $(document).ready(function() {
        $("#loginForm").submit(function(event) {
            event.preventDefault();
            var username = $("#username").val();
            var password = $("#password").val();
            var usage = "login";
            $.ajax({
                type: 'POST',
                async: false,
                url: 'admin/controller/usersController.php',
                data: {
                    username: username,
                    password: password,
                    usage: usage,
                },
                success: function(response) {

                    if (response == "1") {
                        toastr.error('Account not found!');
                        return false;
                    } else if (response == "2") {
                        toastr.error('Username or password not found');
                        return false;
                    } else if (response == "3") {
                        toastr.error('Invalid input');
                        return false;
                    } else if (response == "Success") {
                        window.location.replace("admin/banner.php");
                        return true;
                    }
                }
            });
        });
    });
    </script>

</body>

</html>