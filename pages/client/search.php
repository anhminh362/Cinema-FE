<?php
$conn = mysqli_connect("localhost", 'root', '', 'cinema');
$quan = $_POST['data'];
if (isset($quan)) {
    $sql = "SELECT * FROM cinema.movie where name like '%$quan%' ";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);
    if ($num > 0) {
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="movie_card">
                <div class="movie_item">
                    <div class="movie_img">
                        <img alt=""
                             src="<?php echo $row['avatar'] ?>">
                    </div>
                    <div class="movie_info">
                        <p class="movie_name"><?php echo $row['name'] ?></p>
                    </div>
                </div>
            </div>


            <?php

        }
    } else ;
}

?>
