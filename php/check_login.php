<?php
session_start();
$conn =  mysqli_connect("localhost","root","","constractor_building");
$_SESSION['FB_ID']=$_POST['id'];
$_SESSION['FB_NAME'] = $_POST['name'];
$id = $_SESSION['FB_ID'];
$id = strval($id);  
$name = $_SESSION['FB_NAME'];

// $name=mysqli_real_escape_string($conn, $_POST['name']);
// $id=mysqli_real_escape_string($conn,$_POST['id']);
$res = mysqli_query($conn, "select * from user_info where id_on_fb=".$id);
echo mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
}
else{
    mysqli_query($conn,"INSERT INTO user_info (name,id_on_fb) values ('$name','$id')");
 
}

mysqli_close($conn);;
?>