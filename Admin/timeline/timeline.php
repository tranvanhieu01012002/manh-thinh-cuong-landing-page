<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/timeline.css">
<div class="container">
  <h2>MỐC THỜI GIAN</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-2">Timeline_1</div>
      <div class="col col-2">Timeline_2</div>
      <div class="col col-2">Timeline_3</div>
      <div class="col col-2">timeline_4</div>
      <div class="col col-2">Timeline_5</div>
      <div class="col col-1">Sửa</div>
      <div class="col col-1">Xóa </div>
    </li>
    <?php   
        $database = new dph();
        $row = $database -> get_list('select * from timeline;')?>
        <?php foreach($row as $value):?>
          <li class="table-row">
          <div class="col col-2"><?php echo $value['Timeline_1'] ?></div>
          <div class="col col-2"><?php echo $value['Timeline_2'] ?></div>
          <div class="col col-2"><?php echo $value['Timeline_3'] ?></div>
          <div class="col col-2"><?php echo $value['Timeline_4'] ?></div>
          <div class="col col-2"><?php echo $value['Timeline_5'] ?></div>
            <div class="col col-1"><a href="./update.php?id=<?php echo $value['id']?>">Chỉnh sửa</a></div>
            <div class="col col-1"><a href="./delete.php?id=<?php echo $value['id']?>">Xóa</a></div>
        </li>
        <?php endforeach ?>
  </ul>
  <a href="../timeline/Form.php">Add Form</a>
</div>
