
<div class="container-fluid" id="footer">
    <div class="container">
        <div class="cont">
            <div class="left-cont">
                <div class="display-img">
                    <img src="./model/img/logo1.png" alt="aaaaaaaaaaaaa">
                </div>
                <ul class="contact">
                    <h4><strong>Công ty TNHH MTV Mạnh Thịnh Cường</strong></h4>
                    <li><strong> Địa chỉ:</strong> 29 Phạm Quang Ảnh, Quận Sơn Trà, TP. Đà Nẵng</li>
                    <br>
                    <li><strong> Số điện thoại/FAX:</strong> (+84) 852 445 554</li>
                    <br>
                    <li><strong> Hotline:</strong> (+84) 905 22 33 64</li>
                    <br>
                    <li><strong> Email:</strong> manhthinhcuong@gmail.com</li>
                </ul>
            </div>
            <div class="right-cont">
                <br>
                <h2>Nhập thông tin liên hệ </h2>
                <br>
                <p class="r-cont-text">Chúng tôi đã giúp hàng nghìn khách hàng tìm được dự án ưng ý. Với quỹ hàng đa
                    dạng nhất thị trường,
                    chúng tôi tự tin sẽ giúp bạn thực hiện giấc mơ sở hữu BĐS và tối ưu hiệu quả đầu tư.</p>
                <br>
                <form action="./Admin/processEmail.php" method="POST">
                    <input type="text" name="name" placeholder="Tên của bạn"> <br> <br>
                    <input type="text" name="email" placeholder="Địa chỉ email của bạn"> <br><br>
                    <input type="text" name="number" placeholder="Số điện thoại của bạn"> <br> <br>
                    <textarea rows="4" cols="" name="request" placeholder="Nội dung yêu cầu dự án..."></textarea>
                    <br> <br>
                    <button class="submit-btn" type="submit" name="add">Liên hệ báo giá</button>
                    <br> <br>
                </form>
            </div>
            <div class="modal-overlay">
                <div class="modal">
                    <a class="close-modal">
                        <svg viewBox="0 0 20 20">
                            <path fill="#000000"
                                d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z">
                            </path>
                        </svg>
                    </a>

                    <div class="modal-content">
                        <h2 class="text-h2">Cảm ơn bạn đã đăng ký!</h2>
                        <h3>Chúng tôi sẽ liên hệ bạn sớm nhất.</h3>
                    </div>
                    <!-- content -->
                </div>

            </div>
        </div>
    </div>
</div>
<?php
if (isset($_GET["check"])){
    if($_GET["check"] == 1){
         echo '
     <script src="./model/js/model_success.js"></script>
    '; 
    }
    else{
        echo '
     <script src="./model/js/model_fail.js"></script>
    ';
    } 
}
?>