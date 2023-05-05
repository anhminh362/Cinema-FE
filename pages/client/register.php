<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>REGISTER</title>
    <link rel="stylesheet" href="../../style/register.css">
</head>

<body>


    <div class="form-register">
        <form method="POST">
            <h1><strong>Register</strong></h1>
            <div class="form-group">
                <label for="email">Email</label> <br>
                <div class="form-input">

                    <input type="text" class="form-control" id="email" name="email" required value="<?php if (isset($_POST['email'])) {
                                                                                                        echo $_POST['email'];
                                                                                                    }; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="pwd">Password</label><br>
                <div class="form-input">

                    <input type="password" class="form-control" id="pwd" name="pwd" required value="<?php if (isset($_POST['pwd'])) {
                                                                                                        echo $_POST['pwd'];
                                                                                                    } ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="confirm-pwd">Confirm Password</label><br>
                <div class="form-input">

                    <input type="password" class="form-control" id="cf_pwd" name="cf_pwd" required value="<?php if (isset($_POST['cf_pwd'])) {
                                                                                                                echo $_POST['cf_pwd'];
                                                                                                            } ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-default btn__regiter" name="btn">Register</button>
            <div>
                <?php
               
                if (isset($_POST['btn'])) {
                    
                    $email=$_POST['email'];
                    $pass=$_POST['pwd'];
                    $cf_pass=$_POST['cf_pwd'];
                    $connect = mysqli_connect("localhost", "root", "", "cinema") or die("abc");
                    $sql = "select * from account where email='$email'";
                    $result = mysqli_query($connect, $sql) or die("fail");
                      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

                        echo("$email is not a valid email address");
                      }
                      else if(mysqli_num_rows($result) > 0){
                        echo ("This email address already exits. Do you want to ");?><a href="login.php">Login</a>

                        <?php
                      }
                      else if(strlen($pass)<8){
                        echo("Password must be at least 8 characters");
                      }
                      else if($pass!==$cf_pass){
                        echo("The password confirmation doesn't match");

                      }
                      else{
                        $_SESSION['email']=$email;
                        $password=password_hash($pass,PASSWORD_DEFAULT);
                        $insert=mysqli_query($connect,"INSERT INTO `account`( `email`, `password`) VALUES ('$email','$password')");
                        
                        // header("Location: http://localhost:8080/cinema/pages/client/verify_mail.php");
                        echo "<script>
                            window.location.href='verify_mail.php';
                        </script>"; 
                      }
                }

                ?>
                <br><br>
            </div>


        </form>
    </div>
</body>
<script>

</script>

</html>