<?php
include('../dph.php');
$dpb = new dph();
if(isset($_POST['add'])){
    $filename = $_FILES["img"]["name"];
    if(!empty($_POST['content'])&& !empty($_POST['des'])&& !empty($_POST['desdetail'])){
        $dpb ->insert('slides',array(
            'img' => $filename,
            'Content' => $_POST['content'],
            'Description' => $_POST['des'],
            'Description_detail' => $_POST['desdetail']
        ));
        header("Location: ./indexAdmin.php");
    }   
    
}
if(isset($_POST['update'])){
        $id = $_GET['id'];
        $filename = $_FILES["img"]["name"];
        if(!empty($_POST['content'])&& !empty($_POST['des'])&& !empty($_POST['desdetail'])){
            $dpb ->update('slides',array(
                'img' => $filename,
                'Content' => $_POST['content'],
                'Description' => $_POST['des'],
                'Description_detail' => $_POST['desdetail']
            ),'id = '.  $id.'');
            header("Location: ./indexAdmin.php");
        }       
        
    
}


