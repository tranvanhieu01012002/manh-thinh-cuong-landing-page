<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="header">
    <div class="infor">
        <div class="display-info">
            <div class="hotline">
                <p><i class="fa fa-volume-control-phone"></i> Hotline: 0965 360 174</p>
            </div>
            <div class="email">
                <p><i class="fa fa-envelope-o"></i> Email: manhthinhcuong@gmail.com</p>
            </div>
        </div>


    </div>
    <div class="menu">
        <div class="logo-image">
            <img src="./model/img/image.jpg" alt="">
        </div>
        <nav class="style-4">
            <ul class="menu-4">
                <?php
                // if(isset($_GET[""])

                ?>
                <li class="current"><a href="#" data-hover="Trang chủ">Trang chủ</a></li>
                <li><a href="#" data-hover="Giới thiệu">Giới thiệu</a></li>
                <li><a href="#" data-hover="Nhà">Nhà</a></li>
                <li><a href="#" data-hover="Liên hệ">Liên hệ</a></li>
            </ul>
        </nav>
        <div class="responsive-header">
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#">Tran chủ</a>
                <a href="#">Giới thiệu</a>
                <a href="#">Nhà</a>
                <a href="#">Liên hệ</a>
                <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <button class="openbtn" onclick="openNav()">☰ </button>
        </div>
        <div class="box">
            <form action="" class="container-4">
                <input type="search" id="search" placeholder="Search..." />
                <button class="icon"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>

</div>
<div class="virtual-class"></div>
<script src="./model/js/header.js"></script>