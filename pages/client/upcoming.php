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
                 ?>            </ul>
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
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width:260px; background: rgba(0, 0, 0, 0.3); ">
                <img class="card-img-top" src="https://www.cgv.vn/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/t/h/thumb-_q.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Động Quỷ</h5>
                    <p class="card-text">Horrified</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:25px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://lh3.googleusercontent.com/Vp_YCC8pHCZJsB-bifndGRBs88QX0fFLv3Y_wT6nh_8oPyTT2DyZ9LD3hsX88FpOKqfDaUtzgjhtmA" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Xứ Sở Các Nguyên Tố</h5>
                    <p class="card-text">Comedy, Animation</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://gocphim.net/wp-content/uploads/2023/04/maxresdefault-1-4.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Âm Vực Chết</h5>
                    <p class="card-text">Horrified</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://images2.thanhnien.vn/528068263637045248/2023/2/11/ovffxtrlathumbnailffxhd-16760785682151893462097.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Fast And Furious 10</h5>
                    <p class="card-text">Action, Crime</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://i.ytimg.com/vi/WWWDskI46Js/hq720.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Quái Thú Nổi Dậy</h5>
                    <p class="card-text">Action, Adventure</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://www.cgv.vn/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/1/9/1920x1080_3_.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Con Nhót Mót Chồng</h5>
                    <p class="card-text">Comedy, Love</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://i.ytimg.com/vi/OobBWy3avUo/maxresdefault.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Lật Mặt 6</h5>
                    <p class="card-text">Action, Comedy</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://i.ytimg.com/vi/KzmMXT0sHWo/maxresdefault.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Troll 3</h5>
                    <p class="card-text">Comedy, Animation</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://vov.vn/sites/default/files/styles/front_large/public/2020-09/z_firstlook_poster_qhnd.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">Quỳnh Hoa Nhất Dạ</h5>
                    <p class="card-text">History</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card" style="width:250px; background: rgba(0, 0, 0, 0.3);">
                <img class="card-img-top" src="https://bloganchoi.com/wp-content/uploads/2023/02/phim-nang-tien-ca-hay-nhat-mermaid-movies-1.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h5 class="card-title">The Little Mermaid</h5>
                    <p class="card-text">Fantasy/Music</p>
                    <p><a href="#" class="btn btn-primary" style="font-size:12px; width:5.5rem; height:1.9rem"><i class='fas fa-thumbs-up'></i> Like 56</a>
                    <span><a href="#" class="btn btn-success" style="margin-left:19px; width:6.5rem; height:2.2rem; font-size:13px; ">More Details</a></span></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
    </div><br><br>
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