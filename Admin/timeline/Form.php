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
<form action="./insertintotabletimelin.php" method="POST" >
   <div class="container">
     <h1>Nhập thông tin của timeline</h1>
     <p>Xin hãy nhập biểu mẫu bên dưới.</p>
     <hr>
    <label for="email"><b>Timeline_1</b></label>
     <input type="text" placeholder="Nhập Timeline_1" name="timeline_1" required>
     <label for="email"><b>Timeline_2</b></label>
     <input type="text" placeholder="Nhập Timeline_2" name="timeline_2" required>
     <label for="email"><b>Timeline_3</b></label>
     <input type="text" placehol  der="Nhập Timeline_3" name="timeline_3" required>
     <label for="email"><b>Timeline_4</b></label>
     <input type="text" placeholder="Nhập Timeline_4" name="timeline_4" required>
     <label for="email"><b>Timeline_5</b></label>
     <input type="text" placeholder="Nhập Timeline_" name="timeline_5" required>
     <!-- <input type="pas  sword" placeholder="Nhập Lại Mật Khẩu" name="psw-repeat" required> -->
    <div class="clearfix">
    <input type="submit" value="SUBMIT" name="add" class="signupbtn"/>
     </div>
   </div>
 </form>
  
</body>
</html>