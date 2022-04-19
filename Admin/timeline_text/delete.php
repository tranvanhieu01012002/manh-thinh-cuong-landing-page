<?php
include('../dph.php');
$id = $_GET['id'];
$dpb = new dph();
$dpb -> remove('timeline_text','id ='.$id.'');
header("Location: ./indexAdmin.php")
?>
