<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Films</title>
    <!-- link CSS -->
    <link href='/style/admin_films.css' rel='stylesheet'>
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
                <div><img class="logo" src="/asset/picture/3e1b693d-9dc1-43e7-b517-763a153989af-removebg-preview (2).png" alt=""><b class="logo_text">MoonLight</b></div>
                <div class="row">
                    <a href=""  class="icon-item">
                        <ion-icon name="person"  ></ion-icon>
                        <b> User</b>
                    </a> 
                </div><br><br>
                <div class="row"> 
                    <a hreft="#" class="icon-play">
                        <ion-icon name="play-circle"></ion-icon>
                        <b> Films</b>
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
                <div class="container"> <br><br>
                    <!-- form -->
                    <form action="">
                        <div class="row">
                            <div class="col-lg-8">  
                                <span class="sub-item">Avatar :</span>
                                <span><input class="btn-type" type="url" placeholder=" Link"></span>
                            </div>
                            <div class="col-lg-4">
                                <!--  -->
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-8"> 
                                <span class="sub-item">Name :</span>
                                <span ><input class="btn-input" type="text" placeholder=" Input film"></span>
                            </div>
                            <div class="col-lg-4">
                                <!--  -->
                            </div>
                        </div> <br><br>
                        <div class="row">
                            <div class="col-sm-8"> 
                                <span class="sub-item">Premiere date:</span>
                                <span><input class="btn-dis" type="datetime-local"></span>
                            </div>
                            <div class="col-sm-4">
                                <!--  -->
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-8">
                                <span class="sub-item">Country :</span>
                                <span ><select class="btn-select">
                                    <option value=""></option>
                                    <option value="">US</option>
                                    <option value="">UK</option>
                                    <option value="">Vietnam</option>
                                    <option value="">Korea</option>
                                </select></span></span>
                            </div>
                            <div class="col-lg-4">
                                <!--  -->
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-lg-8"> 
                                <span class="sub-item">Describe :</span>
                                <span ><input class="btn-input" type="text" placeholder=" Input film"></span>
                            </div>
                            <div class="col-lg-4">
                                <!--  -->
                            </div>
                        </div> <br><br>
                        <div class="row">
                            <div class="col-sm-5"> 
                                <span class="sub-item">Trailer :</span>
                                <span><input class="btn-dis" type="file"></span>
                            </div>
                            <div class="col-sm-7">
                                <!--  -->
                            </div>
                        </div><br><br>
                        <div class="row">
                            <div class="col-sm-5"> 
                                <span class="sub-item">Action :</span>
                                <span><button class="btn-sub" type="submit">Save</button></span>
                            </div>
                            <div class="col-sm-7">
                                <!--  -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
