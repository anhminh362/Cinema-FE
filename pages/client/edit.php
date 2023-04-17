<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "cinema";

// Create connection
$conn = mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($conn,"UTF8");

// Check connection
if(!$conn){
     die("Connection failed: ".mysqli_connect_error());
}

    // Lấy thông tin sản phẩm để sửa
											
    // if (isset($_GET['id']))							
    // {							
    // if (isset($_GET['es'])) {							
    // echo "<script type=\"text/javascript\">alert(\"Bạn đã sửa sản phẩm thành công!\");</script>";					
    // }							
    // if (isset($_GET['ef'])) {							
    // echo "<script type=\"text/javascript\">alert(\"Sửa sản phẩm thất bại!\");</script>";							
    // }							
    // }  

    // if (isset($_GET['id']))							
    // {							
    //     $id = $_GET['id'];							
    //     $sql = "SELECT * FROM movie WHERE id = " . $id;							
    //     $sqli = mysqli_query($conn,$sql);	
    //     $row = mysqli_fetch_assoc($sqli);					
    // }	
    
    // Đẩy data lên database
    if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $avatar = $_POST['avatar'];
        $date = $_POST['premiere_date'];
        $country = $_POST['country'];
        $describe = $_POST['description'];
        $trailer = $_POST['trailer'];
        $sql = "UPDATE movie SET `name`='$name', `avatar` = '$avatar', `premiere_date` = '$date', `country` ='$country',`description` ='$describe',`trailer`=' $trailer' WHERE id = $id";
        $sqli = mysqli_query($conn,$sql);
        header('location:ad_film.php');
    }

?>