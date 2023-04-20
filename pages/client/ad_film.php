<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "cinema";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($conn, "UTF8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//  echo "Connected Successfully !";
error_reporting(0);

// 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Films_CRUD</title>
    <!-- link CSS -->
    <link href='../../style/ad_film.css' rel='stylesheet'>
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
                    <a href="ad_user.php" class="icon-item">
                        <ion-icon name="person"></ion-icon>
                        <b> User</b>
                    </a>
                </div><br><br>
                <div class="row">
                    <p class="icon-play">
                        <ion-icon name="play-circle"></ion-icon>
                        <b> Films</b>
                    </p>
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
                        <a href="#" class="bar-user"><span>User </span></a>
                        <span class="line-line">/</span>
                        <span class="bar-film">Films</span>
                    </div>
                    <div class="col-sm-6">
                        <!--  -->
                    </div>
                    <div class="col-sm-3">
                        <span class="mess">Hello!</span>
                        <span class="name-acc">Kieu hi</span>
                    </div>
                </div>
                <div class="container"> <br>
                    <!-- Nút mở modal -->
                    <button type="button" class="btn bg-danger text-white" data-toggle="modal" data-target="#myModal">
                        Add +
                    </button>
                    <!-- Modal -->
                    <div id="myModal" tabindex="-1" role="dialog" class="modal fade" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">FOMR ADD</h5>
                                    <button type="button" name="close" class="close" data-dismiss="modal" aria-label="Đóng">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" class="form-form" action="add.php"> <br>
                                        <!-- <input type="hidden" name="action" value="add"> Trường ẩn để xác định hành động -->
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <label for="name" class="title-title">Name:</label>
                                        <input type="text" class="input-btn" name="name" value="<?php echo $row['name']; ?>"><br><br>
                                        <label for="avatar" class="title-title">Avatar:</label>
                                        <input type="file" style="color:white;" class="input-btn" name="avatar" value="<?php echo $row['avatar']; ?>"><br><br>
                                        <label for="date" class="title-title">Premiere date:</label>
                                        <input type="date" class="input-btn" name="premiere_date" value="<?php echo $row['premiere_date']; ?>"><br><br>
                                        <label for="country" class="title-title">Country:</label>
                                        <input name="country" class="input-btn" value="<?php echo $row['country']; ?>"><br> <br>
                                        <label for="describe" class="title-title">Describe:</label>
                                        <textarea rows="4" cols="50" name="description" type="text" class="input-btn" value="<?php echo $row['description']; ?>"></textarea><br> <br>
                                        <label for="trailer" class="title-title">Trailer:</label>
                                        <input name="trailer" style="color:white;" type="file" class="input-btn" value="<?php echo $row['trailer']; ?>"><br> <br>
                                        <label for="name" class="title-title">Category:</label>
                                        <div class='category'>
                                            <?php 
                                            $sql_cat = mysqli_query($conn, "SELECT * from category");
                                            While($category=mysqli_fetch_assoc($sql_cat)){
                                            ?>
                                            <label>
                                                <input type="checkbox"name="<?php echo $category['name'] ?>" value="<?php echo $category['name'] ?>"><?php echo $category['name'] ?>
                                            </label>
                                            <?php
                                            }
                                            ?>
                                        </div >
                                        <div class="modal-footer"> 
                                            <input type="submit" name='submit' class="btn bg-danger text-white" value="Add">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div> <br><br>
                    <!-- Nút mở modal -->

                    <!-- Modal Edit -->
                    <div id="editModal" tabindex="-1" role="dialog" class="modal fade" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">EDIT</h5>
                                    <button type="button" name="close" class="close" data-dismiss="modal" aria-label="Đóng">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="modal-body">
                                    <form method="post" class="form-form" action="edit.php" enctype="multipart/form-data"> <br>
                                        <!-- <input type="hidden" name="action" value="add"> Trường ẩn để xác định hành động -->
                                        <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                        <label for="name" class="title-title">Name:</label>
                                        <input type="text" id="name" class="input-btn" name="name" value="<?php echo $row['name']; ?>"><br><br>
                                        <label for="avatar" class="title-title">Avatar:</label>
                                        <input style="border:none; color:white; background-color: #0B1A2A" id="avatar" class="input-btn" type="text" name="avatar" value="<?php echo $row['avatar']; ?>">
                                        <input type="file" style="color:white;" name="up_avatar" value="<?php echo $row['avatar']; ?>"> <br><br>
                                        <label for="date" class="title-title">Premiere date:</label>
                                        <input type="date" id="premiere_date" class="input-btn" name="premiere_date" value="<?php echo $row['premiere_date']; ?>"><br><br>
                                        <label for="country" class="title-title">Country:</label>
                                        <input name="country" id="country" class="input-btn" value="<?php echo $row['country']; ?>"><br> <br>
                                        <label for="describe" class="title-title">Describe:</label>
                                        <textarea rows="4" cols="50" name="description" id="description" type="text" class="input-btn" value="<?php echo $row['description']; ?>"></textarea><br> <br>
                                        <label for="trailer" class="title-title">Trailer:</label>
                                        <input style="border:none; color:white; background-color: #0B1A2A" class="input-btn" name="trailer" id="trailer" class="input-btn" type="text" value="<?php echo $row['trailer']; ?>">
                                        <input type="file" style="color:white;" name="up_trailer" value="<?php echo $row['trailer']; ?>"><br> <br>
                                        <label for="name" class="title-title">Category:</label>
                                        <div class='category'>
                                        <input type="hidden" name="cat" id="cat" value="" />
                                        <?php 
                                            $sql_cat = mysqli_query($conn, "SELECT * from category");
                                            $i=0;
                                            $row['cat'] = json_decode($_POST['cat'], true);
                                            var_dump($_POST['cat']);
                                            if (isset($_POST['cat'])) {
                                                // xử lý khi biến cat được gửi đến server
                                                echo 111;
                                            } else {
                                                // xử lý khi biến cat không được gửi đến server
                                                echo "khong gui dc";
                                            };
                                           
                                            while($category=mysqli_fetch_assoc($sql_cat)){
                                                
                                                
                                                $checked = (in_array($category['name'], explode(',', $row['cat']))) ? 'checked="checked"' : '';
                                               
                                        ?>
                                                <label>
                                                <input type="checkbox" class="input-btn" name="cat[]" id='cat-<?php echo $i+1 ?>' <?php echo $checked ?> value="<?php echo $category['name'] ?>"><?php echo $category['name'] ?>

                                                </label>
                                        <?php $i++;} ?>
                                        <!-- <?php 
                                            $sql_cat = mysqli_query($conn, "SELECT * from category");
                                            $i=0;
                                            
                                            while($category=mysqli_fetch_assoc($sql_cat)){
                                                $checked = (in_array($category['name'], explode(',', $row['cat']))) ? 'checked' : '';
                                        ?>
                                            <label>
                                                <input type="checkbox" name="cat[]" id="cat-<?php echo $i+1 ?>" <?php echo $checked ?> value="<?php echo $category['name'] ?>"><?php echo $category['name'] ?>
                                            </label>
                                        <?php 
                                                $i++;
                                            } 
                                        ?> -->

                                        
                                        </div>
                                        <div class="modal-footer">
                                            <input type="submit" name='submit' class="btn bg-danger text-white" value="Update">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table class="table table-responsive" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Avatar</th>
                                    <th>PremiereDate</th>
                                    <th>Country</th>
                                    <th>Describe</th>
                                    <th>Trailer</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tab">
                                <?php
                                $sql = "SELECT * FROM movie";
                                $sqli = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($sqli) > 0) {
                                    while ($row = mysqli_fetch_assoc($sqli)) {
                                        $m_id = $row['id'];
                                        $query = mysqli_query($conn, "SELECT * FROM movie_cat WHERE movie_id='$m_id'");
                                        echo "<tr>";
                                        // echo "<td id='getid' value='".$row['id']."'>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td class='name'><p>" . $row['name'] . "</p></td>";
                                        echo "<td>" . $row['avatar'] . "</td>";
                                        echo "<td>" . $row['premiere_date'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
                                        echo "<td class='desc'><p>" . $row['description'] . "</p></td>";
                                        echo "<td class='trailer_'><p>" . $row['trailer'] . "</p></td>";
                                        echo "<td class='cat'>";

                                        $data = array();
                                        while ($cat = mysqli_fetch_assoc($query)) {
                                            $cat_id = $cat['cat_id'];
                                            echo "<p>";
                                            $sql1 = mysqli_query($conn, "SELECT * FROM category WHERE id='$cat_id'");
                                            while ($cat = mysqli_fetch_assoc($sql1)) {
                                                echo $cat['name'];
                                                array_push($data,$cat['name']);
                                            }
                                            echo "</p>";
                                        }
                                        echo  "</td>";
                                        echo "<td><span data-toggle='modal' data-target='#editModal' class='btn-edit' data-id='" . $row['id'] . "' data-name='" . $row['name'] . "' data-avatar='" . $row['avatar'] . "'data-premiere_date='" . $row['premiere_date'] . "'data-country='" . $row['country'] . "'data-description='" . $row['description'] .
                                         "'data-trailer='" . $row['trailer'] . "' data-cat='"; echo htmlspecialchars(json_encode($data)); echo "'><ion-icon name='pencil-outline'class='icon-ac-edit'></span><a href='delete.php?id=" . $row['id'] . "'><ion-icon name='trash-outline' class='icon-ac-del'></a></td>";
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



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Khi nút chỉnh sửa được click
            $(".btn-edit").click(function() {
                // Lấy dữ liệu từ data attribute của nút chỉnh sửa
                var data = JSON.parse($(this).attr('data-cat'));
                var name = $(this).data("name");
                var avatar = $(this).data("avatar");
                var premiere_date = $(this).data("premiere_date");
                var country = $(this).data("country");
                var description = $(this).data("description");
                var trailer = $(this).data("trailer");

                // Điền dữ liệu vào form
                var id = $(this).data("id");
                $("#id").val(id);
                $("#name").val(name);
                $("#premiere_date").val(premiere_date);
                $("#country").val(country);
                $("#description").val(description);
                $("#trailer ").val(trailer);
                $("#avatar").val(avatar);
                var cat=JSON.stringify(data);
                $('input[name="cat"]').val(cat);
                // Thêm giá trị của 'cat' vào form
                // $('input[name="cat"]').val(JSON.stringify(data));
                // console.log($('input[name="cat"]').val(JSON.stringify(data)));
                // console.log($('#cat').val(JSON.stringify(data)));
                // for(i=0;i<data.length;i++){
                //     check=$('#cat-' + (i+1)).val(data[i]);
                //     console.log($('#cat-' + (i+1)),data[i]);
                // }


            //     // Đưa dữ liệu vào các phần tử mảng
                
            //     var name = $(this).data("name");
            //     var avatar = $(this).data("avatar");
            //     var premiere_date = $(this).data("premiere_date");
            //     var country = $(this).data("country");
            //     var description = $(this).data("description");
            //     var trailer = $(this).data("trailer");
            //     // Điền dữ liệu vào form
            //     var id = $(this).data("id");
            //     $("#id").val(id);
            //     $("#name").val(name);
            //     $("#premiere_date").val(premiere_date);
            //     $("#country").val(country);
            //     $("#description").val(description);
            //     $("#trailer ").val(trailer);
            //     $("#avatar").val(avatar);
            //     // Mở modal chỉnh sửa
            //     console.log($("#avatar"));
            //    console.log($("#country").val(country));

                
            });
        });
    </script>
</body>

</html>