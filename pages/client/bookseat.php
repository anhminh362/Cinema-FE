<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../../style/bookseat.css"/>
    <title>Movie Seat Booking</title>
</head>

<body>
<?php
if (isset($_GET['m_id'])) {
    // echo $_GET['id'];
    $id = $_GET['m_id'];
    $day = $_GET['day'];
    $time = $_GET['time'];
    // $sub=;
    $connect = mysqli_connect("localhost", "root", "", "cinema") or die('Connect Error!');
    $query = "select * from movie where id='$id' ";
    $result = mysqli_query($connect, $query) or die("query Erorr!");
    $row = mysqli_fetch_assoc($result);
    $schedule = mysqli_query($connect, "select * from schedule where movie_id='$id' and movie_date='$day' and time_begin='$time'") or die("query Erorr!");
    $result1 = mysqli_fetch_assoc($schedule);
    $price = $result1['price'];
    $schedule_id = $result1['id'];
    ?>
    <div class="movie-container">
        <label>
            <center> Movie:</center>
        </label>
        <input type="text" hidden id='movie' value='<?= $price ?>' disabled></input>
        <p><?= $row['name'] ?></p>
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
        <form method="post" action="invoice.php">
            <?php
            $x = array('A', 'B', 'C', 'D', 'E');
            $ticket = array();
            $status = array();
            $query = mysqli_query($connect, "SELECT * from ticket where schedule_id='$schedule_id' ");
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($ticket, $row['id']);
                array_push($status, $row['status']);
            };
            // var_dump($ticket);
            $k = 0;
            for ($i = 0; $i < 5; $i++) {
                ?>
                <div class="row" name='<?= $x[$i] ?>' id='<?= $x[$i] ?>'>
                    <?php for ($j = 1; $j < 9; $j++) {

                        ?>

                        <div class="seat <?php if ($status[$k] == 0) echo 'sold' ?>" name='<?= $j ?>'
                             id='<?= $x[$i] . $j ?>'><input type="hidden" id="ticket_id" name="ticket_id"
                                                            value='<?= $ticket[$k] ?>'></div>
                        <?php $k++;
                    } ?>
                </div>
            <?php } ?>
            <div>
                <p class="text">
                    You have selected <span id="count">0</span> for a price of RS.<span id="total">0</span>
                </p>

                <p>Seat: <span id="code"></span></p>

                <input type="hidden" name='code' id='ticket_value'>

                <input type="hidden" name='seat_code' id='seat_code' value=''>
                <input type="hidden" name='m_id' value='<?php echo $id ?>'>
                <input type="hidden" name='day' value='<?php echo $day ?>'>
                <input type="hidden" name='time' value='<?php echo $time ?>'>

            </div>
            <div class="row">
                <div class="col-sm-4"><br><br>
                    <!-- <a href="invoice.php?id=<?= $id ?>" class="book-btn">Book now</a> -->
                    <input type="submit" name='submit' class="btn bg-danger text-white" value="Book now">
                </div>
                <div class="col-sm-8">
                    <!--  -->
                </div>
        </form>
    </div>
<?php } ?>
<!-- </div> -->

<script src="script.js"></script>
</body>

</html>