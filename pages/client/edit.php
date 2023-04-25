<?php

include "connect.php";
    // Đẩy data lên database
    if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $avatar = $_POST['avatar'];
        $date = $_POST['premiere_date'];
        $country = $_POST['country'];
        $describe = $_POST['description'];
        $trailer = $_POST['trailer'];
        // $cat=$_POST['cat[]'];
        if(isset($_FILES['up_avatar'])){
            $file=$_FILES['up_avatar'];
            $filename= $file['name'];
            move_uploaded_file($file['tmp_name'],"../../asset/picture/$filename");
            $avatar=$filename;
        }
        
        $sql = "UPDATE movie SET `name`='$name', `avatar` = '$avatar', `premiere_date` = '$date', `country` ='$country',`description` ='$describe',`trailer`=' $trailer' WHERE id = '$id'";
        $sqli = mysqli_query($conn,$sql);
        header('location:ad_film.php');
    }

?>