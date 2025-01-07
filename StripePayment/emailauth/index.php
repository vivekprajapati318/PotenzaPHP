<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Gatway</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

    <label for="text" class="name" id="label1">name</label>
    <input type="text" name="name" id="name2" class="name">
    <label for="email" class="email" id="label2">email</label>
    <input type="email" name="email" id="email" class="email">
    <input type="submit" value="send" id="send" name="send" class="submit">

    <div class="OTP" id="otp">
        <input type="text" name="code" id="code">
        <input type="submit" value="submit" class="submit" id="submit">
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#otp').hide();


            $('#send').on("click", function() {
                var name = $("#name2").val();
                var email = $("#email").val();
                console.log(name)

                $.ajax({
                    url: "varify2.php",
                    type: "POST",
                    data: {
                        name: name,
                        email: email
                    },
                    success: function(data) {
                        console.log(data)
                        $('#send').hide();
                        $('#otp').show();
                        alert("Message has been sent.")
                        $("#submit").on("click", function() {
                            var OTP = $("#code").val();

                            console.log(OTP, data)
                            if (OTP == data) {
                                alert("otp is right")
                            } else {
                                alert("OTP IS WRONG")
                            }
                        })




                    }
                })
            })




        })
    </script>

</body>

</html>