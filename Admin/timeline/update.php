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
     $row = $database -> get_row('select * from timeline where id ='.$id.';');
     ?> 
       <form action="./insertintotabletimelin.php?id=<?php echo $row['id']?>" method="POST" >
      <div class="container">
        <h1>Nhập thông tin của timeline</h1>
        <p>Xin hãy nhập biểu mẫu bên dưới.</p>
        <hr>
        <label for="email"><b>Timeline_1</b></label>
        <input type="text"  name="timeline_1" value="<?php echo $row['Timeline_1'] ?>" required>
        <label for="email"><b>Timeline_2</b></label>
        <input type="text"  name="timeline_2" value="<?php echo $row['Timeline_2'] ?>" required>
        <label for="email"><b>Timeline_3</b></label>
        <input type="text"  name="timeline_3" value="<?php echo $row['Timeline_3'] ?>" required>
        <label for="email"><b>Timeline_4</b></label>
        <input type="text"  name="timeline_4" value="<?php echo $row['Timeline_4'] ?>"   required>
        <label for="email"><b>Timeline_5</b></label>
        <input type="text"  name="timeline_5" value="<?php echo $row['Timeline_5'] ?>" required>
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
