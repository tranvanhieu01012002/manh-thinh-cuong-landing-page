<?php
include('../dph.php');
$dpb = new dph();
if(isset($_POST['add'])){
    if(!empty($_POST['timeline_1'])&& !empty($_POST['timeline_2'])&& !empty($_POST['timeline_3'])&& !empty($_POST['timeline_4'])&& !empty($_POST['timeline_5'])){
        $dpb ->insert('timeline',array(
            'Timeline_1' => $_POST['timeline_1'],
            'Timeline_2' => $_POST['timeline_2'],
            'Timeline_3' => $_POST['timeline_3'],
            'Timeline_4' => $_POST['timeline_4'],
            'Timeline_5' => $_POST['timeline_5'],
        ));
        echo("Post thành công");
        header("Location: ./indexAdmin.php");
    }   
    
}
if(isset($_POST['update'])){
        $id = $_GET['id'];
        if(!empty($_POST['timeline_1'])&& !empty($_POST['timeline_2'])&& !empty($_POST['timeline_3'])&& !empty($_POST['timeline_4'])&& !empty($_POST['timeline_5'])){
            $dpb ->update('timeline',array(
                'Timeline_1' => $_POST['timeline_1'],
                'Timeline_2' => $_POST['timeline_2'],
                'Timeline_3' => $_POST['timeline_3'],
                'Timeline_4' => $_POST['timeline_4'],
                'Timeline_5' => $_POST['timeline_5'],
            ),'id = '.$id.'');
            header("Location: ./indexAdmin.php");
        }       
        
    
}


