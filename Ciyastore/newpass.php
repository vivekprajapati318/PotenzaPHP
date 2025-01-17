<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new password</title>
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

<label for="new password"> new password</label>
<input type="text" name="Newpass" id="newpass">
<label for="new password"> confirm password</label>
<input type="text" name="conpass" id="conpass">
<input type="submit" value="change password" id="updatepass">
<script>
    $(document).ready(function() {
        passerr = false
        $("#updatepass").on("click", function() {
            var newpass = $('#newpass').val().trim();
            var conpass = $('#conpass').val().trim();
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
            if (!passwordPattern.test(newpass)) {
                alert(
                    "Invalid password. Must contain at least one uppercase letter, one lowercase letter, one number, and be at least 8 characters long."
                );
                passerr = true;
            }
            $.ajax({
                url: 'newpassUP.php',
                type: 'post',
                data: {
                    newpass: newpass,
                    conpass: conpass

                },
                success: function(data) {
                    console.log(data)
                    if (data == 1) {
                        if (passerr) {
                            $(".alert").show().text("Invalid credentials. Please fix the errors and try again.");
                        } else {
                            alert("password changed")
                            window.location.href = "index.php";
                        }
                    } else if (data == 4) {
                        alert("its empty")
                    }
                }
            })
        })
    })
</script>

<body>

</body>

</html>