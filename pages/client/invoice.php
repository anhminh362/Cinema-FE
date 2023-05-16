<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {

    // $id=$_POST['movie_id'];
    $code = explode(",", $_POST['code']);
    $code1 = explode(",", $_POST['seat_code']);
    $seat = implode('; ', $code1);


    $user_id = $_SESSION['user_id'];
    $schedule_id = $_POST['m_id'];

    $connect = mysqli_connect("localhost", "root", "", "cinema") or die("abc");
    $sql = "select * from  cinema.account, cinema.users where users.id = '$user_id' and users.account_id = account.id";

    $sql1 = "select room.name as room, movie.name, movie_date, time_begin, time_end ,price from room, movie, cinema.schedule where cinema.schedule.id =room.id and room.id =movie.id and  movie.id = '$schedule_id';";
    require('mail.php');
    $result = mysqli_query($connect, $sql) or die("fail");

    $result1 = mysqli_query($connect, $sql1) or die("fail");
    $row = mysqli_fetch_assoc($result);
    $row1 = mysqli_fetch_assoc($result1);

    $email = $row['email'];
    $full_name = $row['full_name'];
    $mail = new Mailer();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $code_invoice ='ML-'.time().rand(10,99);
    $total = 0;
    foreach ($code as $value){
        $total += $row1['price'];
    }
    echo gettype($row1["time_begin"]);
    $body = '
<div>
    <h1>thank you <span>' . $full_name . '</span></h1>
    <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At atque error hic nisi nostrum perferendis quam quis similique soluta voluptate.</h1>
    <div style="display: flex; flex-direction: column; align-items: center;" class="ticketContainer">
        <div style="background-color: wheat; color: darkslategray; border-radius: 12px;" class="ticket">
            <div style="font-size: 1.5rem; font-weight: 700; padding: 12px 16px 4px;" class="ticketTitle">Moon Light
                Cinema
            </div>
            <hr style="width: 90%; border: 1px solid #efefef;">
            <div style="font-size: 1.1rem; font-weight: 500; padding: 4px 16px;" class="ticketDetail">
                <div>Movie:&ensp; ' . $row1["name"] . '</div>
                <div>Room:&nbsp; ' . $row1["room"] . '</div>
                <div>Seat:&nbsp;  ' . $seat . '</div>
                <div>Time:&emsp; <span>' . $row1["time_begin"] . '</span> to <span> ' . $row1["time_end"] . '</span></div>
                <div>Total Price:&nbsp; ' . $total . '  </div>
            </div>
            <div style="  display: flex; justify-content: space-between; align-items: center;" class="ticketRip">
                <div style="width: 12px;height: 24px; background-color: white; border-radius: 0 12px 12px 0;"
                     class="circleLeft"></div>
                <div style=" width: 100%; border-top: 3px solid white; border-top-style: dashed ;"
                     class="ripLine"></div>
                <div style="width: 12px; height: 24px; background-color: white;border-radius: 12px 0 0 12px;"
                     class="circleRight"></div>
            </div>
            <div style="display: flex; justify-content: space-between; font-size: 1rem; padding: 12px 16px;"
                 class="ticketSubDetail">
                <div style=" margin-right: 24px;" class="code">'.$code_invoice.'</div>
                <div class="date"> ' . $row1["movie_date"] . '</div>
            </div>
        </div>

    </div>
</div>

    ';

//    $price_1 = $row1['price'];
//    for ($i = 0; $i < count($code); $i++) {
//        mysqli_query($connect, "UPDATE `ticket` SET `status`='0' WHERE id='$code[$i]'");
//        mysqli_query($connect, "INSERT INTO `invoices` ( `ticket_id`, `user_id`, `total_price`, `code`) VALUES ($code[$i], $user_id, $price_1, '$code_invoice');");
//
//    }
//    $mail->invoice_mail($body, $email);
//    echo ("<script >
//    window.alert('Ban da dat ve thanh cong ');
//    window.location.href=' /cinema/pages/client/homepage.php';
//    </script>");


}
?>
