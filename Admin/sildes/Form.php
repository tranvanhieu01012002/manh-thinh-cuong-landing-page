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
<form action="./insertintotableslide.php" method="POST" enctype="multipart/form-data" >
   <div class="container">
     <h1>Nhập thông tin của Slides</h1>
     <p>Xin hãy nhập biểu mẫu bên dưới.</p>
     <hr>
    <label for="email"><b>Content</b></label>
     <input type="text" placeholder="Enter Content" name="content" required>
     <label for="email"><b>Description</b></label>
     <input type="text" placeholder="Enter Description" name="des" required>
     <label for="email"><b>Description detail</b></label>
     <input type="text" placeholder="Enter description detail" name="desdetail" required>
      <input name="img" type="file">
    <div class="clearfix">
    <input type="submit" value="SUBMIT" name="add" class="signupbtn"/>
     </div>
   </div>
 </form>
  
</body>
</html>