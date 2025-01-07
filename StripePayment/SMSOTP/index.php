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

</head>

<body>

    <label for="name" class="name" id="label1">Name</label>
    <input type="text" name="name" id="name" class="name" required>

    <label for="number1" class="number1" id="label2">Number</label>
    <input type="text" name="number" id="number" class="number" required>


    <input style="background-color:rgb(76, 111, 224); margin:20px;" type="submit" value="Send" id="send" name="send" class="submit">
    <br>
    <div class="varify" id="varification">
        <input type="text" name="otp" id="otp" class="otp" required>
        <input style="background-color:rgb(76, 111, 224); margin:20px;" type="submit" value="varify" class="varify" id="varify">
    </div>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#varification").hide();
            $("#send").on("click", function() {


                var name = $("#name").val()
                var number = $("#number").val()
                console.log(name, number)
                $.ajax({
                    url: "varify.php",
                    type: "POST",
                    data: {
                        name: name,
                        number: number
                    },
                    success: function(data) {

                        data = data.trim();
                        console.log(data)
                        alert("OTP sent");
                        $("#varification").show();
                        $("#send").hide();
                        $("#varify").on("click", function() {
                            var otp = $("#otp").val()
                            if (otp == data) {
                                console.log(otp, data)
                                alert("OTP is right :)")

                            } else {
                                console.error()
                                console.log(otp, data)
                                alert("try again, wrong OTP!!")
                            }
                        })
                    }
                })
            })
        })
    </script>
</body>

</html>