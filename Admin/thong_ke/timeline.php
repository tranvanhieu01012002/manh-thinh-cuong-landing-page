<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/timeline.css">
<div class="container">
  <h2>BẢNG Statistical</h2>
  <div class="card">
    <div class="title">
      <h3>Số khách hàng</h3>
    </div>
    <div>
    <?php 
        $database = new dph();
        $row = $database -> get_list('select * from customers;')?>
        <?php $count = 0;?>
        <?php foreach($row as $value):?>
          <?php $count++; ?>
        <?php endforeach ?>
        <?php  echo $count;?>
    </div>
  </div>
  <div class="card">
    <div class="title">
      <h3>Số dự án</h3>
    </div>
    <div>
    <?php 
        $database = new dph();
        $row = $database -> get_list('select * from project;')?>
        <?php $count = 0;?>
        <?php foreach($row as $value):?>
          <?php $count++; ?>
        <?php endforeach ?>
        <?php  echo $count;?>
    </div>
  </div>

</div>
