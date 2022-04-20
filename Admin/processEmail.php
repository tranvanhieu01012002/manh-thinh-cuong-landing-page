<?php 
require ("dph.php");
require ("./indexs.php");
$dpb = new dph();
if(isset($_POST['add'])){
    if(!empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['number']) && !empty($_POST['request'])){
        $dpb ->insert('customers',array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'number' => $_POST['number'],
            'request' => $_POST['request']
        ));
        sendEmail();
        header("Location: ../Trang-Chu.php?check=1");
        
    } else {
        header("Location: ../Trang-Chu.php?check=0");
    }
}
?>
