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


<div class="form-login">
    <form method="post">
    <h1><strong>Your Information</strong></h1>
      <div class="form-group">
        <label for="name" >Full name</label> <br>
        <div class="form-input">
            <!-- <span class="material-symbols-outlined">person</span> -->
            <input type="text" class="form-control" id="name" name="name"  >
        </div>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label><br>
        <div class="form-input">
            <!-- <span class="material-symbols-outlined">lock</span> -->
            <input type="phone" class="form-control" id="phone" name="phone">
        </div>
      </div>
      
      <button type="submit" class="btn btn-default" name="btn">Save</button>
     <div>
     
    <br><br>
     </div>

     
    </form>
</div>
</body>
</html>