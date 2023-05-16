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
    <div class="form-register">
    <form action="" method="POST" >
        <div class="container">
            <h2>Verify Your Account</h2>
            &nbsp;
            <p class="info">An otp has been sent to

                <?php
                // Hidden email
                //$_SESSION['email']=$_GET['email'];
                if (isset($_SESSION['email'])) {
                    function hidden_email($email)
                    {
                        $hidden_email = '';
                        for ($i = 0; $i < (strlen($email) - 12); $i++) {
                            $hidden_email .= "*";
                        }
                        $hidden_email .= substr($email, -12);
                        return $hidden_email;
                    }
                    $verify_email = $_SESSION['email'];
                    echo hidden_email($verify_email);
                } ?>
                <?php

                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\Exception;

                //include("./connect_db.php");
                require '../client/phpmailer/src/Exception.php';
                require '../client/phpmailer/src/PHPMailer.php';
                require '../client/phpmailer/src/SMTP.php';

                if (isset($_SESSION['email'])) {

                    $verify_email = $_SESSION['email'];

                    // Setting mail
                    function sendding_mail($verify_email,$code)
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
                        $mail->Subject = "[MoonLight Cinema]_Your code";
                        $content=file_get_contents("sendmail.php");
                        $content=str_replace("code",$code,$content);
                        $mail->Body = $content;
                        $mail->send();
                    };;
                    // Call sendding_mail function
                  
                    $code = random_int(100000, 999999);
                    sendding_mail($verify_email,$code);
                };
                
                ?>

            </p>
            <div class="code-container">
                <input type="number" class="code" name ="1" placeholder="0" min=0 max=9 required value="<?php if(isset($_POST['1'])){echo $_POST['1'];}?>">
                <input type="number" class="code" name ="2" placeholder="0" min=0 max=9 required value="<?php if(isset($_POST['1'])){echo $_POST['2'];}?>">
                <input type="number" class="code" name ="3" placeholder="0" min=0 max=9 required value="<?php if(isset($_POST['1'])){echo $_POST['3'];}?>">
                <input type="number" class="code" name ="4" placeholder="0" min=0 max=9 required value="<?php if(isset($_POST['1'])){echo $_POST['4'];}?>">
                <input type="number" class="code" name ="5" placeholder="0" min=0 max=9 required value="<?php if(isset($_POST['1'])){echo $_POST['5'];}?>">
                <input type="number" class="code" name ="6" placeholder="0" min=0 max=9 required value="<?php if(isset($_POST['1'])){echo $_POST['6'];}?>">
            </div>
                <!-- <input type="hidden" name="check" id="check_code"/> -->
            <div>
                <button type="submit"  name="btn_verify" class="btn btn__register btn-primary">Verify</button>
            </div>
               
            <small>
                If you didn't receive a code !! <strong><a href="verify_mail.php"> Resend</a></strong>
            </small><br>
            <?php
            echo $code;
         
            ?>
        </div>
    </form>
    </div>
    <!-- JavaScript -->
    <script>
        // function code(){
            
        const codes = document.querySelectorAll('.code');
        codes[0].focus();
        let codeLine = ""
        
        codes.forEach((code, idx) => {
            code.addEventListener('keydown', (e) => {
                if (e.key >= 0 && e.key <= 9) {
                    codes[idx].value = '';
                    //console.log(e.key)
                    codeLine+=e.key;
                    //console.log(codeLine);
                    setTimeout(() => codes[idx + 1].focus(), 10);
                } else if (e.key === 'Backspace') {
                    
                    setTimeout(() => codes[idx - 1].focus(), 10);
                    codeLine=codeLine.substring(0, codeLine.length - 1);
                   
                }
            })
            
        })
        
        const btnRegister=document.getElementById('btn__register');
        const registerForm =document.querySelector('div.form-register form');
        
        registerForm.addEventListener("submit",(event) => {
        //console.log('1233');
        event.preventDefault();
        handleRegister()
        })
        const handleRegister=(e)=>{
            //console.log(codeLine);
            if(codeLine==<?php echo $code?>){
                
                alert ("successfull")
                window.location=" /cinema/pages/client/formUser.php"
            }
            else{
                alert ("The verification code you entered is incorrect. Please try again")
            }
        }

    </script>
</body>

</html>