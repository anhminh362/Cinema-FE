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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/playing.css">
    <title>Document</title>
</head>
<body>
        <nav class="header">
            <div><img class="logo" src="../../asset/picture/3e1b693d-9dc1-43e7-b517-763a153989af-removebg-preview (2).png" alt=""><b class="logo_text">Moonlight</b></div>
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#">Movies</a>
                    <ul id="type-movies">
                        <li><a href="playing.php">Playing</a></li>
                        <li><a href="upcoming.php">Upcoming</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fas fa-magnifying-glass"></i></a></li>
                <li><a href="login.php">Login <i class="fas fa-user" style="color: aliceblue;"></i></a></li>
            </ul>
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>

</body>  
<div style="border-bottom:1px solid rgb(216, 216, 191); ">
    <p style="position: relative; font-size: 17px; margin:8px; padding-left:7rem; ">
        <a href="homepage.php"><i class="fa-sharp fa-solid fa-house" style="color:rgb(216, 216, 191);"></i></a><i class="fa-solid fa-chevron-right" style="padding-left:0.5rem; padding-right:0.5rem; color:#7c2f33;"></i>
        <span><a href="#" style="color:rgb(216, 216, 191); text-decoration:none; ">Movie</a><i class="fa-solid fa-chevron-right" style="padding-left:0.5rem; padding-right:0.5rem; color:#7c2f33;"></i></span>
        <span><a href="upcoming.php" style="color:rgb(216, 216, 191);"><b>Upcoming</b></a></span>
    </p>
</div><br>

<div class="container" style="color: rgb(216, 216, 191);">
    <div class="row">
        <h3>Upcoming Movies</h3>
    </div><br>
 <?php
        $sql = "SELECT movie.name AS movie_name, GROUP_CONCAT(category.name SEPARATOR ', ') AS cat_names, movie.avatar AS avatar
        FROM movie
        LEFT JOIN movie_cat ON movie.id = movie_cat.movie_id
        LEFT JOIN category ON movie_cat.cat_id = category.id WHERE movie.premiere_date > NOW()
        GROUP BY movie.id";
        $sqli = mysqli_query($conn, $sql);
        if (mysqli_num_rows($sqli) > 0) {
        echo '<div class="row">';
        while ($row = mysqli_fetch_assoc($sqli)) {
            echo '<div class="col-md-3">';
            ?>
            <div class="card" style="width:260px; background: rgba(0, 0, 0, 0.3); ">
                <img class="card-img-top" src="<?php echo $row['avatar']; ?>" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['movie_name']; ?></h5>
                    <p class="card-text">Categories: <?php
                    $cat_names = explode(', ', $row['cat_names']);
                    foreach ($cat_names as $cat_name) {
                        echo '<span class="badge badge-primary mr-1">'. $cat_name . '</span>';
                    }
                    ?></p>
                    <p>
                        <a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                        <span><a href="#" class="btn btn-success" style="margin-left:25px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span>
                    </p>
                </div>
            </div>  <br>  
            <?php
            echo '</div>';
        }
        echo '</div>';
        }   
        else {
            echo "<script>
                    alert(\"Không có phim nào phù hợp!\");
                </script>";  
    }  
            // }  
    
?>
</div>
<!--  -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul>
                <li><div><img class="logo" src="../../asset/picture/3e1b693d-9dc1-43e7-b517-763a153989af-removebg-preview (2).png" alt="">Moonlight</div></li>
                <li><p class="text">We guarantee quality and satisfaction when coming to our movie ticket booking site.</p> </li>
                </ul>              
                <div class="contact_icon">
                    <i class="fa-brands fa-square-facebook"></i> 
                    <i class="fa-brands fa-square-twitter" ></i>
                    <i class="fa-brands fa-square-whatsapp" ></i>
                    <i class="fa-brands fa-square-instagram"></i>
                </div>                  
            </div>
            <div class="col-sm-3"><br>
                <h5 class="text-footer">Quick Link</h4>
                <ul>
                    <li><a href="homepage.php">About Us</a></li>
                    <li><a href="homepage.php">Movies</a></li>
                    <li><a href="homepage.php">Partner</a></li>
                    <li><a href="homepage.php">Help</a></li>
                </ul>
            </div>
            <div class="col-sm-3"><br>
                <h5 class="text-footer">Important</h5>
                <ul>
                    <li><a href="homepage.php">Support</a></li>
                    <li><a href="homepage.php">FAQ</a></li>
                    <li><a href="homepage.php">Check</a></li>
                    <li><a href="homepage.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-sm-3"><br>
                    <h5 class="text-footer">Contact</h5>
                    <ul>
                        <li><p class="text">Subscribe our newsletter to get latest update & news.</p></li>
                        <li><input type="text" name="Send" class="Send" placeholder="   Enter Email">
                        <button type="submit" class="btn btn-primary">Send</button></li>
                    </ul>
            </div>
        </div>
    </div>
</div>
</footer>
</body> 
</html>
