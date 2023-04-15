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
    <section class="book-ticket">
        <div class="container">
            <div class="book-ticket-container">
                <div>
                <div class="date-list">
                <?php 
                    $id=6;
                    $connect=mysqli_connect("localhost","root","","cinema")or die('Connect Error!');
                    $query="select * from schedule where movie_id='$id' ";
                    $result=mysqli_query($connect,$query) or die( "query Erorr!");
                    $i=1;
                    while ($row=mysqli_fetch_assoc($result)){
                        $dateValue = strtotime($row['movie_date']);
                        $mon = date('n', $dateValue); 
                        $day = date('j', $dateValue);
                        $name_day= substr(date('l',$dateValue), 0,3);
                ?>
                <form id="my-form">
                <input class="selection" type="radio" name="option1" value="<?php echo $row['movie_date']?>"> 
                        <div class="day">
                        
                            <span><?php if($mon>9){echo $mon;} else{echo "0".$mon;}?></span>
                           
                            <em><?php echo $name_day;?></em>
                            <strong><?php if($day>9){echo $day;} else{echo "0".$day;};?></strong>
                        </div>
                    
                    <?php
                        $i++;
                        }
                        ?>
                </div>
                </div>
                <!-- <div class="provinces-list"> 
                    <h2>City</h2>
                    <div class="place">
                        <button>Hồ Chí Minh</button>
                        <button>Đà Nẵng</button>
                        <button>Kon Tum</button>
                        <button>Đồng Nai</button>
                        <button>Hà Nội</button>
                    </div>
                </div> -->
                <div class="sub-list">
                    <h2>Sub</h2>
                    <div class="place">
                    <?php 
                    
                    $sub="select * from movie_sub where movie_id='$id' ";
                    $result=mysqli_query($connect,$sub) or die( "query Erorr!");
                    $i=1;
                    while ($row=mysqli_fetch_assoc($result)){
                        $sub_id=$row['sub_id'];
                        $sub_name=mysqli_query($connect,"select * from sub where id='$sub_id'") or die( "query Erorr!");
                        $sub=mysqli_fetch_assoc($sub_name)['name'];
                        
                ?>
                <input class="selection" type="radio" name="option2"  value="<?php echo $sub ?>"> 
                <button><?php echo  $sub?></button>
                </label>
                    <?php
                        $i++;
                        }
                        ?>
                    
                    </div>
                </div>
                <div class="show-time">
                    <h2>Time</h2>
                    <div class="time">
                    <?php 
                    $i=1;
                    $result=mysqli_query($connect,$query) or die( "query Erorr!");
                    
                    while ($row=mysqli_fetch_assoc($result)){
                        $time=date("H:i", strtotime($row['time_begin']));     
                ?>
                <input class="selection" type="radio" name="option3"  value="<?php echo $time  ?>"> 
                <button class="btn_time"><?php echo  $time?></button>
                
                    <?php
                            $i++;
                            }
                            ?>
                        
                       
                    </div>
                </div>
            </div>
            <!-- <input type="submit">OK</input> -->
        </div>
       
        </form>                   
        <!-- <?php
        function movietime($h1,$m1,$h2,$m2){
            if($m2>=$m1){
                $m=$m2-$m1;
            }
            else{
                $m=$m2+60-$m1;
                $h1+=1;
            }
            if($h2>=$h1){
                $h=$h2-$h1;
            }
            else{
                $h=24+$h2-$h1;
            }
            return $h."h ".$m."min";
        }
        $connect=mysqli_connect("localhost","root","","cinema")or die('Connect Error!');
        $time="select * from schedule where movie_id='$id' limit 1 ";
        $result=mysqli_query($connect,$time) or die( "query Erorr!");
        $row=mysqli_fetch_assoc($result);
        $h_begin = date("H", strtotime($row['time_begin']));
        $h_end=date("H", strtotime($row['time_end']));
        $m_begin=date("i", strtotime($row['time_begin']));
        $m_end=date("i", strtotime($row['time_end']));
        echo movietime( $h_begin,$m_begin,$h_end,$m_end);
        ?> -->
    </section>
    

<script>
  const form = document.getElementById('my-form');
  const radios = form.elements['option1'];
    const sub=form.elements['option2'];
    const time=form.elements['option3'];
    function getvalue($variable) {
      const selectedValue = this.value;
      console.log(selectedValue);
    //   return selectedValue;
    }
  for (let i = 0; i < radios.length; i++) {
    radios[i].addEventListener('click', getvalue(radios));
  }
  for (let i = 0; i < sub.length; i++) {
    sub[i].addEventListener('click', getvalue(sub));
  }
  for (let i = 0; i < time.length; i++) {
    time[i].addEventListener('click', getvalue(time));
  }
  
</script>
</body>
</html>