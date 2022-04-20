<!DOCTYPE html>
<html lang="en">
<?php
include("./Admin/dph.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $database = new dph();
    $row = $database->get_row('select * from project where id_project = ' . $id . ' ;');
    echo $row['Description'];
?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <link rel="stylesheet" href="./model/css/main.css">
</head>

<body>
    <!-- Header -->
    <?php
    include "./php/Header.php";
    ?>
    <div class="display-menu">
    <div class="menu">
        <div class="logo-image">
        <a href="./Trang-Chu.php"><img src="./model/img/logo1.png" alt=""></a>
        </div>
        <nav class="style-4">
            <ul class="menu-4">
                <li ><a href="./Trang-Chu.php" data-hover="Trang chủ">Trang chủ</a></li>
                <li ><a href="./IntroducePage.php" data-hover="Giới thiệu">Giới thiệu</a></li>
                <li class="current"><a href="#" data-hover="Nhà">Nhà</a></li>
                <li><a href="#footer" data-hover="Liên hệ">Liên hệ</a></li>
            </ul>
        </nav>
        <div class="responsive-header">
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="./Trang-Chu.php">Trang chủ</a>
                <a href="./IntroducePage.php">Giới thiệu</a>
                <a href="#">Nhà</a>
                <a href="#footer">Liên hệ</a>
                <form class="search-container" action="./danh-sach-du-an.php" method="GET">
                    <input type="text" name="search" class="searchTerm" placeholder="Tìm kiếm">
                    <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <button class="openbtn" onclick="openNav()">☰ </button>
        </div>
        <div class="box">
            <form action="./danh-sach-du-an.php" method="GET">
                <div class="search">
                    <input type="text" name="search" class="searchTerm" placeholder="Tìm kiếm">
                    <button type="submit" class="searchButton"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
        </div>
    </div>
    <div class="virtual-class"></div>
    
    <!-- Header -->
    <?php
    include "./php/home.php";
    //require_once "./php/home.php";
    ?>
    <!-- footer -->
    <?php
    include "./php/Footer.php";
    ?>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js "
        integrity="
                            sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="
                            anonymous " referrerpolicy=" no-referrer "></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js "
        integrity="
                            sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="
                            anonymous " referrerpolicy=" no-referrer "></script>
    <script src="./model/js/swich-img.js"></script>
    <script src="./model/js/header.js"></script>
    <script src="./model/js/banner.js"></script>
    <script src="./model/js/index.js"></script>
    <script src="./model/js/call-ajax.php"></script>
    <script src="./model/js/filter.js"></script>




</body>

</html>