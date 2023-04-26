<?php 
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
    // $id=$_POST['movie_id'];
    $code= explode(",", $_POST['code']);;
    var_dump($code);
    for($i=0;$i<count($code);$i++){
        if(mysqli_query($conn,"UPDATE `ticket` SET `status`='0' WHERE id='$code[$i]'")){
            echo "done";
        };
        
    }
}
?>
