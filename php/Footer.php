<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./model/css/footer.css">
</head>

<body>
    <!-- <link rel="stylesheet" href="./model/css/footer.css"> -->
    <div class="container-fluid" id="footer">
        <div class="container">
            <div id="title">
                <h1>ĐĂNG KÍ ĐỂ NHẬN ƯU ĐÃI VÀ TƯ VẤN MIỄN PHÍ</h1>
            </div>
            <div class="cont">
                <div class="left-cont">
                    <div class="display-img">
                        <img src="./model/img/image.jpg" alt="aaaaaaaaaaaaa">
                    </div>
                    <ul>
                        <li>Địa chỉ: Chung cư Citizen đường 9A KDC Trung Sơn, xã Bình Hưng, huyện Bình Chánh, TPHCM</li>
                        <br>
                        <li>Hotline: 093 543 6677</li>
                        <br>
                        <li>Email: bdsphankimngoc@gmail.com</li>

                    </ul>
                </div>
                <div class="right-cont">
                    <br>
                    <h2>Nhập thông tin liên hệ </h2>
                    <br>
                    <p class="r-cont-text">Chúng tôi đã giúp hàng nghìn khách hàng tìm được dự án ưng ý. Với quỹ hàng đa
                        dạng nhất thị trường,
                        chúng tôi tự tin sẽ giúp bạn thực hiện giấc mơ sơ hữu BĐS và tối ưu hiệu quả đầu tư.</p>
                    <br>
                    <form action="./Admin/processEmail.php" method="POST">
                    <input type="text" name="name" placeholder="Tên của bạn"> <br> <br>
                    <input type="text" name = "email" placeholder="Địa chỉ email của bạn"> <br><br>
                    <input type="text" name="number" placeholder="Số điện thoại của bạn"> <br> <br>
                    <textarea rows="4" cols="" name="request" placeholder="Nội dung yêu cầu dự án..."></textarea>
                    <br> <br>
                    <input type="submit" name ="add" value="Liên hệ báo giá">
                    <br> <br>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>