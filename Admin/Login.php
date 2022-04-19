</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./model/css/LoginForm.css">
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="Login.php" method="POST">
            <div class="user-box">
                <input type="text" name="user">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="password">
                <label>Password</label>
            </div>

            <div> <a href="">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <input type="submit" name="submit" value="SUBMIT">
                    <!-- Submit -->
                </a>
            </div>
        </form>
    </div>
</body>

</html>
<?php
include("./connect.php");
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = $_POST['password'];
}
$admin_query = "select * from admin where user='$user' AND password='$password'";

$run_query = mysqli_query($conn, $admin_query);

if (mysqli_num_rows($run_query) > 0) {
    session_start();
    $_SESSION["login"] = 1;
    header("Location:./project/indexAdmin.php");
} else {
    echo "<script>alert('Hãy Đăng Nhập Tài Khoản Admin của bạn..!')</script>";
}
?>