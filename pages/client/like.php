<?php
session_start();
include "connect.php";
if(isset($_GET['m_id'])){
    if(isset($_SESSION['user_id'])){
        $m_id=$_GET['m_id'];
        $user_id=$_SESSION['user_id'];
        var_dump($m_id,$user_id);
        mysqli_query($conn,"INSERT into likes (`movie_id`, `user_id`) VALUES ('$m_id','$user_id')");
        header("Location: http://localhost:8080/cinema/pages/client/homepage.php");
    }
    else{
        // echo 1;
        echo 
        "<script>
            alert(\"Please sign up your account: \");
            window.location='http://localhost:8080/cinema/pages/client/login.php';
        </script>"; 

    }
}
?>