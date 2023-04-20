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
       
        $name = $_POST['name'];
        $avatar = $_POST['avatar'];
        $date = $_POST['premiere_date'];
        $country = $_POST['country'];
        $describe = $_POST['description'];
        $trailer = $_POST['trailer'];
        $sql = "INSERT INTO `movie`( `name`, `avatar`, `premiere_date`, `country`, `description`, `trailer`) 
        VALUES ('$name',' $avatar','$date','$country','$describe',' $trailer')";
            if (mysqli_query($conn, $sql)) {
                $id=mysqli_insert_id($conn);
                echo 'Record inserted successfully into movie';
                
            }
            else {
                echo "Lỗi: " . mysqli_error($conn);
            }
            $cat_add=mysqli_query($conn,"SELECT * from category");
            while($cat=mysqli_fetch_assoc($cat_add)){
                $cat_name=$cat['name'];
                if(isset($_POST["$cat_name"])){
                    $cat= $_POST["$cat_name"];
                    $result=mysqli_query($conn,"SELECT * from category where name='$cat'");
                    while($cat_movie=mysqli_fetch_assoc($result)){
                        $cat_id= $cat_movie['id'];
                        
                        if(mysqli_query($conn,"INSERT INTO `movie_cat`(`movie_id`, `cat_id`) VALUES ('$id','$cat_id')")){
                           echo  'Record inserted successfully into m_cat';
                           header('location:ad_film.php');
                        }
                        else{
                            echo "Loi". mysqli_error($conn);
                        }
                    }
                };

            }
        }
?>