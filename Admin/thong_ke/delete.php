<?php
include('../dph.php');
$id = $_GET['id'];
$dpb = new dph();
$dpb -> remove('customers','id ='.$id.'');
header("Location: ./indexAdmin.php")
?>