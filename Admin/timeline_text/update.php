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
     $row = $database -> get_row('select * from timeline_text where id ='.$id.';');
     ?> 
       <form action="./insert_timeline_text.php?id=<?php echo $row['id']?>" method="POST" >
      <div class="container">
        <h1>Nhập thông tin của timeline</h1>
        <p>Xin hãy nhập biểu mẫu bên dưới.</p>
        <hr>
        <label for="email"><b>text1</b></label>
        <input type="text"  name="text1" value="<?php echo $row['text1'] ?>" required>
        <label for="email"><b>text2</b></label>
        <input type="text"  name="text2" value="<?php echo $row['text2'] ?>" required>
        <label for="email"><b>text3</b></label>
        <input type="text"  name="text3" value="<?php echo $row['text3'] ?>" required>
        <label for="email"><b>text4</b></label>
        <input type="text"  name="text4" value="<?php echo $row['text4'] ?>"   required>
        <label for="email"><b>text5</b></label>
        <input type="text"  name="text5" value="<?php echo $row['text5'] ?>" required>
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
