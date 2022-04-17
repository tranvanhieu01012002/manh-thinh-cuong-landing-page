<?php
include("../dph.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Document</title>
</head>
<body>
<?php
  if(isset($_GET['id'])){?>
    <?php
    $id = $_GET['id'];
    $database = new dph();
    $row = $database -> get_row('select * from project where id_project ='.$id.';');
    ?> 
      <form action="./insertintoproject.php?id=<?php echo $row['id_project']?>" method="POST" enctype="multipart/form-data" >
      <div class="container">
        <h1>Nhập thông tin của timeline</h1>
        <p>Xin hãy nhập biểu mẫu bên dưới.</p>
        <hr>
        <label for="email"><b>Tên dự án:</b></label>
        <input type="text" value="<?php echo $row['name_project'] ?>" name="name_project" required>
        <label for="email"><b>Mã dự án:</b></label>
        <input type="text" value="<?php echo $row['project_code'] ?>" name="project_code" required>
        <label for="email"><b>Diện tích đất</b></label>
        <input type="text" value="<?php echo $row['land_area'] ?>" name="land_area" required>
        <label for="email"><b>Tổng diện tích xây dựng:</b></label>
        <input type="text" value="<?php echo $row['total_cons_area'] ?>" name="total_cons_area" required>
        <label for="email"><b>Description</b></label>
        <input type="text"  name="des" value="<?php echo $row['Description']?>" required>
        <label for="email"><b>Description detail</b></label>
        <input type="text"  name="desdetail" value="<?php echo $row['Description_detail']?>" required>
        <input name="img" type="file">
        <label for="email"><b>Tên khách hàng:</b></label>
        <input type="text" value="<?php echo $row['name_cus'] ?>" name="name_cus" required>
        <label for="email"><b>Số điện thoại khách hàng:</b></label>
        <input type="text" value="<?php echo $row['cus_num'] ?>" name="cus_num" required>
        <label for="email"><b>CMND khách hàng:</b></label>
        <input type="text" value="<?php echo $row['cus_ID'] ?>" name="cus_ID" required>
        <label for="email"><b>Địa chỉ:</b></label>
        <input type="text" value="<?php echo $row['address'] ?>" name="address" required>
        <label for="email"><b>Quận:</b></label>
        <input type="text" value="<?php echo $row['district'] ?>" name="district" required>
        <label for="email"><b>Loại xây dựng:</b></label>
        <select name="construc_type">
          <option value="nhao">Nhà ở</option>
          <option value="bietthu">Biệt thự</option>
          <option value="caotang">Nhà cao tầng</option>
          <option value="nhavuon">Nhà vườn</option>
          <option value="chungcu">Chung cư</option>
          <option value="nhahoboi">Nhà có hồ bơi</option>
        </select>
        <label for="email"><b>Dự án nổi bật</b></label>
        <select name="outstanding">
        <option value="yes">Có</option>
        <option value="no">Không</option>
       </select>
        <label for="email"><b>Ngày bắt đầu:</b></label>
        <input type="text" value="<?php echo $row['start'] ?>" name="start" required>
        <label for="email"><b>Ngày bàn giao:</b></label>
        <input type="text" value="<?php echo $row['delivery'] ?>" name="delivery" required>
        <!-- <input type="pas  sword" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required> -->
        <div class="clearfix">
        <input type="submit" value="Update" name="update_project" class="signupbtn"/>
        </div>
      </div>
 </form>

<?php }
   ?>
  
  
</body>
</html>