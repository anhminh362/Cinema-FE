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
  <title>Form User</title>
  <link rel="stylesheet" href="../../style/formUser.css">
</head>

<body>

  <?php
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
   $nameErr = $phoneErr = "";
   $name =  $phone = "";
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $phone = $_POST['phone'];
   if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
   $nameErr = "Only letters and white space allowed"; 
   };
   if (!preg_match('/^[0-9]{10}+$/', $phone)) {
     $phoneErr = "Invalid phone number"; 
   }  
   }
  ?>
  <div class="form-login">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h1><strong>Your Information</strong></h1>
      <div class="form-group">
        <label for="name">Full name</label> <br>
        <div class="form-input">
          <!-- <span class="material-symbols-outlined">person</span> -->
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label><br>
        <div class="form-input">
          <!-- <span class="material-symbols-outlined">lock</span> -->
          <input type="phone" class="form-control" id="phone" name="phone" required>
        </div>
      </div>

      <button type="submit" class="btn btn-default" name="btn">Save</button>
      <div>
      <span class="error"> <?php echo $nameErr;?></span>
      <span class="error"> <?php echo $phoneErr;?></span>
      <!-- <span><?php if(isset($_POST['btn'])){echo $phoneErr;} ?></span> -->
        <?php
        
        
          if (isset($_POST['btn'])) {
            if($nameErr==""&&$phoneErr==""){
            $email = $_SESSION['email'];
            $connect = mysqli_connect("localhost", "root", "", "cinema") or die("abc");
            $modify = mysqli_query($connect, "UPDATE `account` SET `verify` = '1' WHERE `account`.`email` = '$email';");
            $sql = "select * from account where email='$email'";
            $result = mysqli_query($connect, $sql) or die("fail");
            $row = mysqli_fetch_assoc($result);
            $account = $row['id'];
            $insert = mysqli_query($connect, "INSERT INTO `users`( `account_id`, `full_name`, `create_at`, `phone`) VALUES ('$account','$name',NOW(),'$phone')");

            header("Location: /cinema/pages/client/login.php");
            }
            
          }
        


        ?>
        <br><br>
      </div>


    </form>
  </div>
</body>

</html>