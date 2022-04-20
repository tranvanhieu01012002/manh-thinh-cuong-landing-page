<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/timeline.css">
<div class="container">
  <h2>BẢNG TIMELINE ẢNH</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-2">Img_1</div>
      <div class="col col-2">Img_2</div>
      <div class="col col-2">Img_3</div>
      <div class="col col-2">Img_4</div>
      <div class="col col-2">Img_5</div>
      <div class="col col-1">Sửa</div>
      <div class="col col-1">Xóa </div>
    </li>
    <?php   
        $database = new dph();
        $row = $database -> get_list('select * from timeline_image;')?>
        <?php foreach($row as $value):?>
          <li class="table-row">
          <div class="col col-2"><img src="../upload/<?php echo $value['img_1'] ?>" alt=""></div>
          <div class="col col-2"><img src="../upload/<?php echo $value['img_2'] ?>" alt=""></div>
          <div class="col col-2"><img src="../upload/<?php echo $value['img_3'] ?>" alt=""></div>
          <div class="col col-2"><img src="../upload/<?php echo $value['img_4'] ?>" alt=""></div>
          <div class="col col-2"><img src="../upload/<?php echo $value['img_5'] ?>" alt=""></div>
            <div class="col col-1"><a href="./update.php?id=<?php echo $value['id']?>">Chỉnh sửa</a></div>
            <div class="col col-1"><a href="./delete.php?id=<?php echo $value['id']?>">Xóa</a></div>
        </li>
        <?php endforeach ?>
  </ul>
  <a href="../timeline_image/Form.php">Add Form</a>
</div>
<img src="" alt="">