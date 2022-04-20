<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/project.css">
<div class="container">
  <h2>BẢNG DỰ ÁN</h2>
  <ul class="responsive-table">
 <li class="table-header">
   <div class=" ">Tên dự án:</div>
   <div class=" ">Mã dự án:</div>
   <div class=" ">Diện tích đất:</div>
   <div class=" ">Tổng diện tích xây dựng</div>
   <div class=" ">Image</div>
   <div class=" ">Description</div>
   <div class=" ">Description_detail</div>
   <div class=" ">Tên khách hàng</div>
   <div class=" ">Địa chỉ</div>
   <div class=" ">Quận</div>
   <div class=" ">Loại xây dựng</div>
   <div class=" ">Ngày bắt đầu</div>
   <div class=" ">Ngày bàn giao</div>   
   <div class=" ">Sửa</div>
   <div class=" ">Xóa </div>
 </li>
 <?php   
  $database = new dph();
  $row = $database -> get_list('select * from project;')?>
  <?php foreach($row as $value):?>
    <li class="table-row">
    <div class=" "><?php echo $value['name_project'] ?></div>
    <div class=" "><?php echo $value['project_code'] ?></div>
    <div class=" "><?php echo $value['land_area'] ?></div>
    <div class=" "><?php echo $value['total_cons_area'] ?></div>
    <div class=" "><img width="100%" src="../upload/<?php echo $value['img'] ?>" alt=""></div>
    <div class=" "><?php echo $value['Description'] ?></div>
    <div class=" "><?php echo $value['Description_detail'] ?></div>
    <div class=" "><?php echo $value['name_cus'] ?></div>
    <div class=" "><?php echo $value['address'] ?></div>
    <div class=" "><?php echo $value['district'] ?></div>
    <div class=" "><?php echo $value['construc_type'] ?></div>
    <div class=" "><?php echo $value['start'] ?></div>
    <div class=" "><?php echo $value['delivery'] ?></div>
    <div class=" "><a href="./update.php?id=<?php echo $value['id_project']?>">Chỉnh sửa</a></div>
    <div class=" "><a href="./delete.php?id=<?php echo $value['id_project']?>">Xóa</a></div>
  </li>
  <?php endforeach ?>
  </ul>
  <a href="../project/Form.php">Add Form</a>
</div>
<img src="" alt="">