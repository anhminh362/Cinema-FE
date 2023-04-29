<?php

use function PHPSTORM_META\type;

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookTicket</title>
    <link rel="stylesheet" href="../../style/Bookticket.css">
</head>

<body>
    <?php
    if(isset($_GET['id'])){?>
    <section class="book-ticket">
        <div class="container">

            <div class="book-ticket-container">

                <div class="date-list">
                    <?php
                    $id = $_GET['id'];
                    $connect = mysqli_connect("localhost", "root", "", "cinema") or die('Connect Error!');
                    $query = "select * from schedule where movie_id='$id' ";
                    $result = mysqli_query($connect, $query) or die("query Erorr!");
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        $dateValue = strtotime($row['movie_date']);
                        $mon = date('n', $dateValue);
                        $day = date('j', $dateValue);
                        $name_day = substr(date('l', $dateValue), 0, 3);
                    ?>
                        <input type="hidden" name="movie_id" value="<?=$id?>">
                        <button type="button" class="day " name="btn_day" value="<?php echo $row['movie_date'] ?>">
                            <span><?php if ($mon > 9) {
                                        echo $mon;
                                    } else {
                                        echo "0" . $mon;
                                    } ?></span>

                            <em><?php echo $name_day; ?></em>
                            <strong><?php if ($day > 9) {
                                        echo $day;
                                    } else {
                                        echo "0" . $day;
                                    }; ?>
                            </strong>
                        </button>
                    <?php
                        $i++;
                    }
                    ?>
                </div>


                <!-- <div class="sub-list">
                    <h2>Sub</h2>
                    <div class="place">
                        <?php
                        $sub = "select * from movie_sub where movie_id='$id' ";
                        $result = mysqli_query($connect, $sub) or die("query Erorr!");
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $sub_id = $row['sub_id'];
                            $sub_name = mysqli_query($connect, "select * from sub where id='$sub_id'") or die("query Erorr!");
                            $sub = mysqli_fetch_assoc($sub_name)['name'];

                        ?>
                            <button class='btn_sub' name='btn_sub' type="button" value="<?php echo  $sub ?>"><?php echo $sub ?></button>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div> -->
                <div class="show-time">
                    <h2>Time</h2>
                    <div class="time">
                        <?php
                        $i = 1;
                        $result = mysqli_query($connect, $query) or die("query Erorr!");

                        while ($row = mysqli_fetch_assoc($result)) {
                            $time = date("H:i", strtotime($row['time_begin']));
                        ?>
                            <button type="button" name='btn_time' class="btn_time" value="<?php echo  $time ?>"><?php echo $time  ?></button>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <center><button id="submit-btn">Ok</button></center>
        </div>
    </section>
    <?php }?>
    <script>
        let selectedValues = {};

        function handleClick(e) {
            let button = e.target.closest('button');
            let name = button.getAttribute('name');
            let value = button.getAttribute('value');
            selectedValues[name] = value;
            console.log(selectedValues);
            // Loại bỏ class 'selected' khỏi tất cả các button trong cùng div
            const div = button.closest('div');
            const divButtons = div.querySelectorAll('button');
            divButtons.forEach(divButton => {
                divButton.classList.remove('selected');
            });

            // Thêm class 'selected' cho button được click
            button.classList.add('selected');

        }

        function handleSubmit() {
            console.log(selectedValues["btn_day"]);
            if (
                selectedValues["btn_day"] &&
                // selectedValues["btn_sub"] &&
                selectedValues["btn_time"]
            ) {
                // all values have been selected, redirect to another page
                let id=document.querySelector('input[name="movie_id"]').value
                const url = "http://localhost:8080/cinema/pages/client/bookseat.php?day=" + selectedValues["btn_day"] +
                    // "&sub=" + selectedValues["btn_sub"] 
                    +"&time=" + selectedValues["btn_time"]+"&m_id="+id;
                window.location.href = url;
            } else {
                alert("Please select an option from each div");
            }
        }

        const buttons = document.querySelectorAll("button");
        buttons.forEach((button) => {
            button.addEventListener("click",
                handleClick);
        });

        const submitBtn = document.getElementById("submit-btn");
        submitBtn.addEventListener("click", handleSubmit);
    </script>
</body>

</html>