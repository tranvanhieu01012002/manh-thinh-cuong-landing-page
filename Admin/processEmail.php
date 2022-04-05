<?php 
require_once("C:/xampp/htdocs/Tamxin/manh-thinh-cuong-landing-page/Admin/dph.php");
//include("./Admin/dph.php");
$dpb = new dph();
if(isset($_POST['add'])){

    if(!empty($_POST['name'])&& !empty($_POST['email'])&& !empty($_POST['number']) && !empty($_POST['request'])){
        $dpb ->insert('customers',array(
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'number' => $_POST['number'],
            'request' => $_POST['request']
        ));
        header("Location:http://localhost:8080/Tamxin/manh-thinh-cuong-landing-page/Admin/Customer/indexAdmin.php");
    }   
    
}
?>