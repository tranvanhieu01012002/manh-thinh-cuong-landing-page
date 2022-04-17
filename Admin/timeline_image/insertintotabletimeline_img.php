<?php
include('../dph.php');
$dpb = new dph();
if(isset($_POST['add'])){
    $filename = $_FILES["img_1"]["name"];
    $filename_1 = $_FILES["img_2"]["name"];
    $filename_2 = $_FILES["img_3"]["name"];
    $filename_3 = $_FILES["img_4"]["name"];
    $filename_4 = $_FILES["img_5"]["name"];
        $dpb ->insert('timeline_image',array(
            'img_1' => $filename,
            'img_2' => $filename_1,
            'img_3' => $filename_2,
            'img_4' => $filename_3,
            'img_5' => $filename_4
            
        ));
        header("Location: ./indexAdmin.php");
      
    
}
if(isset($_POST['update'])){
        $id = $_GET['id'];
        $filename = $_FILES["img_1"]["name"];
        $filename_1 = $_FILES["img_2"]["name"];
        $filename_2 = $_FILES["img_3"]["name"];
        $filename_3 = $_FILES["img_4"]["name"];
        $filename_4 = $_FILES["img_5"]["name"];
        $dpb ->update('timeline_image',array(
            'img_1' => $filename,
            'img_2' => $filename_1,
            'img_3' => $filename_2,
            'img_4' => $filename_3,
            'img_5' => $filename_4
        ),'id = '.$id.'');
        header("Location: ./indexAdmin.php");     
        
    
}


