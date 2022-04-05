<?php
include('../dph.php');
$id = $_GET['id'];
$dpb = new dph();
$dpb -> remove('customers','id ='.$id.'');
header("Location: http://localhost:8080/Tamxin/Admin/Customer/indexAdmin.php")
?>