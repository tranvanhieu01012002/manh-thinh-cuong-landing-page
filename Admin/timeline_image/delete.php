<?php
include('../dph.php');
$id = $_GET['id'];
$dpb = new dph();
$dpb -> remove('timeline_image','id ='.$id.'');
header("Location:http://localhost:8080/Tamxin/Admin/timeline_image/indexAdmin.php")
?>