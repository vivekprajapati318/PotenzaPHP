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
<input type="button" id="back" value="Back">

<body>
    <?php
    session_start();
    $email = $_SESSION['email'];
    $conn = new mysqli("localhost", "root", "", "vivek");
    $sql = "SELECT * FROM ciyastore WHERE Email='$email'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

            $name = explode(" ", $row['customer_name']);
            $first = $name[0];
            $last = end($name);
            $emial = $row['Email'];
            $phone = substr($row['phone'], -10, 10);
            $Pid =  explode("$phone", $row['phone']);
            $Pid = $Pid[0];
            echo $Pid;
            $pass = $row["password"];
        }
    }
    ?>
    <div class="container">

        <div class="form-group">
            <label for="Firstname">firstname</label>
            <input type="text" class="form-control" name="Firstname" id="Firstname" required placeholder="Firstname" value=<?php echo $first ?>>
        </div>
        <div class="form-group">
            <label for="lastname">Lastname</label>
            <input type="text" class="form-control" name="lastname" id="lastname" required placeholder="Lastname" value=<?php echo $last ?>>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="Email" id="Email" required placeholder="Email" value=<?php echo  $emial ?>>
        </div>

        <div class="form-group">
            <label for="Phone">Phone Number</label>
            <div class="number" style="display:flex;">


                <input type="text" class="form-control" name="CoID" id="CoID" value=<?php echo  $Pid ?> required placeholder="PhoneNumber">
                <input type="text" class="form-control" name="PhoneNumber" id="PhoneNumber" value=<?php echo  $phone ?> required placeholder="PhoneNumber">
            </div>

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" required value=<?php echo  $pass ?> placeholder="Password" name="password" id="password">
            <input type="button" value="show" id=show>
        </div>

        <div class="form-group">
            <input type="submit" class="button btn-primary submit-Update" id="Update" name="Update" value="Update">
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $("#back").on('click', function() {
                ans = confirm("do you really want to abbort update profile ")
                if (ans) {
                    window.location.href = "./index.php";
                }

            })
            $("#show").mousedown(function() {
                $("#password").attr("type", 'text')
            })
            $("#show").mouseup(function() {
                $("#password").attr("type", 'password')
            })
            $("#Update").on("click", function() {
                let nameErr = false,
                    emailErr = false,
                    phoneErr = false,
                    passErr = false,
                    DOBErr = false;

                const firstName = $("#Firstname").val();
                const lastName = $("#lastname").val();
                const email = $("#Email").val();
                const countryCode = $("#CoID").val();
                const phoneNumber = $("#PhoneNumber").val();
                const password = $("#password").val();

                const fullName = firstName + " " + lastName;
                const fullPhoneNumber = countryCode + phoneNumber;
                console.log(fullName, phoneNumber, password, email)


                if (!fullName) {
                    nameErr = true;
                    alert("Name is required");
                } else if (!/^[a-zA-Z-' ]*$/.test(fullName)) {
                    nameErr = true;
                    alert("Only letters and white space allowed in name");
                }

                if (!email) {
                    emailErr = true;
                    alert("Email is required");
                }

                if (!fullPhoneNumber) {
                    phoneErr = true;
                    alert("Phone number is empty");
                } else if (phoneNumber.length !== 10) {
                    phoneErr = true;
                    alert("Invalid phone number");
                }

                const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
                if (!passwordPattern.test(password)) {
                    passErr = true;
                    alert(
                        "Invalid password. Must contain at least one uppercase letter, one lowercase letter, one number, and be at least 8 characters long."
                    );
                }


                if (nameErr || emailErr || phoneErr || passErr) {
                    $(".alert").show().text("Invalid credentials. Please fix the errors and try again.");
                } else {
                    $.ajax({
                        url: "Profile.php",
                        type: "POST",
                        data: {

                            name: fullName,
                            email: email,
                            phone: fullPhoneNumber,

                            pass: password
                        },
                        success: function(data) {
                            if (data == 1) {
                                alert("update successful!");



                                window.location.href = "index.php";

                            } else {

                                console.log(data);
                                console.log("error");
                            }

                        }

                    })
                }
            })
        })
    </script>
</body>

</html>