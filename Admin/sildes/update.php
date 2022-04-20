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
     $row = $database -> get_row('select * from slides where id ='.$id.';');
     ?> 
        <form action="./insertintotableslide.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data" >
            <div class="container">
                <h1>Nhập thông tin của Slides</h1>
                <p>Xin hãy nhập biểu mẫu bên dưới.</p>
                <hr>
                <label for="email"><b>Nội dung</b></label>
                <input type="text" name="content" value="<?php echo $row['Content']?>" required>
                <label for="email"><b>Mô tả</b></label>
                <input type="text"  name="des" value="<?php echo $row['Description']?>" required>
                <label for="email"><b>Mô tả chi tiết</b></label>
                <input type="text"  name="desdetail" value="<?php echo $row['Description_detail']?>" required>
                <input name="img" type="file">
                <div class="clearfix">
                <input type="submit" value="SUBMIT" name="update" class="signupbtn"/>
                </div>
            </div>
        </form>

<?php }
   ?>
  
</body>
</html>
