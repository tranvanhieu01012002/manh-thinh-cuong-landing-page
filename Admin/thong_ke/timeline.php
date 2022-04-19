<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/timeline.css">
<div class="row1-container">
    <div class="box box-down cyan">
      <h2>Số khách hàng</h2>
      <?php 
        $database = new dph();
        $row = $database -> get_list('select * from customers;')?>
        <?php $count = 0;?>
        <?php foreach($row as $value):?>
          <?php $count++; ?>
        <?php endforeach ?> 
        <h5> <?php  echo $count;?></h5>
      <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
    </div>
    <div class="box box-down blue">
      <h2>Dự án</h2>
      <?php 
        $database = new dph();
        $row = $database -> get_list('select * from project;')?>
        <?php $count = 0;?>
        <?php foreach($row as $value):?>
          <?php $count++; ?>
        <?php endforeach ?>
      
      <h5>  <?php  echo $count;?></h5>
      <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
    </div>
  </div>
