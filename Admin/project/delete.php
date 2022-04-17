<?php
include('../dph.php');
$id = $_GET['id'];
$dpb = new dph();
$dpb -> remove('project','id_project ='.$id.'');
header("Location:./indexAdmin.php")
?>