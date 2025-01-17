<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot password</title>

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
    <label for="Email">enter your Email</label>
    <input type="text" name="email" id="email" class="email" placeholder='enter email'
        style="margin-top: 20px; margin-left:20px;">
    <input type="submit" value="check" name="check" id="check">
    <div id="otpcheck">

        <select name="otp" id="otp">
            <option value="email">email</option>
            <option value="sms">SMS</option>
        </select>
        <input type="submit" value="send otp" id="getotp">
        <input type="text" name="OTP" id="OTP">
        <input type="submit" value="varify otp" id="Varifyotp">
    </div>


    <Script>
        $(document).ready(function() {
            $('#otpcheck').hide();
            $('#check').on("click", function() {
                email = $('#email').val().trim();

                $.ajax({
                    url: "otp.php",
                    type: "POST",
                    data: {
                        email: email
                    },
                    success: function(data) {
                        console.log(data)
                        if (data == 1) {
                            alert("email exsist")
                            $('#otpcheck').show();
                        } else {
                            alert("email not exsist", data)
                        }
                    }
                })

                $('#getotp').on("click", function() {
                    email = $('#email').val().trim();
                    var select = $('#otp').val().trim();
                    console.log(select)
                    if (select == "sms") {
                        $.ajax({
                            url: "./SMSOTP/varify.php",
                            type: "POST",
                            data: {
                                email: email
                            },
                            success: function(data) {
                                console.log(data)
                                $("#Varifyotp").on("click", function() {
                                    var otp = $("#OTP").val().trim()
                                    console.log(otp)
                                    if (data == otp) {
                                        alert("otp is correct")
                                        window.location.href = "newpass.php"
                                    } else console.log("error");
                                })
                            }
                        })
                    } else {
                        email = $('#email').val().trim();
                        var select = $('#otp').val().trim();
                        console.log(select)
                        $.ajax({
                            url: "./emailauth/varify2.php",
                            type: "POST",
                            data: {
                                email: email
                            },
                            success: function(data) {
                                console.log(data)
                                data = data.trim()
                                $("#Varifyotp").on("click", function() {
                                    var otp = $("#OTP").val().trim()
                                    console.log(otp)
                                    if (data == otp) {
                                        alert("otp is correct")
                                        window.location.href = "newpass.php"
                                    } else console.log("error");
                                })
                            }
                        })
                    }
                })
            })
        })
    </Script>
</body>

</html>