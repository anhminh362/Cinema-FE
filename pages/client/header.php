<?php
session_start();
?>
<head>
    <link rel="stylesheet" href="../../style/search.css">
</head>

<nav class="header">
    <div><img class="logo" src="../../asset/picture/3e1b693d-9dc1-43e7-b517-763a153989af-removebg-preview (2).png"
              alt=""><b class="logo_text">Moonlight</b></div>
    <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="#">Movies</a>
            <ul id="type-movies">
                <li><a href="playing.php">Playing</a></li>
                <li><a href="upcoming.php">Upcoming</a></li>
            </ul>
        </li>
        <li>
            <input id="search" type="text">
            <a href=""><i class="fas fa-magnifying-glass"></i></a></li>
        <!-- <li><a href="login.php">Login <i class="fas fa-user icon_user"></i></a></li> -->
        <?php if(isset($_SESSION['user'])){
            ?>
        <li>
            <a id="log_out" href="">
                <div><?php echo $_SESSION['user'] ?><i class="fas fa-user" style="color: aliceblue;"></i></div>
                <div id="log-out" class='display_none'><a href='logout.php'>Log out</a></div>
            </a>
        </li>
        <?php
        }
        else{
            ?>
        <li><a href="login.php">Login <i class="fas fa-user" style="color: aliceblue;"></i></a></li>

        <?php
        }
            ?>
    </ul>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#search').keyup(function () {
                const search_site = document.querySelector('.search_site');
                search_site.classList.remove('display_none');
                var search_text = $('#search').val();
                $.post('search.php', {data: search_text}, function (data) {
                    $('.search_result').html(data);

                })
                document, addEventListener('click', function (ev) {
                    if (ev.target.closest('.search_site')) return
                    search_site.classList.add('display_none');
                  

                })
            })
            $('#log_out').hover(function(){
                $('#log-out').removeAttr("class");
                // $('#log_out').live("mouseover", function () {
                // $('#log-out').stop(true, true).removeAttr("class");
                // });
                // $('#log_out').live("mouseleave", function () {
                //     $('#log-out').attr("class='display_none'"); });
            })
            

        })
    </script>
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
</nav>

<div class="search_site">
    <div class="search_result">
    </div>
</div>
