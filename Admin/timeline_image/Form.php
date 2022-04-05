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
<form action="./insertintotabletimeline_img.php" method="POST" enctype="multipart/form-data" >
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
    <input type="submit" value="SUBMIT" name="add" class="signupbtn"/>
     </div>
   </div>
 </form>
  
</body>
</html>