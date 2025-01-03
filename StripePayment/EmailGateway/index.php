<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Gatway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <form action="index.php" method="post">
        <label for="text" class="name" id="label1">name</label>
        <input type="text" name="name" id="name" class="name">
        <label for="email" class="email" id="label2">email</label>
        <input type="email" name="email" id="email" class="email">

        <label for="    " class="subject" id="label3">subject</label>
        <input type="text" name="subjecti" id="subjecti" class="subjecti">
        <label for="textbox" class="name" id="label1">massege</label>
        <textarea cols=35 rows=10 name="massage" id="masaage" class="masaage"></textarea>
        <input type="submit" value="send" id="send" name="send" class="submit">
    </form>
</body>

</html>
<?php

?>
<?php
if (isset($_POST['send'])) {
    print_r($_POST);
    $to = $_POST['email'];
    $subject = $_POST['subjecti'];
    $massage = $_POST['massage'];
    $header = "from: vivekprajapati318@gmail.com";

    if (mail($to, $subject, $massage, $header)) {
        echo "massage sent";
    } else {
        echo "error";
    }
}
?>