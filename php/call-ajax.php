<?php
include("../Admin/dph.php");


if(isset($_POST["data"])){
    $dataa = new dph();
    $row = $dataa->get_row("select * from text_time_line where id = '31'");
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
