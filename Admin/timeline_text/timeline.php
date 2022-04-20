<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/timeline.css">
<div class="container">
  <h2>NỘI DUNG</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-2">text1</div>
      <div class="col col-2">text2</div>
      <div class="col col-2">text3</div>
      <div class="col col-2">text4</div>
      <div class="col col-2">text5</div>
      <div class="col col-1">Sửa</div>
      <div class="col col-1">Xóa </div>
    </li>
    <?php   
        $database = new dph();
        $row = $database -> get_list('select * from timeline_text;')?>
        <?php foreach($row as $value):?>
          <li class="table-row">
          <div class="col col-2"><?php echo $value['text1'] ?></div>
          <div class="col col-2"><?php echo $value['text2'] ?></div>
          <div class="col col-2"><?php echo $value['text3'] ?></div>
          <div class="col col-2"><?php echo $value['text4'] ?></div>
          <div class="col col-2"><?php echo $value['text5'] ?></div>
            <div class="col col-1"><a href="./update.php?id=<?php echo $value['id']?>">Chỉnh sửa</a></div>
            <div class="col col-1"><a href="./delete.php?id=<?php echo $value['id']?>">Xóa</a></div>
        </li>
        <?php endforeach ?>
  </ul>
  <a href="../timeline_text/Form.php">Add Form</a>
</div>
