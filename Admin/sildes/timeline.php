<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/timeline.css">
<div class="container">
  <h2>BẢNG TIMELINE</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-2">Mô tả</div>
      <div class="col col-2">Ảnh</div>
      <div class="col col-2">Mô tả</div>
      <div class="col col-2">Mô tả chi tiết</div> 
      <div class="col col-1">Sửa</div>
      <div class="col col-1">Xóa </div>
    </li>
    <?php 
        $database = new dph();
        $row = $database -> get_list('select * from slides;')?>
        <?php foreach($row as $value):?>
          <li class="table-row">
            <div class="col col-2"><?php echo $value['Content'] ?></div>
            <div class="col col-2"><img width="100%" src="../img/<?php echo $value['img'] ?>" alt=""></div>
            <div class="col col-2"><?php echo $value['Description'] ?></div>
            <div class="col col-2"><?php echo $value['Description_detail'] ?></div>
            <div class="col col-1"><a href="./update.php?id=<?php echo $value['id']?>">Chỉnh sửa</a></div>
            <div class="col col-1"><a href="./delete.php?id=<?php echo $value['id']?>">Xóa</a></div>
        </li>
        <?php endforeach ?>
  </ul>
  <a href="../sildes/Form.php">Add Form</a>
</div>
