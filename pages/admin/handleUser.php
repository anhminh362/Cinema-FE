<?php
  include "../client/connect.php";
  if(isset($_GET['account_id'])){
    $acc_id=$_GET['account_id'];
    echo"del";
    mysqli_query($conn,"DELETE FROM users WHERE account_id='$acc_id'");
    mysqli_query($conn,"DELETE FROM account WHERE id='$acc_id'");
    header('location:ad_user.php');
  }
  if(isset($_GET['user_id'])){
        $id = $_GET['user_id'];
        echo "block";
        echo $id;
        $query=mysqli_query($conn,"SELECT * from users where id='$id'");
        $row=mysqli_fetch_assoc($query);
       
        if($row['status']==0){
            mysqli_query($conn,"UPDATE `users` SET `status`=1 WHERE id='$id'")or die("fail");
            echo"<p>unblock already</p>";
        }
        else{
            mysqli_query($conn,"UPDATE `users` SET `status`=0 WHERE id='$id'")or die("fail");
            echo"<p>block already</p>";
        }
        header('location:ad_user.php');
    }
    ?>