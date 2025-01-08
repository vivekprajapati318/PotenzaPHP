<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Gateway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        body {
            background: #f4f7f6;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 5%;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            margin-top: 10px;
        }

        .form-control {
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 10px;
        }

        .submit {
            border-radius: 8px;
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            width: 100%;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #218838;
        }

        .OTP {
            margin-top: 20px;
            display: none;
        }

        .OTP input {
            margin-bottom: 15px;
            border-radius: 8px;
            padding: 10px;
            width: 100%;
        }

        .name,
        .email {
            width: 100%;
        }

        #otp {
            margin-top: 20px;
        }

        .alert-box {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            display: none;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin-top: 10%;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h3 class="text-center mb-4">Email Verification</h3>

        <label for="text" class="form-label">Name</label>
        <input type="text" name="name" id="name2" class="form-control">

        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">

        <input type="submit" value="Send" id="send" name="send" class="submit">

        <div class="OTP" id="otp">
            <label for="code" class="form-label">Enter OTP</label>
            <input type="text" name="code" id="code" class="form-control">
            <input type="submit" value="Submit" class="submit" id="submit">
        </div>

        <div class="alert-box" id="alert-box"></div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#otp').hide();
            $('#send').on("click", function() {
                var name = $("#name2").val();
                var email = $("#email").val();

                if (name === "" || email === "") {
                    showAlert("Name and Email are required.");
                    return;
                }

                $.ajax({
                    url: "varify2.php",
                    type: "POST",
                    data: {
                        name: name,
                        email: email
                    },
                    success: function(data) {
                        $('#send').hide();
                        $('#otp').show();
                        showAlert("Message has been sent.");
                        $("#submit").on("click", function() {
                            var OTP = $("#code").val();
                            if (OTP === data) {
                                showAlert("OTP is correct.", true);
                            } else {
                                showAlert("OTP is wrong.");
                            }
                        });
                    }
                })
            })

            function showAlert(message, success = false) {
                $('#alert-box').text(message).fadeIn();
                if (success) {
                    $('#alert-box').css("background-color", "#d4edda").css("color", "#155724");
                } else {
                    $('#alert-box').css("background-color", "#f8d7da").css("color", "#721c24");
                }
                setTimeout(function() {
                    $('#alert-box').fadeOut();
                }, 3000);
            }
        })
    </script>
</body>

</html>