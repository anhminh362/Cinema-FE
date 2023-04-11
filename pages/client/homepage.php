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
                        <li><a href="">Playing</a></li>
                        <li><a href="">Upcoming</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="fas fa-magnifying-glass"></i></a></li>
                <li><a href="login.php">Login <i class="fas fa-user" style="color: aliceblue;"></i></a></li>
            </ul>
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
        <div id="slider" class="carousel carousel-light slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                  <div class="img" style="background-image: linear-gradient(to right, rgba(0, 0, 6, 1),rgba(0, 0, 0, 0.3)),url('https://cdnimg.vietnamplus.vn/uploaded/bokttj/2023_01_02/avatar_the_way_of_water.jpg');"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-movie">AVATAR</h3>
                    <p class="text-movies">
                        Avatar is a Hollywood blockbuster.The film was carefully<br>
                        invested in both technical effects and content when the <br>
                        script was made by director James Cameron, becoming a <br>
                        billion-dollar brand movie. <br>
                    <a class="more-details" href="">More Details</a></p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <div class="img" style="background-image: linear-gradient(to right, rgba(0, 0, 6, 1),rgba(0, 0, 0, 0.3)),url('https://touchcinema.com/storage/phim-gia-dinh-addams/phim-gia-dinh-addams.jpg');"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-movie">WEDNESDAY</h3>
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
                    <h3 class="text-movie">DEATH ON NILE</h3>
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
        <div id="formlist">
            <div id="list">
                <div class="item">
                    <img src="https://i.ytimg.com/vi/l0_xBH0vhwM/maxresdefault.jpg" alt="" class="movies">
                    <div class="overlay">
                        <h5>the last god dragon</h5>
                        <p>Children/Advent</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item">
                    <img src="https://congluan-cdn.congluan.vn/files/content/2022/04/27/301-10411099.jpg" alt="" class="movies">
                    <div class="overlay">
                        <h5>Morbius</h5>
                        <p>Action/Fantasy</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item">
                    <img src="https://www.cgv.vn/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/t/e/teaser_cgtqk_640x396.jpg" alt="" class="movies">
                    <div class="overlay">
                        <h5>Cô Gái Từ Quá Khứ</h5>
                        <p>Children/Advent</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item">
                    <img src="https://i.ytimg.com/vi/33xtZdR0amI/maxresdefault.jpg" alt="" class="movies">
                    <div class="overlay">
                        <h5>Mèo Béo Siêu Đẳng</h5>
                        <p>Children/Comedy</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item">
                    <img src="https://genk.mediacdn.vn/139269124445442048/2022/12/27/1-16720443428991073681271-1672126337007-16721263374062074075884.jpg" alt="" class="movies">
                    <div class="overlay">
                        <h5>Harry Potter</h5>
                        <p>Children/Advent</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item">
                    <img src="https://canhrau.com/wp-content/uploads/2021/12/top-phim-chieu-rap-hay-nhat-moi-thoi-dai-hinh-9.jpg" alt="" class="movies">
                    <div class="overlay">
                        <h5>Em của thời niên thiếu</h5>
                        <p>Drama/Romance</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item">
                    <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/02/phim-chieu-rap-2.jpg" alt="" class="movies">
                    <div class="overlay">
                        <h5>Vong nhi</h5>
                        <p>Mystic/Horror</p>
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
                     <div class="item1">
                         <img src="https://kenh14cdn.com/thumb_w/620/203336854389633024/2023/3/26/photo-1-16798021860451966063186.jpg" alt="" class="movies1">
                         <div class="overlay1">
                            <h5>Tri Kỷ</h5>
                            <p>Suspense, Psychology</p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                     <div class="item1">
                         <img src="https://newsmd2fr.keeng.net/tiin/archive/imageslead/2023/03/29/thumb4_5dcf561fb49e1a9b409e25b2cde7a7e4.jpg" alt="" class="movies1">
                         <div class="overlay1">
                            <h5>Đảo tội ác</h5>
                            <p>Horrified</p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                     <div class="item1">
                         <img src="https://i.ytimg.com/vi/-3y_dBRX_Hc/maxresdefault.jpg" alt="" class="movies1">
                         <div class="overlay1">
                            <h5>Trận chiến thời tiền sử</h5>
                            <p>Science Fiction/Action</p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                     <div class="item1">
                         <img src="https://khenphim.com/wp-content/uploads/2022/02/MOONFALL-4-banner.jpg" alt="" class="movies1">
                         <div class="overlay1">
                            <h5>Moonfall</h5>
                            <p>Science Fiction/Action</p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                     <div class="item1">
                         <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/02/phim-chieu-rap-6.jpg" alt="" class="movies1">
                         <div class="overlay1">
                            <h5>Babylon</h5>
                            <p>History, Psychology, Comedy</p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                     <div class="item1">
                         <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/02/phim-chieu-rap-4.jpg" alt="" class="movies1">
                         <div class="overlay1">
                            <h5>M3gan</h5>
                            <p>Horrified</p>
                            <button type="button" class="btn btn-success">More Details</button>
                         </div>
                     </div>
                     <div class="item1">
                         <img src="https://s.yimg.com/ny/api/res/1.2/JK2Co4CUbuMfsA54VAwPlA--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQ4Mg--/https://s.yimg.com/os/creatr-uploaded-images/2023-01/852bb1e0-9812-11ed-bffa-402342adaf95" alt="" class="movies1">
                         <div class="overlay1">
                            <h5>Dune 2</h5>
                            <p>Science Fiction/Adventure</p>
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
                <div class="item2">
                    <img src="https://www.cgv.vn/media/catalog/product/cache/1/image/1800x/71252117777b696995f01934522c402d/t/h/thumb-_q.jpg" alt="" class="movies2">
                    <div class="overlay2">
                        <h5>Động quỷ</h5>
                        <p>Horrified</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item2">
                    <img src="https://lh3.googleusercontent.com/Vp_YCC8pHCZJsB-bifndGRBs88QX0fFLv3Y_wT6nh_8oPyTT2DyZ9LD3hsX88FpOKqfDaUtzgjhtmA" alt="" class="movies2">
                    <div class="overlay2">
                        <h5>Xứ Sở Các Nguyên Tố</h5>
                        <p>Family, Comedy, Animation</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item2">
                    <img src="https://vov.vn/sites/default/files/styles/front_large/public/2020-09/z_firstlook_poster_qhnd.jpg" alt="" class="movies2">
                    <div class="overlay2">
                        <h5>Quỳnh Hoa Nhất Dạ</h5>
                        <p>History</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item2">
                    <img src="https://i.ytimg.com/vi/WWWDskI46Js/hq720.jpg" alt="" class="movies2">
                    <div class="overlay2">
                        <h5>Quái Thú Nổi Dậy</h5>
                        <p>Action, Sci-Fi, Adventure</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item2">
                    <img src="https://cdn.sforum.vn/sforum/wp-content/uploads/2023/03/phim-khac-tinh-cua-quy-thumb-1.jpg" alt="" class="movies2">
                    <div class="overlay2">
                        <h5>Khắc Tinh Của quỷ</h5>
                        <p>Horrified</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item2">
                    <img src="https://i.ytimg.com/vi/KzmMXT0sHWo/maxresdefault.jpg" alt="" class="movies2">
                    <div class="overlay2">
                        <h5>Troll 3</h5>
                        <p>Comedy, Animation</p>
                        <button type="button" class="btn btn-success">More Details</button>
                    </div>
                </div>
                <div class="item2">
                    <img src="https://thegioidienanh.vn/stores/news_dataimages/anhvu/012022/08/12/0932_F9-ava-2-cuong-phim.jpg?rt=20220108120952" alt="" class="movies2">
                    <div class="overlay2">
                        <h5>Fast and Furiou</h5>
                        <p>Action/Adventure</p>
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
                            <li><a href="">About Us</a></li>
                            <li><a href="">Movies</a></li>
                            <li><a href="">Partner</a></li>
                            <li><a href="">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3"><br>
                        <h5 class="text-footer">Important</h5>
                        <ul>
                            <li><a href="">Support</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Check</a></li>
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