<?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "cinema";

   // Create connection
   $conn = mysqli_connect($host,$user,$password,$database);
   mysqli_set_charset($conn,"UTF8");

   // Check connection
   if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
   }
  
      //  echo "Connected Successfully !";
     error_reporting(0);
    //   Lấy thông tin sản phẩm để sửa
											
    //   if (isset($_GET['id']))							
    //   {							
    //   if (isset($_GET['es'])) {							
    //   echo "<script type=\"text/javascript\">alert(\"Bạn đã sửa sản phẩm thành công!\");</script>";					
    //   }							
    //   if (isset($_GET['ef'])) {							
    //   echo "<script type=\"text/javascript\">alert(\"Sửa sản phẩm thất bại!\");</script>";							
    //   }							
    //   }  

    //   if (isset($_GET['id']))							
    //   {							
    //       $id = $_GET['id'];							
    //       $sql = "SELECT * FROM movie WHERE id = " . $id;							
    //       $sqli = mysqli_query($conn,$sql);	
    //       $row = mysqli_fetch_assoc($sqli);					
    //   }
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
                    <a href="#"  class="icon-item">
                        <ion-icon name="person"  ></ion-icon>
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
                        <a href="#" class="bar-user"><span >User </span></a>
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
                                    <label for="name" class="title-title" >Name:</label>
                                    <input type="text" class="input-btn" name="name" value="<?php echo $row['name']; ?>"><br><br>
                                    <label for="avatar" class="title-title">Avatar:</label>
                                    <input type="file" class="input-btn" name="avatar" value="<?php echo $row['avatar']; ?>"><br><br>
                                    <label for="date" class="title-title">Premiere date:</label>
                                    <input type="date" class="input-btn" name="premiere_date" value="<?php echo $row['premiere_date']; ?>"><br><br>
                                    <label for="country" class="title-title">Country:</label>
                                    <input  name="country" class="input-btn" value="<?php echo $row['country'];?>"><br> <br> 
                                    <label for="describe" class="title-title">Describe:</label>
                                    <input  name="description" type="text" class="input-btn" value="<?php echo $row['description'];?>"><br> <br> 
                                    <label for="trailer" class="title-title">Trailer:</label>
                                    <input  name="trailer" type="file" class="input-btn" value="<?php echo $row['trailer'];?>"><br> <br> 
                                    <div class="modal-footer">
                                        <input type="submit" name='submit' class="btn bg-danger text-white" value="Add">
                                    </div>
                                </form>
                            </div>
                           
                            </div>
                        </div>
                    </div>  <br><br>
                     <!-- Nút mở modal -->

                    <!-- Modal Edit -->
                    <div id="meModal" tabindex="-1" role="dialog" class="modal fade" data-backdrop="static">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">FOMR EDIT</h5>
                                <button type="button" name="close" class="close" data-dismiss="modal" aria-label="Đóng">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" class="form-form" action="edit.php"> <br>
                                    <!-- <input type="hidden" name="action" value="add"> Trường ẩn để xác định hành động -->
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                                    <label for="name" class="title-title" >Name:</label>
                                    <input type="text" id="name" class="input-btn" name="name" value="<?php echo $row['name']; ?>"><br><br>
                                    <label for="avatar"  class="title-title">Avatar:</label>
                                    <input type="file"id="avatar" class="input-btn" name="avatar" value="<?php echo $row['avatar']; ?>"><br><br>
                                    <label for="date" class="title-title">Premiere date:</label>
                                    <input type="date" id="premiere_date" class="input-btn" name="premiere_date" value="<?php echo $row['premiere_date']; ?>"><br><br>
                                    <label for="country" class="title-title">Country:</label>
                                    <input  name="country" id="country" class="input-btn" value="<?php echo $row['country'];?>"><br> <br> 
                                    <label for="describe" class="title-title">Describe:</label>
                                    <input  name="description" id="description" type="text" class="input-btn" value="<?php echo $row['description'];?>"><br> <br> 
                                    <label for="trailer" class="title-title">Trailer:</label>
                                    <input  name="trailer" id="trailer" type="file" class="input-btn" value="<?php echo $row['trailer'];?>"><br> <br> 
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
                                    <th>Avater</th>
                                    <th>PremiereDate</th>
                                    <th>Country</th>
                                    <th>Describe</th>
                                    <th>Trailer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tab">
                            <?php
                                $sql = "SELECT * FROM movie";
                                $sqli=mysqli_query($conn,$sql);
                                if (mysqli_num_rows($sqli) > 0) {
                                    while ($row = mysqli_fetch_assoc($sqli)) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['avatar'] . "</td>";
                                        echo "<td>" . $row['premiere_date'] . "</td>";
                                        echo "<td>" . $row['country'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                        echo "<td>" . $row['trailer'] . "</td>";
                                        echo "<td><span data-toggle='modal' data-target='#meModal' class='btn-edit' data-id='" . $row['id'] . "' data-name='" . $row['name'] . "' data-avatar='" . $row['avatar'] . "'data-premiere_date='" . $row['premiere_date'] . "'data-country='" . $row['country'] . "'data-description='" . $row['description'] . "'data-trailer='" . $row['trailer'] . "'><ion-icon name='pencil-outline'class='icon-ac-edit'></span><a href='delete.php?id=". $row['id'] ."'><ion-icon name='trash-outline' class='icon-ac-del'></a></td>";
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

    
     <!--modal  -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            
            $(document).ready(function() {
            // Khi nút chỉnh sửa được click
            $(".btn-edit").click(function() {
                // Lấy dữ liệu từ data attribute của nút chỉnh sửa
                var id = $(this).data("id");
                var name = $(this).data("name");
                var avatar = $(this).data("avatar");
                var premiere_date = $(this).data("premiere_date");
                var country = $(this).data("country");
                var description = $(this).data("description");
                var trailer = $(this).data("trailer");
                // Điền dữ liệu vào form
                $("#id").val(id);
                $("#name").val(name);
                $("#avatar").val(avatar);
                $("#premiere_date").val(premiere_date);
                $("#country").val(country);
                $("#description").val(description);
                $("#trailer ").val(trailer );
            });
            });
        </script>
</body>
</html>
