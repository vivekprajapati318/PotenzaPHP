<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Gateway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <style>
        /* Background */
        body {
            background-color: #f7f9fc;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Form Styling */
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
            animation: fadeIn 1s ease-out;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .form-control {
            margin-bottom: 20px;
        }

        /* Button Styling */
        .submit,
        .varify {
            background-color: #4C6FE0;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit:hover,
        .varify:hover {
            background-color: #3e5bb2;
        }

        /* OTP Container Animation */
        .otp-container {
            display: none;
            animation: slideIn 1s ease-out;
        }

        /* Fade-In Animation for the Main Form */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.8);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Slide-In Animation for OTP Verification */
        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Number Gateway</h1>
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>

        <label for="number" class="form-label">Number</label>
        <input type="text" name="number" id="number" class="form-control" required>

        <input type="submit" value="Send OTP" id="send" class="submit">

        <div class="otp-container" id="varification">
            <label for="otp" class="form-label">Enter OTP</label>
            <input type="text" name="otp" id="otp" class="form-control" required>
            <input type="submit" value="Verify OTP" class="varify" id="varify">
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#varification").hide();

            $("#send").on("click", function() {
                var name = $("#name").val();
                var number = $("#number").val();

                $.ajax({
                    url: "varify.php",
                    type: "POST",
                    data: {
                        name: name,
                        number: number
                    },
                    success: function(data) {
                        data = data.trim();
                        alert("OTP sent");
                        $("#varification").show();
                        $("#send").hide();

                        // Apply the slide-in effect for OTP verification
                        $(".otp-container").css("animation", "slideIn 1s ease-out");

                        $("#varify").on("click", function() {
                            var otp = $("#otp").val();
                            if (otp == data) {
                                alert("OTP is correct!");
                            } else {
                                alert("Incorrect OTP. Try again!");
                            }
                        });
                    }
                });
            });
        });
    </script>

</body>

</html>