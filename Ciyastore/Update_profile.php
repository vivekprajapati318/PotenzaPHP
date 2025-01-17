<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <!-- Favicon -->
    <link rel="icon" href="../assets/images/favicon.png" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPoppins:400,500,600,700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assets/css/plugins.css" />
    <!-- Base Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- category css -->
    <link rel="stylesheet" href="../assets/css/categories/default.css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- REVOLUTION LAYERS STYLES -->

</head>
<input type="button" id="back" value="Back">

<body>

    <script>
        $(document).ready(function() {
            $("#back").on('click', function() {
                ans = confirm("do you really want to abbort reset")
                if (ans) {
                    window.location.href = "./index.php";
                }

            })

        })
    </script>
</body>

</html>