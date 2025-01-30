<?php session_start(); ?>
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
</head>

<body>
    <center>
        <div class="lo" style="display: flex; margin-top:20%; width: 200px;">
            <form method="post" class="login">
                <div class="form-group">
                    <label for="AdminEmail">Admin Email</label>
                    <input type="email" class="form-control" name="AdminEmail" id="AdminEmail" required placeholder="AdminEmail">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" placeholder="Password" required name="password" id="password">

                    <input type="button" value="show" id=show>
                </div>
                <div class="form-group">
                    <a href="#" title="Forgot your password?">Forgot your password?</a>
                </div>
                <div class="form-group">
                    <input type="submit" class="button btn-primary submit-login" name="login" value="Login" id="LoginA">
                </div>

            </form>
        </div>
    </center>
    <script>
        $("#show").mousedown(function() {
            $("#password").attr("type", 'text')
        })
        $("#show").mouseup(function() {
            $("#password").attr("type", 'password')
        })
        $("#LoginA").on("click", function() {
            email = $('#AdminEmail').val()
            pass = $("#password").val()
            $.ajax({
                url: "fetchADM.php",
                type: "POST",
                data: {
                    email: email,
                    pass: pass
                },
                success: function(data) {
                    console.log(data);
                    if (data == 1) {
                        alert("login success")
                        window.location.href = "./admin/index.php";

                    } else {
                        alert("invalid credencial")
                    }
                }
            })
        })
    </script>
</body>

</html>