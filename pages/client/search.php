<?php
$conn = mysqli_connect("localhost", 'root', '', 'cinema');
$search_info = $_POST['data'];
if (isset($search_info)) {
    $sql = "SELECT * FROM cinema.movie where name like '%$search_info%' ";
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
                        <a href="detailmovie.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else ;
}
?>
