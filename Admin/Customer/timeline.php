<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/timeline.css">
<div class="container">
  <h2>KHÁCH HÀNG</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-2">Tên</div>
      <div class="col col-5">Email</div>
      <div class="col col-2">Điện thoại</div>
      <div class="col col-2">Yêu cầu</div> 
      <div class="col col-1">Xóa</div>
    </li>
    <?php 
        $database = new dph();
        $row = $database -> get_list('select * from customers;')?>
        <?php foreach($row as $value):?>
          <li class="table-row">
            <div class="col col-2"><?php echo $value['name'] ?></div>
            <div class="col col-5"><?php echo $value['email'] ?></div>
            <div class="col col-2"><?php echo $value['number'] ?></div>
            <div class="col col-2"><?php echo $value['request'] ?></div>
            <div class="col col-1"><a href="./delete.php?id=<?php echo $value['id']?>">Xóa</a></div>
        </li>
        <?php endforeach ?>
  </ul>
</div>
