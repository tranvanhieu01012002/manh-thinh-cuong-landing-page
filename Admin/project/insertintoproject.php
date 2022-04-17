<?php
include('../dph.php');
$dpb = new dph();
if(isset($_POST['add_project'])){
    $filename = $_FILES["img"]["name"];
    if(!empty($_POST['name_project'])&& !empty($_POST['project_code'])&& !empty($_POST['land_area'])&& !empty($_POST['total_cons_area']) && !empty($_POST['name_cus'])&& !empty($_POST['cus_num']) && !empty($_POST['cus_ID']) && !empty($_POST['address']) && !empty($_POST['district']) && !empty($_POST['construc_type']) && !empty($_POST['start']) && !empty($_POST['delivery'])){
        $dpb ->insert('project',array(
            'name_project' => $_POST['name_project'],
            'project_code' => $_POST['project_code'],
            'land_area' => $_POST['land_area'],
            'total_cons_area' => $_POST['total_cons_area'],
            'name_cus' => $_POST['name_cus'],
            'cus_num' => $_POST['cus_num'],
            'cus_ID' => $_POST['cus_ID'],
            'address' => $_POST['address'],
            'district' => $_POST['district'],
            'construc_type' => $_POST['construc_type'],
            'start' => $_POST['start'],
            'delivery' => $_POST['delivery'],
            'img' => $filename,
            'Description' => $_POST['des'],
            'Description_detail' => $_POST['desdetail'],
            'outstanding' => $_POST['outstanding']
        ));
        header("Location:./indexAdmin.php");
    }   
    
}
if(isset($_POST['update_project'])){
        $id = $_GET['id'];
        $filename = $_FILES["img"]["name"];
        if(!empty($_POST['name_project'])&& !empty($_POST['project_code'])&& !empty($_POST['land_area'])&& !empty($_POST['total_cons_area']) && !empty($_POST['name_cus'])&& !empty($_POST['cus_num']) && !empty($_POST['cus_ID']) && !empty($_POST['address']) && !empty($_POST['district']) && !empty($_POST['construc_type']) && !empty($_POST['start']) && !empty($_POST['delivery'])){
            $dpb ->update('project',array(
                'name_project' => $_POST['name_project'],
                'project_code' => $_POST['project_code'],
                'land_area' => $_POST['land_area'],
                'total_cons_area' => $_POST['total_cons_area'],
                'name_cus' => $_POST['name_cus'],
                'cus_num' => $_POST['cus_num'],
                'cus_ID' => $_POST['cus_ID'],
                'address' => $_POST['address'],
                'district' => $_POST['district'],
                'construc_type' => $_POST['construc_type'],
                'start' => $_POST['start'],
                'delivery' => $_POST['delivery'],
                'img' => $filename,
                'Description' => $_POST['des'],
                'Description_detail' => $_POST['desdetail'],
                'outstanding' => $_POST['outstanding']
            ),'id_project = '.$id.'');
            header("Location:./indexAdmin.php");
        }       
        
    
}


