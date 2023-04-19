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
  
   if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $avatar = $_POST['avatar'];
        $date = $_POST['premiere_date'];
        $country = $_POST['country'];
        $describe = $_POST['description'];
        $trailer = $_POST['trailer'];
        $sql = "INSERT INTO `movie`( `name`, `avatar`, `premiere_date`, `country`, `description`, `trailer`) 
        VALUES ('$name',' $avatar','$date','$country','$describe',' $trailer')";
            // if (mysqli_query($conn, $sql)) {

            //     echo "<script> 
            //     alert ('Thêm thành công');
            //     window.location.href = 'ad_film.php';
            //     </script>";
            //     // header('location:ad_film.php');
            // } else {
            //     echo "Lỗi: " . mysqli_error($conn);
            // }
        }
?>