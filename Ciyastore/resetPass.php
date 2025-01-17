<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="./assets/css/plugins.css" />
    <!-- Base Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- category css -->
    <link rel="stylesheet" href="./assets/css/categories/default.css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- REVOLUTION LAYERS STYLES -->

</head>

<body>
    <input type="button" id="back" value="Back">
    <form method="post">
        <div class="form-group">
            <label for="password">current Password</label>
            <input class="form-control" type="password" required placeholder="Password" name="password" id="curpassword">
        </div>
        <div class="form-group">
            <label for="password">upadate Password</label>
            <input class="form-control" type="password" required placeholder="Password" name="password" id="uppassword">
        </div>
        <div class="form-group">
            <label for="password">confirm Password</label>
            <input class="form-control" type="password" required placeholder="Password" name="password" id="copassword">
        </div>
        <div class="form-group">
            <a href="forgotPass.php" title="Forgot your password?">Forgot your password?</a>
        </div>
        <div class="form-group">
            <input type="submit" id="submit2">
        </div>

    </form>
    <script>
        $(document).ready(function() {
            $("#back").on('click', function(e) {
                e.preventDefault();
                ans = confirm("do you really want to abbort reset")
                if (ans) {
                    window.location.href = "./index.php";
                }
            })
            $("#submit2").on('click', function() {

                curr = $("#curpassword").val();
                updpass = $("#uppassword").val();
                confi = $("#copassword").val();
                const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
                if (!passwordPattern.test(updpass)) {

                    alert(
                        "Invalid password. Must contain at least one uppercase letter, one lowercase letter, one number, and be at least 8 characters long."
                    );
                }
                $.ajax({
                    url: "checking_resetpass.php",
                    type: "post",
                    data: {
                        curr: curr,
                        updpass: updpass,
                        confi: confi
                    },
                    success: function(data) {
                        alert(data, "fff")
                        if (data == 1) {
                            alert("Password is changed")
                        } else if (data == 2) {
                            alert("Current password is wrong")
                        } else if (data == 0) {
                            alert(" updated password and confirm password are not matching")
                        } else if (data == 4) {
                            alert(" updated password and confirm password are matching")
                        }
                    }
                })
            })


        })
    </script>
</body>

</html>