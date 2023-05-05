<?php 
session_start();
include "connect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_POST['submit'])) {
    // $id=$_POST['movie_id'];
    $code=explode(",", $_POST['seat_code']);
    $id= explode(",", $_POST['code']);
    var_dump($code);
    var_dump($id);
    var_dump($_SESSION['user_id']);
    // for($i=0;$i<count($id);$i++){
    //     if(mysqli_query($conn,"UPDATE `ticket` SET `status`='0' WHERE id='$id[$i]'")){
    //         echo "done";
    //     };
        
    // }
}
?>
