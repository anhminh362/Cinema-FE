<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Code</title>
   
    <link href='../../style/verify_code.css' rel='stylesheet'>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <h2>Verify Your Account</h2>
        &nbsp;
        <p class="info">An otp has been sent to

                <?php
                // Hidden email
                $_SESSION['email']=$_GET['email'];
                if (isset($_SESSION['email'])) {
                    function hidden_email($email)
                    {
                        $hidden_email = '';
                        for ($i = 0; $i < (strlen($email) - 13); $i++) {
                            $hidden_email .= "*";
                        }
                        $hidden_email .= substr($email, -13);
                        return $hidden_email;
                    }
                    $verify_email = $_SESSION['email'];
                    echo hidden_email($verify_email);
                }
                ?>

            </p>
        <?php // Sendding email

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            //include("./connect_db.php");
            require '../client/phpmailer/src/Exception.php';
            require '../client/phpmailer/src/PHPMailer.php';
            require '../client/phpmailer/src/SMTP.php';

            if (isset($_SESSION['email'])) {

                $verify_email = $_SESSION['email'];

                // Setting mail
                function sendding_mail($verify_email, $password)
                {
                    $mail = new PHPMailer(true);

                    // Configure an SMTP
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'minh.le24@student.passerellesnumeriques.org';
                    $mail->Password = 'qjetrozednijuljd';
                    $mail->SMTPSecure = 'ssl';
                    $mail->SMTPDebug = 0;
                    $mail->Port = 465;

                    $mail->setFrom('minh.le24@student.passerellesnumeriques.org');
                    $mail->addAddress($verify_email);
                    $mail->isHTML(true);
                    $mail->Subject = "[MoonLight Cinema]_Your password";
                    $mail->Body = "Here is your code: " . $password;
                    $mail->send();
                };

                // Check exist email
                $select_email = "SELECT `email` FROM `user` WHERE `email` = '$verify_email'";
                $check_email = mysqli_query($conn, $select_email);

                if (mysqli_num_rows($check_email) != 0) {
                } else {
                    $password = random_int(100000, 999999);
                    // Call sendding_mail function
                    sendding_mail($verify_email, $password);

                    // Insert email and pass in the database
                    $sql = "INSERT INTO `User`(`email`,`user_password`) VALUES ('$verify_email','$password')";
                    $result = mysqli_query($conn, $sql);
                }
            };
            ?>
        <div class="code-container">
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
            <input type="number" class="code" placeholder="0" min="0" max="9" required>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Verify</button>
        </div>

        <small>
            If you didn't receive a code !! <strong><a href=""> Resend</a></strong>
        </small>
    </div>

    <!-- <?php

function get_valueFromStringUrl($url, $parameter_name)
{
    $parts = parse_url($url);
    if (isset($parts['query'])) {
        parse_str($parts['query'], $query);
        if (isset($query[$parameter_name])) {
            return $query[$parameter_name];
        } else {
            return null;
        }
    } else {
        return null;
    }
}

// Get current url
$protocol = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Get variableName user entered
$variableName = get_valueFromStringUrl($CurPageURL, "variableName");

$select_user_pass = "SELECT `user_password` FROM `user` WHERE `email` = '$verify_email'";
$conn_user_pass = mysqli_query($conn, $select_user_pass);

if ($row = mysqli_fetch_assoc($conn_user_pass)) {
    if ($variableName == $row['user_password']) {
        header('Location: http://localhost/FOOD_STORE_WEBSITE/sign_up/login.php');
        exit();
    } else if ($variableName == null) {
    } else {
        echo "<script>alert('Password incorrect')</script>";
    }
} else {
    echo "<script>alert('User not found')</script>";
}

?> -->
<!-- JavaScript -->
<script>
    const codes = document.querySelectorAll('.code');
    codes[0].focus();

    codes.forEach((code, idx) => {
        code.addEventListener('keydown',(e) => {
            if(e.key >= 0 && e.key <= 9) {
                codes[idx].value = ''
                setTimeout(() => codes[idx + 1].focus(), 10)
            } else if(e.key === 'Backspace'){
                setTimeout(() => codes[idx - 1].focus(), 10)
            }
            
        })
    })

</script>
</body>
</html>
