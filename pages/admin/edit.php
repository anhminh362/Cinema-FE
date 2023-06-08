<?php

include "../client/connect.php";
    // Đẩy data lên database
    if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $avatar = $_POST['old_img'];
        $date = $_POST['premiere_date'];
        $country = $_POST['country'];
        $describe = $_POST['description'];
        $trailer = $_POST['trailer'];
        $cat=$_POST['cat'];
        $file=$_FILES['up_avatar'];
            $filename= $file['name'];
        var_dump('11',$_POST['old_img']);
        var_dump('f',$file['name']);
        // $cat=$_POST['cat[]'];
        if($file['name']!==""){
            
            move_uploaded_file($file['tmp_name'],"../../asset/picture/$filename");
            $avatar=$filename;
            var_dump('22',$avatar) ;
        }
        if(isset($_POST['cat'])){
        mysqli_query($conn,"DELETE from movie_cat where movie_id=$id");
        // var_dump('acbc');
        // var_dump(count($cat));
        for ($i=0;$i<count($cat);$i++){
            $cat_name=$cat[$i];
            $query = mysqli_query($conn, "SELECT id FROM category
                INNER JOIN movie_cat ON category.id = movie_cat.cat_id
                WHERE category.name='$cat_name'");
                $cats= mysqli_fetch_assoc($query);
                $cat_id= $cats['id'];
            $sql="INSERT into `movie_cat`(`movie_id`, `cat_id`) VALUES ('$id','$cat_id')";
            mysqli_query($conn,"INSERT into `movie_cat`(`movie_id`, `cat_id`) VALUES ('$id','$cat_id')");
            
        }
    }

        $sqli = mysqli_query($conn,"UPDATE movie SET `name`='$name', `avatar` = '$avatar', `premiere_date` = '$date', `country` ='$country',`description` ='$describe',`trailer`=' $trailer' WHERE id = '$id'");
        header('location:ad_film.php');
        // var_dump($id,$cat);
    }

?>