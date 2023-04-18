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
        <span><a href="playing.php" style="color:rgb(216, 216, 191);"><b>Playing</b></a></span>
    </p>
</div><br>

<div class="container" style="color: rgb(216, 216, 191);">
    <div class="row">
        <h3>Playing Movies</h3>
    </div><br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width:260px; background: rgba(0, 0, 0, 0.3); ">
                <img class="card-img-top" src="https://i.ytimg.com/vi/-3y_dBRX_Hc/maxresdefault.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Trận chiến thời tiền sử</h5>
                    <p class="card-text">Science Fiction/Action</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:25px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/02/phim-chieu-rap-2.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Vong Nhi</h5>
                    <p class="card-text">Mystic/Horror</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://i.ytimg.com/vi/l0_xBH0vhwM/maxresdefault.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">The last god dragon</h5>
                    <p class="card-text">Children/Advent</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://i.ytimg.com/vi/33xtZdR0amI/maxresdefault.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Mèo béo siêu đẳng</h5>
                    <p class="card-text">Children/Comedy</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/02/phim-chieu-rap-6.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Babylon</h5>
                    <p class="card-text">History, Psychology</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://khenphim.com/wp-content/uploads/2022/02/MOONFALL-4-banner.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Moonfall</h5>
                    <p class="card-text">Science Fiction/Action</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://i.ytimg.com/vi/bf4yyStDWHE/maxresdefault.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Avatar</h5>
                    <p class="card-text">Science/Action</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://hocmay.vn/wp-content/uploads/2023/04/khac-tinh-cua-quy.png" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Khắc tinh của quỷ</h5>
                    <p class="card-text">Horrified</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://cinepop.com.br/wp-content/uploads/2020/03/the-flash-1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">The Flash</h5>
                    <p class="card-text">Action/Adventure</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
    </div><br><br>
</div>

<!-- PHP -->
<?php
    $so_du_lieu = 3;
    $sql = "SELECT count(*) FROM movie";
    $sqli = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($sqli);
    $so_trang = ceil($row[0]/$so_du_lieu);
  
    if(!isset($_GET['trang']))
    {
        $vtbd=0;}else{$vtbd=($_GET['trang']-1)*$so_du_lieu;
    }
    $sql = "SELECT id,names,price,photo,thuoc_menu FROM san_pham ORDER BY id DESC limit $vtbd,$so_du_lieu";
    $sqli = mysqli_query($conn,$sql);
    echo "<table>";
    while($row = mysqli_fetch_array($sqli))
    {
        echo "<tr>";
            for($i=1;$i<=3;$i++)
            {
                echo "<td align='center' width='215px' valign='top' >";
                    if($row!=false)
                    {
                        $link_photo="img/san_pham/".$row['photo'];
                        $link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$row['id'];

                        echo "<a href='$link_chi_tiet' >";
                            echo "<img src='$link_photo' width='150px' >";
                        echo "</a>";
                        echo "<br>";
                        echo "<a href='$link_chi_tiet' >";
                            echo $row['name'];
                        echo "</a>";
                        echo "<br>";
                        echo $row['price'];echo "<br>";echo "<br>";
                    }
                    else
                    {
                        echo "&nbsp;";
                    }
                echo "</td>";
                if($i!=3)
                {
                    $row=mysqli_fetch_array($tv_1);
                }
            }
        echo "</tr>";
    }
    echo "<tr>";
        echo "<td colspan='3' align='center' >";
            echo "<div class='phan_trang' >";
                for( $i=1;$i<=$so_trang;$i++)
                {
                    $link="?thamso=xuat_san_pham_2&trang=".$i;
                    echo "<a href='$link' >";
                        echo $i;echo " ";
                    echo "</a>";
                }
            echo "</div>";
        echo "</td>";
    echo "</tr>";
    echo "</table>";
?>
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