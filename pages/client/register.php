<?php
session_start()
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


<div class="form-login">
    <form method="post">
    <h1><strong>Register</strong></h1>
      <div class="form-group">
        <label for="email" >Email</label> <br>
        <div class="form-input">
            <!-- <span class="material-symbols-outlined">person</span> -->
            <input type="text" class="form-control" id="email" name="email" required>
        </div>
      </div>
      <div class="form-group">
        <label for="pwd">Password</label><br>
        <div class="form-input">
          
            <input type="password" class="form-control" id="pwd" name="pwd" required>
        </div>
      </div>
      <div class="form-group">
        <label for="confirm-pwd">Confirm Password</label><br>
        <div class="form-input">
            
            <input type="password" class="form-control" id="cf_pwd" name="cf_pwd" required>
        </div>
      </div>
      
      <button type="submit" class="btn btn-default btn-regiter" name="btn">Register</button>
     <div>
     <?php
    //  echo '233333';
    // $a=array("Dog"=>"gogo","Cat"=>"mailmail","Bear"=>"grown");
        if(isset($_POST['btn'])){
            $email=$_POST['email'];
            $pass=$_POST['pwd'];
            $cf_pass=$_POST['cf_pwd'];
           
              if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              //   echo("$email is a valid email address");
              // } else {
                echo("$email is not a valid email address");
              }
              else if(count($pass)<8){
                echo("Vui long nhap mat khau tu 8 ky tu tro len");
              }
              else if($pass!==$cf_pass){
                echo("Vui long xac nhan lai mat khau");
                
              }
              else{
                //header("Location: http://localhost:8080/cinema/pages/client/verify_code.php");
                ?>
              <script>
      let apiUser = "https://6424101a4740174043320fe7.mockapi.io/account";

const email = document.getElementById("email");
const password = document.getElementById("password");
const bntSignup = document.querySelector(".btn-regiter");
// signup

const handleRegister=(e)=>{
  e.preventDefault();
  if (email.value == "" || password.value == "") {
    alert("Please enter your email and password");
  } else {
    const user = {
      Email: email.value,
      password: password.value,
    };
    fetch(apiUser, {
      method: "POST",
      
      headers: {
        "Content-Type": "application/json",
        
      },
      body: JSON.stringify(account),

    })
    
      .then((res) => res.json())
      .then((data) => console.log(data));
      alert("Sign Up Success");
      window.location.href = "verify_code.php?id="<?php echo $email ?>;
  }
};

    </script>
    <?php
              }}
        
    ?>
    
    <br><br>
     </div>

     
    </form>
</div>
</body>
</html>