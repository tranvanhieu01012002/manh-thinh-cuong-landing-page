<?php
include('../dph.php');
$id = $_GET['id'];
$dpb = new dph();
$dpb -> remove('slides','id ='.$id.'');
header("Location:http://localhost:8080/Tamxin/Admin/sildes/indexAdmin.php")
?>