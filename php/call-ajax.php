<?php
include("../Admin/dph.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

if(isset($_POST["data"])){
    $dataa = new dph();
    $row = $dataa->get_row('select * from timeline_text where id = "'.$id.'"');
    $i = 0;
    foreach($row as $value){
        if($i==$_POST["data"] ){
            echo $value;
            break;
        }
        $i++;
    }
}

?>
