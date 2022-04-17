<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/project.css">
<div class="container">
  <h2>BẢNG DỰ ÁN</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-2">Tên dự án:</div>
      <div class="col col-2">Mã dự án:</div>
      <div class="col col-2">Diện tích đất:</div>
      <div class="col col-2">Tổng diện tích xây dựng</div>
      <div class="col col-2">Image</div>
      <div class="col col-2">Description</div>
      <div class="col col-2">Description_detail</div>
      <div class="col col-2">Tên khách hàng</div>
      <div class="col col-2">Địa chỉ</div>
      <div class="col col-2">Quận</div>
      <div class="col col-2">Loại xây dựng</div>
      <div class="col col-2">Ngày bắt đầu</div>
      <div class="col col-2">Ngày bàn giao</div>      
      <div class="col col-1">Sửa</div>
      <div class="col col-1">Xóa </div>
    </li>
    <?php   
        $database = new dph();
        $row = $database -> get_list('select * from project;')?>
        <?php foreach($row as $value):?>
          <li class="table-row">
          <div class="col col-2"><?php echo $value['name_project'] ?></div>
          <div class="col col-2"><?php echo $value['project_code'] ?></div>
          <div class="col col-2"><?php echo $value['land_area'] ?></div>
          <div class="col col-2"><?php echo $value['total_cons_area'] ?></div>
          <div class="col col-2"><img width="100%" src="../img/<?php echo $value['img'] ?>" alt=""></div>
          <div class="col col-2"><?php echo $value['Description'] ?></div>
          <div class="col col-2"><?php echo $value['Description_detail'] ?></div>
          <div class="col col-2"><?php echo $value['name_cus'] ?></div>
          <div class="col col-2"><?php echo $value['address'] ?></div>
          <div class="col col-2"><?php echo $value['district'] ?></div>
          <div class="col col-2"><?php echo $value['construc_type'] ?></div>
          <div class="col col-2"><?php echo $value['start'] ?></div>
          <div class="col col-2"><?php echo $value['delivery'] ?></div>
          <div class="col col-1"><a href="./update.php?id=<?php echo $value['id_project']?>">Chỉnh sửa</a></div>
          <div class="col col-1"><a href="./delete.php?id=<?php echo $value['id_project']?>">Xóa</a></div>
        </li>
        <?php endforeach ?>
  </ul>
  <a href="../project/Form.php">Add Form</a>
</div>
