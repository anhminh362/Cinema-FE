<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../style/bookseat.css" />
    <title>Movie Seat Booking</title>
  </head>
  <body>
    <?php
    // echo $_GET['id'];
    $id=9;
    $day='2023-04-26';
    $time='07:28';
    // $sub=;
    $connect = mysqli_connect("localhost", "root", "", "cinema") or die('Connect Error!');
    $query = "select * from movie where id='$id' ";
    $result = mysqli_query($connect, $query) or die("query Erorr!");
    $row = mysqli_fetch_assoc($result);
    $schedule=mysqli_query($connect, "select * from schedule where movie_id='$id' and movie_date='$day' and time_begin='$time'") or die("query Erorr!");
    $result1=mysqli_fetch_assoc($schedule);
    $price=$result1['price'];
    $schedule_id=$result1['id'];
    ?>
    <div class="movie-container">
      <label><center> Movie:</center></label>
      <input type="text" hidden id='movie' value='<?= $price?>' disabled></input>
      <p><?=$row['name'] ?></p>
    </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat sold"></div>
        <small>Sold</small>
      </li>
    </ul>
    <div class="container">
      <div class="screen"></div>
      <?php 
        $x=array('A','B','C','D','E');
        $ticket=array();
        $query=mysqli_query($connect,"SELECT * from ticket where schedule_id='$schedule_id' ");
        While($row=mysqli_fetch_assoc( $query)){
         array_push( $ticket,$row['id']);
        };
        // var_dump($ticket);
        $k=0;
        for($i=0;$i<5;$i++){ 
      ?>
      <div class="row" name='<?=$x[$i]?>' id='<?=$x[$i]?>'>
          <?php for($j=1;$j<9;$j++){?>
            <input type="hidden" id="ticket_id" name="ticket_id"  value='<?=$ticket[$k]?>'>
        <div class="seat" name='<?=$j?>' id='<?=$j?>'></div>
        <?php $k++;} ?>
        <!-- <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div> -->
      </div>
      <?php }?>
<!-- 
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
      </div>
      <div class="row">
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat sold"></div>
        <div class="seat"></div>
      </div> -->
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seat <span id="location">0</span> for a price of RS.<span
        id="total"
        >0</span
      >
    </p>
    <div class="row">
      <div class="col-sm-4"> <br><br>
          <a href="" class="book-btn">Book now</a>
      </div>
      <div class="col-sm-8">
          <!--  -->
      </div>
  </div>    <script src="script.js"></script>
  </body>
</html>
