<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>admin</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <!-- Base Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- category css -->
    <link rel="stylesheet" href="assets/css/categories/default.css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- REVOLUTION LAYERS STYLES -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="modal fade show" id="pgs_login_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-modal="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Admin Sign in </h4>
                    <a id="AdminLogin" href="adminLogin.php" class="btn btn-primary">admin only</a>
                </div>
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">USER Sign in Or Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="box-authentication">
                        <div class="row">
                            <div class="col-sm-6">
                                <form method="post" class="login">
                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input type="text" class="form-control" name="Email" id="Email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                                        <input type="button" value="show" id=show>
                                    </div>
                                    <div class="form-group">
                                        <a href="forgotPass.php" title="Forgot your password?">Forgot your password?</a>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="button btn-primary submit-login" name="login" id="loginUser" value="Login">
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6">
                                <h2>NEW HERE?</h2>
                                <p class="note-reg">Registration is free and easy!</p>
                                <ul class="list-log">
                                    <li>Faster checkout</li>
                                    <li>Save multiple shipping addresses</li>
                                    <li>View and track orders and more</li>
                                </ul>
                                <a href="ragister.php" class="btn btn-primary">Create an account</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {


            $("#show").mousedown(function() {
                $("#password").attr("type", 'text')
            })
            $("#show").mouseup(function() {
                $("#password").attr("type", 'password')
            })
            $("button.close span").on("click", function() {
                $(".show").hide();
            })
            $(document).on("click", "a#login", function() {

                $("#pgs_login_form").show()
            })

            $(document).on("click", "#loginUser", function() {
                email = $('#Email').val()
                pass = $("#password").val()
                $.ajax({
                    url: "fetchUser.php",
                    type: "POST",
                    data: {
                        email: email,
                        pass: pass
                    },
                    success: function(data) {
                        console.log(data)
                        if (data == 1) {
                            alert("success")
                            $("#pgs_login_form").toggle();
                        } else {

                            alert("invalid credencial" + data)
                        }
                    }
                })

            })
            $("#AdminLogin").click(function() {

                $.ajax({
                    url: "sess.php",
                    success: function(data) {

                        if (data == 1) {

                        } else {
                            console.log("err")
                        }
                    }
                })
            })
        })

        //     
    </script>
</body>

</html>