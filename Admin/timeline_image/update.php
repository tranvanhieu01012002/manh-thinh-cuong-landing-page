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
     $row = $database -> get_row('select * from timeline_image where id ='.$id.';');
     ?> 
      <form action="./insertintotabletimeline_img.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data" >
        <div class="container">
          <h1>Nhập thông tin của timeline_Image</h1>
          <p>Xin hãy nhập biểu mẫu bên dưới.</p>
          <hr>
          <input name="img_1" type="file">
          <input name="img_2" type="file">
          <input name="img_3" type="file">
          <input name="img_4" type="file">
          <input name="img_5" type="file">
          <!-- <input type="pas  sword" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required> -->
          <div class="clearfix">
          <input type="submit" value="SUBMIT" name="update" class="signupbtn"/>
          </div>
        </div>
 </form>
<?php }
   ?>
  
</body>
</html>
