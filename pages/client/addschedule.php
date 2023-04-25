<?php
include "connect.php";
  
   if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
        $movie_id = $_POST['id'];
        $room = $_POST['room'];
        $rooms=mysqli_fetch_assoc(mysqli_query($conn,"SELECT *from room where name='$room'"));
        $room_id=$rooms['id'];
        $movie_date = $_POST['movie_date'];
        $begin = $_POST['begin'];
        $end = $_POST['end'];
        $price = $_POST['price'];
        
          $sql="INSERT INTO `schedule`( `movie_id`, `room_id`, `movie_date`, `time_begin`, `time_end`, `price`)
           VALUES ('$movie_id','$room_id','$movie_date','$begin',' $end ','$price')";
            if (mysqli_query($conn, $sql)) {
               $id=mysqli_insert_id($conn);
               echo 'Record inserted successfully into movie';
                
            } else {
                echo "Lỗi: " . mysqli_error($conn);
            }
          $i=0;
          $number=$rooms['amount'];
          While($i<$number){
               echo $i;
               $sqli="INSERT INTO `ticket`(`schedule_id`) VALUES ('$id')";
               if(mysqli_query($conn, $sqli)){
                    echo  'Record inserted successfully into m_cat';
                    header('location:ad_schedule.php');
               }
               else {
                    echo "Lỗi: " . mysqli_error($conn);
                }
               $i++;
          }

        }
?>
