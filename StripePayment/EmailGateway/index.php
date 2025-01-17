<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Gateway</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        /* Background Gradient */
        body {
            background-image: linear-gradient(255deg, #1e3c72, #2a5298);
            font-family: 'Arial', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Form styling */
        form {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: none;
            border-radius: 8px;
            background-color: #4e73df;
            color: white;
            font-size: 1rem;
        }

        input[type="submit"] {
            background-image: radial-gradient(#635356, rgb(66, 122, 182));
            color: #87bee1;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #3498db;
        }

        textarea {
            resize: vertical;
            font-size: 1rem;
        }

        .message {
            margin-top: 20px;
            font-size: 1.1rem;
            font-weight: 600;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            form {
                padding: 20px;
            }

            input,
            textarea {
                font-size: 0.9rem;
                padding: 10px;
            }

            label {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <form action="index.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="subjecti">Subject</label>
        <input type="text" name="subjecti" id="subjecti" required>

        <label for="massage">Message</label>
        <textarea name="massage" id="massage" rows="5" required></textarea>

        <input type="submit" value="Send" name="send" id="send">

        <div class="message" id="responseMessage"></div>
    </form>

    <?php
    require "vendor/autoload.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subjecti'];
        $message = $_POST['massage'];
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->Username = 'vivekprajapati120304@gmail.com';
        $mail->Password = 'zjph mmhq zwsc fhpy';
        $mail->setFrom('vivekprajapati120304@gmail.com', 'Vivek Prajapati');
        $mail->addAddress($email, $name);
        $mail->Subject = $subject;
        $mail->Body = $message;

        try {
            $mail->send();
            echo "<script>document.getElementById('responseMessage').textContent = 'Message has been sent successfully!';</script>";
        } catch (Exception $e) {
            echo "<script>document.getElementById('responseMessage').textContent = 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';</script>";
        }
    }
    ?>

</body>

</html>