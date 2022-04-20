<?php
include('../dph.php');
$dpb = new dph();
function upload_img($img){
    $hinhanhpath = basename($_FILES["$img"]["name"]);
    $target_dir ="../upload/";
    $target_file = $target_dir . $hinhanhpath;
    if (move_uploaded_file($_FILES["$img"]["tmp_name"], $target_file)) {
        return;
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
}
if(isset($_POST['add'])){
    $filename = $_FILES["img_1"]["name"];
    $filename_1 = $_FILES["img_2"]["name"];
    $filename_2 = $_FILES["img_3"]["name"];
    $filename_3 = $_FILES["img_4"]["name"];
    $filename_4 = $_FILES["img_5"]["name"];
    upload_img("img_1");
    upload_img("img_2");
    upload_img("img_3");
    upload_img("img_4");
    upload_img("img_5");
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
        upload_img("img_1");
        upload_img("img_2");
        upload_img("img_3");
        upload_img("img_4");
        upload_img("img_5");
        $dpb ->update('timeline_image',array(
            'img_1' => $filename,
            'img_2' => $filename_1,
            'img_3' => $filename_2,
            'img_4' => $filename_3,
            'img_5' => $filename_4
        ),'id = '.$id.'');
        header("Location: ./indexAdmin.php");     
        
    
}


