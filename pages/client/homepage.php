<?php
session_start();
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
    <link rel="stylesheet" href="../../style/homepage.css">
    <title>Document</title>
</head>
<body>
        <nav class="header">
            <div><img class="logo" src="../../asset/picture/3e1b693d-9dc1-43e7-b517-763a153989af-removebg-preview (2).png" alt=""><b class="logo_text">Moonlight</b></div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a>
                    <ul id="type-movies">
                        <li><a href="playing.php">Playing</a></li>
                        <li><a href="upcoming.php">Upcoming</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fas fa-magnifying-glass"></i></a></li>
                <?php if(isset($_SESSION['user'])){
                    ?>
                <li><a href="logout.php"><?php echo $_SESSION['user'] ?><i class="fas fa-user" style="color: aliceblue;"></i></a></li>
                <?php
                }
                else{
                    ?>
                <li><a href="login.php">Login <i class="fas fa-user" style="color: aliceblue;"></i></a></li>

                <?php
                }
                 ?>
            </ul>
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "cinema";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);
        mysqli_set_charset($conn, 'UTF8');
        // session_start();
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        $query="SELECT * FROM `movie` WHERE id=1";
        $result1=mysqli_query($conn,$query)or die("Error");
        $row1 =mysqli_fetch_assoc($result1);
        
?>
<?php
//     $query = mysqli_query($connect, "SELECT * FROM movie_cat WHERE movie_id='$id'");
//     while ($cat = mysqli_fetch_assoc($query)) {
//     $cat_id = $cat['cat_id'];
//     $sql1 = mysqli_query($connect, "SELECT * FROM category WHERE id='$cat_id'");
//     while ($cat = mysqli_fetch_assoc($sql1)) {
//     echo  "<button class='type-tiem'>".$cat['name']."</button> &nbsp;";
//     }
// }
?>

        <div id="slider" class="carousel carousel-light slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                  <div class="img" style="background-image: linear-gradient(to right, rgba(0, 0, 6, 1),rgba(0, 0, 0, 0.3)),url('https://cdnimg.vietnamplus.vn/uploaded/bokttj/2023_01_02/avatar_the_way_of_water.jpg')"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-movie"><?php  echo $row1['name'];?>
                     </h3>
                    <p class="text-movies">
                        Avatar is a Hollywood blockbuster.The film was carefully<br>
                        invested in both technical effects and content when the <br>
                        script was made by director James Cameron, becoming a <br>
                        billion-dollar brand movie. <br>
                    <a class="more-details" href="">More Details</a></p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="img" style="background-image: linear-gradient(to right, rgba(0, 0, 6, 1),rgba(0, 0, 0, 0.3)), url('https://touchcinema.com/storage/phim-gia-dinh-addams/phim-gia-dinh-addams.jpg')"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-movie"><?php  
                        $query="SELECT * FROM `movie` WHERE id=2";
                        $result2=mysqli_query($conn,$query)or die("Error");
                        $row2 =mysqli_fetch_assoc($result2);
                     if (isset($row2)) { 
                            echo $row2['name'];                         
                        } 
                        
                     ?></h3>
                    <p class="text-movies">
                        Wednesday is an American teen horror, comedy and supernatural<br>
                        television series based on the character Wednesday - the "dark"<br>
                        eldest daughter of the Addams family. The film was co-created<br>
                        by Alfred Gough and Miles Millar. <br>
                        <a class="more-details" href="">More Details</a>
                    </p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <div class="img" style="background-image: linear-gradient(to right, rgba(0, 0, 6, 1),rgba(0, 0, 0, 0.3)),url('https://images4.alphacoders.com/119/1199746.jpg');"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-movie"><?php  $query="SELECT * FROM `movie` WHERE id=3";
                                $result3=mysqli_query($conn,$query)or die("Error");
                                 $row3 =mysqli_fetch_assoc($result3);
                     if (isset($row3)) { 
                            echo $row3['name'];                         
                        }              
                     ?></h3>
                    <p class="text-movies">
                        It is a long established fact that a reader will be readable<br>
                        content of a page when looking at its layout. The point of using<br>
                        Lorem Ipsum is that it has a more-or-less normal distribution of letters.<br>
                        The film was the second big screen adaptation of Christie's novel, <br>
                        <a class="more-details" href="">More Details</a>
                    </p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
     <!-- Body -->
     <br><br>
     <h5 class="text-title">Trending</h5>
    <div class="direction">
        <button id="prev"><b><</b></button>
        <button id="next"><b>></b></button>
    </div>
    <?php 
    $query="SELECT * FROM `movie` WHERE id=4";
    $result4=mysqli_query($conn,$query)or die("Error");
    $row4 =mysqli_fetch_assoc($result4); 
    ?>
        <div id="formlist">
            <div id="list">
                <div class="item">
                    <img src="../../asset/picture/<?php  echo $row4['avatar'];?>" alt="" class="movies">
                    <div class="overlay">
                        <h5><?php echo $row4['name']?></h5>
                        <p>
                    <?php
                    $id=1;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }
                    ?>
                    </p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
        <?php 
        $query="SELECT * FROM `movie` WHERE id=5        ";
        $result5=mysqli_query($conn,$query)or die("Error");
        $row5 =mysqli_fetch_assoc($result5); 
        ?>
                <div class="item">
                    <img src="../../asset/picture/<?php  echo $row5['avatar'];?>" alt="" class="movies">
                    <div class="overlay">
                        <h5><?php echo $row5['name']?></h5>
                        <p><?php
                    $id=2;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <?php 
        $query="SELECT * FROM `movie` WHERE id=6        ";
        $result6=mysqli_query($conn,$query)or die("Error");
        $row6 =mysqli_fetch_assoc($result6); 
        ?>
                <div class="item">
                <img src="../../asset/picture/<?php  echo $row6['avatar'];?>" alt="" class="movies">
                    <div class="overlay">
                        <h5><?php echo $row6['name'] ?></h5>
                        <p><?php
                    $id=3;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <?php 
        $query="SELECT * FROM `movie` WHERE id=7        ";
        $result7=mysqli_query($conn,$query)or die("Error");
        $row7 =mysqli_fetch_assoc($result7); 
        ?>
                <div class="item">
                <img src="../../asset/picture/<?php  echo $row7['avatar'];?>" alt="" class="movies">
                    <div class="overlay">
                        <h5><?php echo $row7['name'] ?></h5>                        
                        <p><?php
                    $id=4;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <?php 
        $query="SELECT * FROM `movie` WHERE id=8        ";
        $result8=mysqli_query($conn,$query)or die("Error");
        $row8 =mysqli_fetch_assoc($result8); 
        ?>
                <div class="item">
                <img src="../../asset/picture/<?php  echo $row8['avatar'];?>" alt="" class="movies">                    
                <div class="overlay">
                        <h5><?php echo $row8['name'] ?></h5>                        
                        <p><?php
                    $id=5;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <?php 
        $query="SELECT * FROM `movie` WHERE id=9";
        $result9=mysqli_query($conn,$query)or die("Error");
        $row9 =mysqli_fetch_assoc($result9); 
        ?>
                <div class="item">
                <img src="../../asset/picture/<?php  echo $row9['avatar'];?>" alt="" class="movies">                    
                <div class="overlay">
                    <h5><?php echo $row9['name'] ?></h5>                        
                    <p><?php
                    $id=6;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <?php 
        $query="SELECT * FROM `movie` WHERE id=10 ";
        $result10 =mysqli_query($conn,$query)or die("Error");
        $row10  =mysqli_fetch_assoc($result10 ); 
        ?>
                <div class="item">
                <img src="../../asset/picture/<?php  echo $row10['avatar'];?>" alt="" class="movies">                    
                <div class="overlay">
                    <h5><?php echo $row10['name'] ?></h5>                        
                    <p><?php
                    $id=7;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
            </div>
        </div>
    <script>
        document.getElementById('next').onclick = function(){
        const widthItem = document.querySelector('.item').offsetWidth;
        document.getElementById('formlist').scrollLeft += widthItem;
        }
        document.getElementById('prev').onclick = function(){
        const widthItem = document.querySelector('.item').offsetWidth;
        document.getElementById('formlist').scrollLeft -= widthItem;
        }
    </script>


    <h5 class="text-title">New</h5><hr>
            <div class="direction1">
                <button id="prev1"><b><</b></button>
                <button id="next1"><b>></b></button>
            </div>
             <div id="formlist1">
                 <div id="list1">
                      <?php 
    $query="SELECT * FROM `movie` WHERE id=11";
    $result11=mysqli_query($conn,$query)or die("Error");
    $row11 =mysqli_fetch_assoc($result11); 
    ?>
                     <div class="item1">
                     <img src="../../asset/picture/<?php  echo $row11['avatar'];?>" alt="" class="movies1">                    
                         <div class="overlay1">
                         <h5><?php echo $row11['name'] ?></h5>                        
                            <p><?php
                    $id=8;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                      <?php 
    $query="SELECT * FROM `movie` WHERE id=12";
    $result12=mysqli_query($conn,$query)or die("Error");
    $row12 =mysqli_fetch_assoc($result12); 
    ?>
                     <div class="item1">
                     <img src="../../asset/picture/<?php  echo $row12['avatar'];?>" alt="" class="movies1">                    
                         <div class="overlay1">
                         <h5><?php echo $row12['name'] ?></h5>                        
                            <p><?php
                    $id=9;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                      <?php 
    $query="SELECT * FROM `movie` WHERE id=13";
    $result13=mysqli_query($conn,$query)or die("Error");
    $row13 =mysqli_fetch_assoc($result13); 
    ?>
                     <div class="item1">
                     <img src="../../asset/picture/<?php  echo $row13['avatar'];?>" alt="" class="movies1">                    
                         <div class="overlay1">
                         <h5><?php echo $row13['name'] ?></h5>                        
                           <p><?php
                    $id=10;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                      <?php 
    $query="SELECT * FROM `movie` WHERE id=14";
    $result14=mysqli_query($conn,$query)or die("Error");
    $row14 =mysqli_fetch_assoc($result14); 
    ?>
                     <div class="item1">
                     <img src="../../asset/picture/<?php  echo $row14['avatar'];?>" alt="" class="movies1">                    
                         <div class="overlay1">
                         <h5><?php echo $row14['name'] ?></h5>                        
                            <p><?php
                    $id=11;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                      <?php 
    $query="SELECT * FROM `movie` WHERE id=15";
    $result15=mysqli_query($conn,$query)or die("Error");
    $row15 =mysqli_fetch_assoc($result15); 
    ?>
                     <div class="item1">
                     <img src="../../asset/picture/<?php  echo $row15['avatar'];?>" alt="" class="movies1">                    
                         <div class="overlay1">
                         <h5><?php echo $row15['name'] ?></h5>                        
                            <p><?php
                    $id=12;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                      <?php 
    $query="SELECT * FROM `movie` WHERE id=16";
    $result16=mysqli_query($conn,$query)or die("Error");
    $row16 =mysqli_fetch_assoc($result16); 
    ?>
                     <div class="item1">
                     <img src="../../asset/picture/<?php  echo $row16['avatar'];?>" alt="" class="movies1">                    
                         <div class="overlay1">
                         <h5><?php echo $row16['name'] ?></h5>                        
                            <p><?php
                    $id=13;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                      <?php 
    $query="SELECT * FROM `movie` WHERE id=17";
    $result17=mysqli_query($conn,$query)or die("Error");
    $row17 =mysqli_fetch_assoc($result17); 
    ?>
                     <div class="item1">
                     <img src="../../asset/picture/<?php  echo $row17['avatar'];?>" alt="" class="movies1">                    
                         <div class="overlay1">
                         <h5><?php echo $row17['name'] ?></h5>                        
                            <p><?php
                    $id=14;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                 </div>
             </div>
         <script>
             document.getElementById('next1').onclick = function(){
             const widthItem = document.querySelector('.item1').offsetWidth;
             document.getElementById('formlist1').scrollLeft += widthItem;
             }
             document.getElementById('prev1').onclick = function(){
             const widthItem = document.querySelector('.item1').offsetWidth;
             document.getElementById('formlist1').scrollLeft -= widthItem;
             }
         </script>

    <div>
    <!--  video -->
    <video playsinline autoplay muted loop class="trailer">
        <source src="../../asset/picture/trailer.mp4" type="video/mp4">
    </video>
    </div>
    <h5 class="text-title">Upcoming Movies</h5>
        <div class="direction2">
            <button id="prev2"><b><</b></button>
            <button id="next2"><b>></b></button>
        </div>
        <div id="formlist2">
            <div id="list2">
                 <?php 
    $query="SELECT * FROM `movie` WHERE id=18";
    $result18=mysqli_query($conn,$query)or die("Error");
    $row18 =mysqli_fetch_assoc($result18); 
    ?>
                <div class="item2">
                <img src="../../asset/picture/<?php  echo $row18['avatar'];?>" alt="" class="movies2">                    
                    <div class="overlay2">
                    <h5><?php echo $row18['name'] ?></h5>                        
                        <p><?php
                    $id=15;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                 <?php 
    $query="SELECT * FROM `movie` WHERE id=19";
    $result19=mysqli_query($conn,$query)or die("Error");
    $row19 =mysqli_fetch_assoc($result19); 
    ?>
                <div class="item2">
                <img src="../../asset/picture/<?php  echo $row19['avatar'];?>" alt="" class="movies2">                    
                    <div class="overlay2">
                    <h5><?php echo $row19['name'] ?></h5>                        
                        <p><?php
                    $id=16;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                 <?php 
    $query="SELECT * FROM `movie` WHERE id=20";
    $result20=mysqli_query($conn,$query)or die("Error");
    $row20 =mysqli_fetch_assoc($result20); 
    ?>
                <div class="item2">
                <img src="../../asset/picture/<?php  echo $row20['avatar'];?>" alt="" class="movies2">                    
                    <div class="overlay2">
                    <h5><?php echo $row20['name'] ?></h5>                        
                        <p><?php
                    $id=17;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                 <?php 
    $query="SELECT * FROM `movie` WHERE id=21";
    $result21=mysqli_query($conn,$query)or die("Error");
    $row21 =mysqli_fetch_assoc($result21); 
    ?>
                <div class="item2">
                <img src="../../asset/picture/<?php  echo $row21['avatar'];?>" alt="" class="movies2">                    
                    <div class="overlay2">
                    <h5><?php echo $row21['name'] ?></h5>                        
                        <p><?php
                    $id=18;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                 <?php 
    $query="SELECT * FROM `movie` WHERE id=22";
    $result22=mysqli_query($conn,$query)or die("Error");
    $row22 =mysqli_fetch_assoc($result22); 
    ?>
                <div class="item2">
                <img src="../../asset/picture/<?php  echo $row22['avatar'];?>" alt="" class="movies2">                    
                    <div class="overlay2">
                    <h5><?php echo $row22['name'] ?></h5>                        
                        <p><?php
                    $id=19;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                 <?php 
    $query="SELECT * FROM `movie` WHERE id=23";
    $result23=mysqli_query($conn,$query)or die("Error");
    $row23 =mysqli_fetch_assoc($result23); 
    ?>
                <div class="item2">
                <img src="../../asset/picture/<?php  echo $row23['avatar'];?>" alt="" class="movies2">                    
                    <div class="overlay2">
                    <h5><?php echo $row23['name'] ?></h5>                        
                        <p><?php
                    $id=20;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                 <?php 
    $query="SELECT * FROM `movie` WHERE id=24";
    $result24=mysqli_query($conn,$query)or die("Error");
    $row24 =mysqli_fetch_assoc($result24); 
    ?>
                <div class="item2">
                <img src="../../asset/picture/<?php  echo $row24['avatar'];?>" alt="" class="movies2">                    
                    <div class="overlay2">
                    <h5><?php echo $row24['name'] ?></h5>                        
                        <p><?php
                    $id=21;
                    $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                    while ($cat = mysqli_fetch_assoc($query)) {
                    $cat_id = $cat['cat_id'];
                    $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                    while ($cat = mysqli_fetch_assoc($sql1)) {
                        echo  "<span'>".$cat['names']."</span> &nbsp;";
                    }
                }?></p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                 </div>
            </div>
            </div>
        <script>
            document.getElementById('next2').onclick = function(){
            const widthItem = document.querySelector('.item2').offsetWidth;
            document.getElementById('formlist2').scrollLeft += widthItem;
            }
            document.getElementById('prev2').onclick = function(){
            const widthItem = document.querySelector('.item2').offsetWidth;
            document.getElementById('formlist2').scrollLeft -= widthItem;
            }
        </script>
    <!-- FOOTER -->
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