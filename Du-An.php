<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án abc</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./model/css/main.css">
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
    <script src="./model/js/swich-img.js"></script>
</body>

</html>