

<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("./Admin/dph.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ web xây dựng</title>
    <link rel="shortcut icon" type="image/x-icon" href="./model/img/logo1.png" />
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
    <!-- Header -->
   <div class="display-menu">
        <div style="height:90px;" class="menu">
        <div class="logo-image">
           <a href="./Trang-Chu.php"><img src="./model/img/logo1.png" alt=""></a>
        </div>
        <nav class="style-4">
            <ul class="menu-4">
                <li><a href="./Trang-Chu.php" data-hover="Trang chủ">Trang chủ</a></li>
                <li><a href="./IntroducePage.php" data-hover="Giới thiệu">Giới thiệu</a></li>
                <li class="current"><a href="#" data-hover="Nhà">Nhà</a></li>
                <li><a href="./Trang-Chu.php#footer" data-hover="Liên hệ">Liên hệ</a></li>
            </ul>
        </nav>
        <div class="responsive-header">
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="./Trang-Chu.php">Trang chủ</a>
                <a href="./IntroducePage.php">Giới thiệu</a>
                <a href="#">Nhà</a>
                <a href="#footer">Liên hệ</a>
                <form class="search-container" action="./danh-sach-du-an.php">
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
    <form action="./danh-sach-du-an.php" method = "POST">
            <div class="filter">
                <div class="select_option">
                    <select name="type" id="type">
                        <option value="nhao" selected disabled>Loại xây dựng</option>
                        <option value="Nhà ở">Nhà ở</option>
                        <option value="Biệt thự">Biệt thự</option>
                        <option value="Cao tầng">Nhà cao tầng</option>
                        <option value="Nhà vườn">Nhà vườn</option>
                        <option value="Chung cư">Chung cư</option>
                        <option value="Nhà hồ bơi">Nhà có hồ bơi</option>
                    </select>
                    <select name="year" id="year">
                        <option value="2022" selected disabled>Năm xây dựng</option>
                        <option value="2022">2022</option>
                        <option value="2020">2020 </option>
                        <option value="2019">2019 </option>
                        <option value="2018">2018 </option>
                        <option value="2017">2017</option>
                        <option value="2016">2016 </option>
                    </select>
                    <select name="district" id="district">
                        <option value="Thanh Khê" selected disabled>Quận</option>
                        <option value="Sơn Trà">Sơn Trà</option>
                        <option value="Liên Chiểu">Liên Chiểu</option>
                        <option value="Thanh Khê">Thanh Khê</option>
                        <option value="Hải Châu">Hải châu</option>
                        <option value="Cẩm Lệ">Cẩm Lệ</option>
                        <option value="Hòa Vang">Hòa Vang</option>
                    </select>
                    <div class="filter-main">
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="slider-range"></div>
                            </div>
                        </div>
                        <div class="row slider-labels">
                            <div class="col-xs-6 caption">
                                <strong>Min m<sup>2</sup>:</strong> <span id="slider-range-value1"></span>
                            </div>
                            <div class="col-xs-6 text-right caption">
                                <strong>|Max m<sup>2</sup>:</strong> <span id="slider-range-value2"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div >
                                <!-- <form > -->
                                    <input type="hidden" id = "min-value" name="min-value" value="100">
                                    <input type="hidden" id = "max-value" name="max-value" value="200">
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>  
                  <div>
                  <button style="margin:0px" type="submit" name="search_house" class="btn-root">Lọc<span></span></button>
                  </div>
                </div>
            </div>
        </form>
   </div>
    </div>
	<!-- <div class="virtual-class"></div> -->
	<?php

	include "./php/house.php";
	?>
    <!-- Banner -->
  	<!-- footer -->
	
    <?php
	

    //include("./Admin/processEmail.php");
    // include("./php/Footer.php");
    ?>
    
    <script src="./model/js/header.js"></script>
    <script src="./model/js/banner.js"></script>
    <script src="./model/js/index.js"></script>
    <script src="./model/js/getUserInfo.js"></script>
    <script src="./model/js/filter.js"></script>

<img src="" alt="">

</body>


</html>