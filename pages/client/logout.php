<?php
session_start();
if(isset($_SESSION['user'])){
    session_unset();
    header("Location: http://localhost:8080/cinema/pages/client/homepage.php");

}
?>