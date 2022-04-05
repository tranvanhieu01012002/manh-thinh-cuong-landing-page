<!DOCTYPE html>
<html lang="en">
<?php 
    include ("./Admin/dph.php");
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án abc</title>
    <link rel="stylesheet" href="./model/css/header.css">
    <link rel="stylesheet" href="./model/css/footer.css">
    <link rel="stylesheet" href="./model/css/home1.css">


</head>

<body>
    <!-- Header -->
    <?php
    include "./php/Header.php";
    ?>
    <!-- Header -->

    <!-- Banner -->
    <?php
    include "./php/Banner.php";
    ?>
    <!-- Banner -->

    <?php
    require_once "./php/home.php";
    ?>


    <!-- footer -->
    <?php
    include "./php/Footer.php";
    ?>
</body>
<script src="./model/js/swich-img.js"></script>

</html>