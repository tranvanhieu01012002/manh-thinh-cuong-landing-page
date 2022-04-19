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
<form action="./insert_timeline_text.php" method="POST" >
   <div class="container">
     <h1>Nhập thông tin của timeline</h1>
     <p>Xin hãy nhập biểu mẫu bên dưới.</p>
     <hr>
    <label for="email"><b>text1</b></label>
     <input type="text" placeholder="Nhập text1" name="text1" required>
     <label for="email"><b>text2</b></label>
     <input type="text" placeholder="Nhập text2" name="text2" required>
     <label for="email"><b>text3</b></label>
     <input type="text" placehol  der="Nhập text3" name="text3" required>
     <label for="email"><b>text4</b></label>
     <input type="text" placeholder="Nhập text4" name="text4" required>
     <label for="email"><b>text5</b></label>
     <input type="text" placeholder="Nhập text" name="text5" required>
     <!-- <input type="pas  sword" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required> -->
    <div class="clearfix">
    <input type="submit" value="SUBMIT" name="add" class="signupbtn"/>
     </div>
   </div>
 </form>
  
</body>
</html>