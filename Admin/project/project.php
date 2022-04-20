<?php 
include("../dph.php")?>
<link rel="stylesheet" href="./CSS/project.css">
<div class="container">
  <h2>BẢNG DỰ ÁN</h2>
  <table class="responsive-table">
    <tr class="table-header">
      <th class="col ">Tên dự án:</th>
      <th class="col ">Mã dự án:</th>
      <th class="col ">Diện tích đất:</th>
      <th class="col ">Tổng diện tích xây dựng</div>
      <th class="col ">Ảnh</th>
      <th class="col ">Mô tả</th>
      <th class="col ">Mô tả chi tiết</th>
      <th class="col ">Tên khách hàng</th>
      <th class="col ">Địa chỉ</th>
      <th class="col ">Quận</th>
      <th class="col ">Loại xây dựng</th>
      <th class="col ">Ngày bắt đầu</th>
      <th class="col ">Ngày bàn giao</th>      
      <th class="col ">Sửa</th>
      <th class="col ">Xóa </th>
    </tr>
    <?php   
        $database = new dph();
        $row = $database -> get_list('select * from project;')?>
        <?php foreach($row as $value):?>
          <tr class="table-row">
          <td class="col "><?php echo $value['name_project'] ?></td>
          <td class="col "><?php echo $value['project_code'] ?></td>
          <td class="col "><?php echo $value['land_area'] ?></td>
          <td class="col "><?php echo $value['total_cons_area'] ?></td>
          <td class="col "id="img-timeline"><img width="200px" height="150px" src="../img/<?php echo $value['img'] ?>" alt=""></td>
          <td class="col " id="Des"><?php echo $value['Description'] ?></td>
          <td class="col "id="Des-detail"><?php echo $value['Description_detail'] ?></td>
          <td class="col "><?php echo $value['name_cus'] ?></td>
          <td class="col "><?php echo $value['address'] ?></td>
          <td class="col "><?php echo $value['district'] ?></td>
          <td class="col "><?php echo $value['construc_type'] ?></td>
          <td class="col "><?php echo $value['start'] ?></td>
          <td class="col "><?php echo $value['delivery'] ?></td>
          <td class="col "><a href="./update.php?id=<?php echo $value['id_project']?>">Chỉnh sửa</a></td>
          <td class="col "><a href="./delete.php?id=<?php echo $value['id_project']?>">Xóa</a></td>
        </tr>
        <?php endforeach ?>
  </table>
  <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

  <a href="../project/Form.php">Add Form</a>
  <!-- <script src="../model/js/seemoreAdmin.js"></script> -->
</div>
