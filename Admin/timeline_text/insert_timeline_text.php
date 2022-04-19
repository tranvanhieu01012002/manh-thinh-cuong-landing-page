<?php
include('../dph.php');
$dpb = new dph();
if(isset($_POST['add'])){
    if(!empty($_POST['text1'])&& !empty($_POST['text2'])&& !empty($_POST['text3'])&& !empty($_POST['text4'])&& !empty($_POST['text5'])){
        $dpb ->insert('timeline_text',array(
            'text1' => $_POST['text1'],
            'text2' => $_POST['text2'],
            'text3' => $_POST['text3'],
            'text4' => $_POST['text4'],
            'text5' => $_POST['text5'],
        ));
        echo("Post thành công");
        header("Location: ./indexAdmin.php");
    }   
    
}
if(isset($_POST['update'])){
        $id = $_GET['id'];
        if(!empty($_POST['text1'])&& !empty($_POST['text2'])&& !empty($_POST['text3'])&& !empty($_POST['text4'])&& !empty($_POST['text5'])){
            $dpb ->update('timeline_text',array(
                'text1' => $_POST['text1'],
                'text2' => $_POST['text2'],
                'text3' => $_POST['text3'],
                'text4' => $_POST['text4'],
                'text5' => $_POST['text5'],
            ),'id = '.$id.'');
            header("Location: ./indexAdmin.php");
        }       
        
    
}


