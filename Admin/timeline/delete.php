<?php
include('../dph.php');
$id = $_GET['id'];
$dpb = new dph();
$dpb -> remove('timeline','id ='.$id.'');
header("Location:./indexAdmin.php");
?>