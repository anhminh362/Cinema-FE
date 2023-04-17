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
   
      //  echo "Connected Successfully !";

    $id = $_GET['id'];
    // Truy vấn SQL để xóa sản phẩm
    // $sql = "SET FOREIGN_KEY_CHECKS=0;";
    // mysqli_query($conn,$sql);
    $sql = "DELETE FROM movie_cat WHERE movie_id =$id";
    mysqli_query($conn,$sql);
    $sql ="DELETE FROM movie_sub WHERE movie_id =$id";
    mysqli_query($conn,$sql);

    $sql = "DELETE FROM schedule WHERE movie_id= $id";
    mysqli_query($conn,$sql);

    $sql = "DELETE FROM movie WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header('location:ad_film.php');
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
?>