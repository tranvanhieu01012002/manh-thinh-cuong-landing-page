<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./CSS/style-admin.css">
    <link rel="stylesheet" href="./CSS/product.css"> 
    <!-- Latest compiled and minified CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body>
 <?php 
   session_start();
   if(isset($_SESSION["login"])){?>
         <div class="sidebar">
        <div class="logo-details">
            <!-- <i class='bx bxl-c-plus-plus bx-tada'></i> -->
            <span class="logo_name"><img src="./Img/logo.png" alt="" width="200px" height="100px"></span>
        </div>
        <ul class="nav-links">
            <li>
                <!-- <a href="#" class="active"> -->
                <a href="../thong_ke/indexAdmin.php">
                    <!-- <i class='bx bx-grid-alt'></i> -->
                    <i class=' bx bx-chart'></i>     
                    <span class="links_name">Thống kê</span>
                </a>
            </li>
            <li>
                <!-- <a href="#" class="active"> -->
                <a href="../timeline/indexAdmin.php">
                    <!-- <i class='bx bx-grid-alt'></i> -->
                    <i class=' bx bxs-calendar-check'></i>
                    <span class="links_name">Mốc thời gian</span>
                </a>
            </li>
     
            <li>
                <a href="../timeline_image/indexAdmin.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Ảnh</span>
                </a>

            </li>   
            <li>
                <a href="../Customer/indexAdmin.php">
                 
                    <i class=' bx bx-user'></i>
                    <span class="links_name">Khách hàng</span>
                </a>
            </li>
            <li>
                <a href="../project/indexAdmin.php">
              
                    <i class=' bx bx-home-alt'></i>
                    <span class="links_name">Nhà</span>
                </a>
            </li>
            <li>
                <a href="../timeline_text/indexAdmin.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Nội dung</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
    <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Manh Thinh Cuong</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../logout.php">Logout</a>
                    </div>
                </li>
            </ul>
            </div>
        </nav>
        <br><br><br>
        <?php
            include "timeline.php"
        ?>
    </section>
    
   <!-- ---------------------------------JS------------------------------------------------------------- -->
    <!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="./JS/productmrD.js"></script> 
    <script src="./JS/admin.js"></script> -->
    <script src="../model/js/indexAdmin-sidebar.js"></script>
    <link rel="stylesheet" href="./CSS/style.css">
 <?php  } 
 else{
   header("Location:../Login.php");
 }  
   ?>
</body>
</html>