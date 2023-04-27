<?php
include "../client/connect.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_USERS_CRUD</title>
    <!-- link CSS -->
    <link href="../../style/ad_user.css" rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/11a9c95312.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 background-left ">
                <div><img class="logo" src="../../asset/picture/3e1b693d-9dc1-43e7-b517-763a153989af-removebg-preview (2).png" alt=""><b class="logo_text">MoonLight</b></div>
                <div class="row">
                    <a href="ad_user.php" class="icon-play">
                        <ion-icon name="person"></ion-icon>
                        <b> User</b>
                    </a>
                </div><br><br>
                <div class="row">
                    <a href="ad_film.php" class="icon-play">
                        <ion-icon name="play-circle"></ion-icon>
                        <b> Films</b>
                    </a>
                </div><br><br>
                <div class="row">
                    <a href="ad_schedule.php" class="icon-item">
                        <i class="fa-solid fa-calendar-days"></i>
                        <b> Schedule</b>
                    </a>
                </div>
            </div>
            <div class="col-lg-10 background-right">
                <div class="row">
                    <div class="col-lg-10">
                        <!--  -->
                    </div>
                    <div class="col-lg-2">
                        <div class="icon-user">
                            <ion-icon name="person-circle" class="icon-acc"></ion-icon>
                            <a class="text-signout" href="#">Kieu</a>
                        </div>
                    </div>
                </div>
                <div class="row backgroud-bar">
                    <div class="col-sm-3">
                        <span class="bar-user">User </span>
                        <span class="line-line">/</span>
                        <span class="bar-film">Schedule</span>
                    </div>
                    <div class="col-sm-6">
                        <!--  -->
                    </div>
                    <div class="col-sm-3">
                        <span class="mess">Hello!</span>
                        <span class="name-acc">Kieu hi</span>
                    </div>
                </div>
                
                <div class="container"> <br><br>
                    <!-- table -->
                    <div class="table-responsive">
                        <table class="table table-responsive" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Movie</th>
                                    <th>Room</th>
                                    <th>Movie Date</th>
                                    <th>Time Begin</th>
                                    <th>Time End</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>  
                            <tbody id="tab">
                                <?php
                                $sql = "SELECT * FROM schedule";
                                $sqli = mysqli_query($conn, $sql);
                                $data=[];
                                if (mysqli_num_rows($sqli) > 0) {
                                    while ($row = mysqli_fetch_assoc($sqli)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td><p>" . $row['movie_id'] . "</p></td>";
                                        echo "<td>" . $row['room_id'] . "</td>";
                                        echo "<td>" . $row['movie_date'] . "</td>";
                                        echo "<td>" . $row['time_begin'] . "</td>";
                                        echo "<td>" . $row['time_end'] . "</td>";
                                        echo "<td>" . $row['price'] . "</td>";
                                        
                                        echo "<td><span data-toggle='modal' data-target='#editModal' class='btn-edit' data-id='" . $row['id'] . "' data-name='" . $row['name'] . "' data-avatar='" . $row['avatar'] . "'data-premiere_date='" . $row['premiere_date'] . "'data-country='" . $row['country'] . "'data-description='" . $row['description'] .
                                         "'data-trailer='" . $row['trailer'] . "' data-cat='"; echo htmlspecialchars(json_encode($data)); echo "'><ion-icon name='pencil-outline'class='icon-ac-edit'></span><a href='delete.php?id=" . $row['id'] . "'><ion-icon name='trash-outline' class='icon-ac-del'></a>
                                         <button type='button' class='btn-schedule' data-toggle='modal' data-target='#scheduleModal' data-id='".$row['id']."'> <ion-icon class='icon-ac-add' name='add-circle-outline'></ion-icon></button></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Không có sản phẩm nào.";
                                }
                                ?>
                            </tbody>   
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>