<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail_Movies</title>
    <!-- link CSS -->
    <link href='../../style/detailmovie.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <?php
    function movietime($h1, $m1, $h2, $m2)
    {
        if ($m2 >= $m1) {
            $m = $m2 - $m1;
        } else {
            $m = $m2 + 60 - $m1;
            $h1 += 1;
        }
        if ($h2 >= $h1) {
            $h = $h2 - $h1;
        } else {
            $h = 24 + $h2 - $h1;
        }
        return $h . "h " . $m . "min";
    }


    
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $connect = mysqli_connect("localhost", "root", "", "cinema") or die("abc");
        $sql = "SELECT * from movie where id='$id'";
        $result = mysqli_query($connect, $sql) or die("fail");
        $row = mysqli_fetch_array($result);
    ?>
    <?php include 'header.php'?>
<img class ='background_img' src="../../asset/picture/<?php echo $row['avatar'] ?>" alt="">
    <!-- Background-img -->
    <div class="background-img">
        <!-- Content -->
        <div class="container">
            <br><br><br><br><br><br>
            <div class="row">

                    <div class="col-sm-4">
                        <img class="card-item" src="../../asset/picture/<?php echo $row['avatar'] ?>" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h1 class="title-film"><?php echo $row['name'] ?></h1>
                        <!-- icon -->
                        <div class="row">
                            <div class="col-sm-3">
                                </svg>
                                <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
                                <i class="fi fi-rs-star"> 7.4</i>
                            </div>
                            <div class="col-sm-3">
                                <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
                                <i class="fi fi-br-clock-five">
                                    <?php 
                                    $time = "SELECT * from schedule where movie_id='$id' limit 1 ";
                                    
                                    $result1 = mysqli_query($connect, $time);
                                    if(mysqli_num_rows($result1)>0){
                                    $row1 = mysqli_fetch_assoc($result1);
                                    $h_begin = date("H", strtotime($row1['time_begin']));
                                    $h_end = date("H", strtotime($row1['time_end']));
                                    $m_begin = date("i", strtotime($row1['time_begin']));
                                    $m_end = date("i", strtotime($row1['time_end']));
                                    echo movietime($h_begin, $m_begin, $h_end, $m_end); 
                                    }
                                    else{
                                        echo "unknown";
                                    }
                                    ?> 
                                </i>
                            </div>
                            <div class="col-sm-3">
                                <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
                                <i class="fi fi-rr-social-network"> 90</i>
                            </div>
                            <div class="col-sm-3">
                                <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
                                <i class="fi fi-ss-calendar"> <?php $date = $row['premiere_date'];
                                                                echo date('Y', strtotime($date)) ?></i>
                            </div>
                        </div> <br>
                        <div class="row">
                            <p class="text-detail">
                                <?php echo $row['description'] ?>
                            </p>
                        </div> <br><br><br>
                        <div class="row">
                            <div class="col-sm-4">
                                <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
                                <i class="fi fi-sr-flag-alt"> Country</i>
                            </div>
                            <div class="col-sm-4">
                                <button class="contry-item"> <?php echo $row['country'] ?></button>
                            </div>
                            <div class="col-sm-4">
                                <!--  -->
                            </div>
                        </div> <br><br>
                        <div class="row">
                            <div class="col-sm-4">
                                <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
                                <i class="fi fi-ss-tags"> Genres</i>
                            </div>
                            <div class="col-sm-6">
                                <?php
                                    $query = mysqli_query($connect, "SELECT * FROM movie_cat WHERE movie_id='$id'");
                                    while ($cat = mysqli_fetch_assoc($query)) {
                                    $cat_id = $cat['cat_id'];
                                    $sql1 = mysqli_query($connect, "SELECT * FROM category WHERE id='$cat_id'");
                                    while ($cat = mysqli_fetch_assoc($sql1)) {
                                        echo  "<button class='type-tiem'>".$cat['name']."</button> &nbsp;";
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-sm-2">
                                <!--  -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"> <br><br>
                                <a href="bookticket.php" class="book-btn">Book now</a>
                            </div>
                            <div class="col-sm-8">
                                <!--  -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"> <br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <!-- traller film -->
                        <div class="play-btn" onclick="playVideo('https://youtu.be/gq2xKJXYZ80')">
                            <ion-icon name="play-circle"></ion-icon>
                        </div>
                    </div>
                    <div class="col-sm-1"><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <h5 class="watch-trailer">Watch Trailer</h5>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Video-play -->
    <div class="video-player" id="videoPlayer">
        <video width="100%" controls autoplay id="myVideo">
            <source src="https://youtu.be/gq2xKJXYZ80">
        </video>
        <ion-icon name="close-circle" class="close-btn" onclick="stopVideo()"></ion-icon>
    </div>
    <!-- slider -->
    <div class="background-new">
        <div class="container"> <br>
            <div class="row">
                <h4 class="new-item">Latest Episodes</h4>
            </div><br>
            <div class="row">
                <div class="main-carousel">
                    <?php
                        $result = mysqli_query($connect, "SELECT * from movie where id!='$id' limit 8") or die("fail");
                        While($row = mysqli_fetch_assoc($result)){
                         
                    ?>
                    <div class="sell">
                        <div class="icon-play">
                            <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
                            <ion-icon name="play-circle"></ion-icon>
                        </div>
                        <img src="../../asset/picture/<?php echo $row['avatar'] ?>">
                    </div>
                    <?php    
                        }
                    ?>

                    
                </div>
            </div>
        </div> <br><br><br>
    </div>
    <!-- Footer -->
    <?php
    include 'footer.php'
    ?>
    <!--JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $('.main-carousel').flickity({
            //options
            cellAlign: 'left',
            wrapAround: true,
            freesCroll: true
        });
    </script>
    <script>
        var videoPlayer = document.getElementById("videoPlayer");
        var myVideo = document.getElementById("myVideo");

        function stopVideo() {
            videoPlayer.style.display = "none";
        }

        function playVideo(link) {
            myVideo.src = link;
            videoPlayer.style.display = "block";
        }
    </script>
</body>

</html>