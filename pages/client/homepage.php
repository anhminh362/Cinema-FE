<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../style/homepage.css">
<!--    <link rel="stylesheet" href="../../style/search.css">-->
    <script src="https://code.jquery.com/jquery-3.6.4.js"
            integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <title>MoonLight</title>
</head>
<body>
<?php
include 'header.php';
include 'connect.php';
$query="SELECT * FROM `movie` WHERE id<4";
$result1=mysqli_query($conn,$query)or die("Error");
        
        
?>
</body>

<div id="slider" class="carousel carousel-light slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <?php
        $time=1000;
        $act='active';
        while($row1 =mysqli_fetch_assoc($result1)){
            // var_dump($row1['name']) ;
    ?>
        <div class="carousel-item <?=$act?>" data-bs-interval="<?=$time?>">
            <div class="img"
                 style="background-image: linear-gradient(to right, rgba(0, 0, 6, 1),rgba(0, 0, 0, 0.3)),url('../../asset/picture/<?=$row1['avatar']?>');"></div>
            <div class="carousel-caption d-none d-md-block">
                <h3 class="text-movie"><?=$row1['name']?></h3>
                <p class="text-movies"><?=$row1['description']?><br>
                    <a class="more-details" href="detailmovie.php?id=<?php echo $row1['id']?>">More Details</a></p>
            </div>
        </div>
        
        <?php
        $time+=1000;
        $act='';
        }
        ?>
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
<?php
$query="SELECT * FROM `movie` WHERE id>=4 AND id<=10";
$result1=mysqli_query($conn,$query)or die("Error");

?>
<h5 class="text-title">Trending</h5>
<div class="direction">
    <button id="prev"><b><</b></button>
    <button id="next"><b>></b></button>
</div>
<div id="formlist">
    <div id="list">
        <?php 
 
        ?>

        <?php 
            while($row1 =mysqli_fetch_assoc($result1)){
        ?>
        <div class="item">
            <img src="../../asset/picture/<?=$row1['avatar']?>" alt="" class="movies">
            <div class="overlay">
                <h5><?=$row1['name']?></h5>
                <p>
                <?php
                    $id=$row1['id'];
                $query = mysqli_query($conn, "SELECT category.name FROM movie
                INNER JOIN movie_cat ON movie.id = movie_cat.movie_id
                INNER JOIN category ON movie_cat.cat_id = category.id
                WHERE movie.id='$id'");
                $cat = mysqli_fetch_assoc($query);
                echo $cat['name'];
              while ($cat = mysqli_fetch_assoc($query)) {
                echo "/".($cat['name']);
              }
              ?>
              </p>
                <a href="detailmovie.php?id=<?php echo $row1['id']?>"><button type="button" class="btn btn-success">More Details</button></a>
            </div>
        </div>
        <div class="item"></div>
        <div class="item"></div> 
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
        <?php  
        }
        ?>
 
    </div>
</div>
<script>
    document.getElementById('next').onclick = function () {
        const widthItem = document.querySelector('.item').offsetWidth;
        document.getElementById('formlist').scrollLeft += widthItem;
    }
    document.getElementById('prev').onclick = function () {
        const widthItem = document.querySelector('.item').offsetWidth;
        document.getElementById('formlist').scrollLeft -= widthItem;
    }
</script>

<?php
$query="SELECT * FROM `movie` WHERE id>10 AND id<=17";
$result1=mysqli_query($conn,$query)or die("Error");

?>
<h5 class="text-title">New</h5>
<hr>
<div class="direction1">
    <button id="prev1"><b><</b></button>
    <button id="next1"><b>></b></button>
</div>
<div id="formlist1">
    <div id="list1">
    <?php 
            while($row1 =mysqli_fetch_assoc($result1)){
            
        ?>
        <div class="item1">
            <img src="../../asset/picture/<?=$row1['avatar']?>" alt="" class="movies1">
            <div class="overlay1">
                <h5><?=$row1['name']?></h5>
                <p>
                <?php
                    $id=$row1['id'];
                $query = mysqli_query($conn, "SELECT category.name FROM movie
                INNER JOIN movie_cat ON movie.id = movie_cat.movie_id
                INNER JOIN category ON movie_cat.cat_id = category.id
                WHERE movie.id='$id'");
                $cat = mysqli_fetch_assoc($query);
                echo $cat['name'];
              while ($cat = mysqli_fetch_assoc($query)) {
                echo "/".($cat['name']);
              }
              ?>
              </p>
                <a href="detailmovie.php?id=<?php echo $row1['id']?>"><button type="button" class="btn btn-success">More Details</button></a>
            </div>
        </div>
        <div class="item1"></div>
        <div class="item1"></div>
        <div class="item1"></div>
        <div class="item1"></div>
        <div class="item1"></div>
        <div class="item1"></div>
        <?php 
    }
    ?>
    </div>
    
</div>
<script>
    document.getElementById('next1').onclick = function () {
        const widthItem = document.querySelector('.item1').offsetWidth;
        document.getElementById('formlist1').scrollLeft += widthItem;
    }
    document.getElementById('prev1').onclick = function () {
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

<?php
$query="SELECT * FROM `movie` WHERE id>17 AND id<=24";
$result1=mysqli_query($conn,$query)or die("Error");

?>
<h5 class="text-title">Upcoming Movies</h5>
<div class="direction2">
    <button id="prev2"><b><</b></button>
    <button id="next2"><b>></b></button>
</div>

<div id="formlist2">
    <div id="list2">
    <?php 
            while($row1 =mysqli_fetch_assoc($result1)){
            
        ?>
        <div class="item2">
        <img src="../../asset/picture/<?=$row1['avatar']?>" alt="" class="movies2">
            <div class="overlay2">
                <h5><?=$row1['name']?></h5>
                <p>
                <?php
                    $id=$row1['id'];
                $query = mysqli_query($conn, "SELECT category.name FROM movie
                INNER JOIN movie_cat ON movie.id = movie_cat.movie_id
                INNER JOIN category ON movie_cat.cat_id = category.id
                WHERE movie.id='$id'");
                $cat = mysqli_fetch_assoc($query);
                echo $cat['name'];
              while ($cat = mysqli_fetch_assoc($query)) {
                echo "/".($cat['name']);
              }
              ?>
              </p>
                <a href="detailmovie.php?id=<?php echo $row1['id']?>"><button type="button" class="btn btn-success">More Details</button></a>
            </div>
        </div>
        <div class="item2"></div>
        <div class="item2"></div>
        <div class="item2"></div>
        <div class="item2"></div>
        <div class="item2"></div>
        <div class="item2"></div>
        <?php
            }
            ?>
    </div>
</div>
<script>
    document.getElementById('next2').onclick = function () {
        const widthItem = document.querySelector('.item2').offsetWidth;
        document.getElementById('formlist2').scrollLeft += widthItem;
    }
    document.getElementById('prev2').onclick = function () {
        const widthItem = document.querySelector('.item2').offsetWidth;
        document.getElementById('formlist2').scrollLeft -= widthItem;
    }
</script>
<!-- FOOTER -->
<?php
include 'footer.php'
?>

</body>


</html>

