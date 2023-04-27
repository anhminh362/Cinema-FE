<?php
  include "../client/connect.php";
    $id = $_GET['id'];
    // Truy vấn SQL để xóa sản phẩm
    // $sql = "SET FOREIGN_KEY_CHECKS=0;";
    // mysqli_query($conn,$sql);
    $sql="SELECT * FROM schedule WHERE movie_id= $id ";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $schedule_id=$row['id'];
        $query="SELECT * FROM ticket WHERE schedule_id= $schedule_id";
        $kq=mysqli_query($conn,$query);
        while($ticket=mysqli_fetch_assoc($kq)){
            $ticket_id=$ticket['id'];
            $query="DELETE FROM invoices WHERE ticket_id= $ticket_id";
            $del_invoice=mysqli_query($conn,$query);
        };
        $del_ticket=mysqli_query($conn,"DELETE FROM ticket WHERE schedule_id= $schedule_id ");
    }
    $sql = "DELETE FROM schedule WHERE movie_id= $id";
    mysqli_query($conn,$sql);
    $sql = "DELETE FROM movie_cat WHERE movie_id =$id";
    mysqli_query($conn,$sql);

    $sql = "DELETE FROM movie_cat WHERE movie_id =$id";
    mysqli_query($conn,$sql);
    $sql ="DELETE FROM movie_sub WHERE movie_id =$id";
    mysqli_query($conn,$sql);
    $sql="SELECT * from movie WHERE id =$id";
    $avatar=mysqli_fetch_assoc(mysqli_query($conn,$sql))['avatar'];
    // echo $avatar;
    $avatar = trim($avatar);
    $link="../../asset/picture/$avatar";
    echo $link;
    if(unlink($link))
    {
        echo "File Deleted";
    }
    else
    {
        echo "Error Deleting File";
    }
    $sql = "DELETE FROM movie WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
            header('location:ad_film.php');
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
?>