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
    <title>Document</title>
    <link rel="stylesheet" href="../../style/login.css">
</head>
<body>


<div class="form-login">
    <form method="post">
    <h1><strong>Login</strong></h1>
      <div class="form-group">
        <label for="username" >Username</label> <br>
        <div class="form-input">
            <span class="material-symbols-outlined">person</span>
            <input type="text" class="form-control" id="username" name="username"  placeholder="Type your username" required>
        </div>
      </div>
      <div class="form-group">
        <label for="pwd">Password</label><br>
        <div class="form-input">
            <span class="material-symbols-outlined">lock</span>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Type your password" required>
        </div>
      </div>
      <div class="form-group register">
        <div><p><a href="">Register</a></p></div>
        <div><p><a href="">Forgot password ?</a></p></div>
      </div>
      <button type="submit" class="btn btn-default" name="btn">LOGIN</button>
     <div>
     
    <br><br>
     </div>
    <?php
    if(isset($_POST['btn'])){
        $email=$_POST['username'];
        $pass=$_POST['pwd'];
        $connect = mysqli_connect("localhost", "root", "", "cinema") or die("abc");
        $sql = "select * from account where email='$email'";
        $result = mysqli_query($connect, $sql) or die("fail");
         if (mysqli_num_rows($result ) > 0) {
            $row = mysqli_fetch_assoc($result );
            $checkPass=password_verify($pass,$row['password']);
            $account=$row['id'];
             if ($checkPass) {
                $account = mysqli_query($connect,"select * from users where account_id='$account'" ) or die("fail");
                $query = mysqli_fetch_assoc($account);
               $string=$query['full_name'];
                for($i=0;$i<strlen($string);$i++){
                    if($string[$i]==" "){
                        $a=$i;
                    }
                }
                $_SESSION['user']=substr($string, -$a-1);
                $_SESSION['user_id']=$query['id'];
                // var_dump($_SESSION['user_id']);
                // echo "Đăng nhập thành công! Hãy đến " . "<a href='check.php' >Trang chủ";
                header("Location: http://localhost:8080/cinema/pages/client/homepage.php");
             } else {
                 echo  "Your password is incorrect";
             }
         }else{
             echo"This account doesn't exit";
         }
    }
   

    ?>
     
    </form>
</div>
</body>
</html>