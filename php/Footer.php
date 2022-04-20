<?php
    require_once ("./Admin/dph.php");
?>

<div class="container-fluid" id="footer">
    <div class="container">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
                1d3834.1241432302795!2d108.23376791416968!3d16.05904644397798!
                2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219d5bc626293%3A0x178fb3134dacda42!
                2zMjkgUGjhuqFtIFF1YW5nIOG6om5oLCBBbiBI4bqjaSBC4bqvYywgU8ahbiBUcsOgLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZpZXRuYW0!
                5e0!3m2!1sen!2s!4v1649670950535!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          
                <div class="right-cont">
                    
                    <h2>Nhập thông tin liên hệ </h2>
                    
                    <p class="r-cont-text">Chúng tôi đã giúp hàng nghìn khách hàng tìm được dự án ưng ý. Với quỹ hàng đa
                        dạng nhất thị trường,
                        chúng tôi tự tin sẽ giúp bạn thực hiện giấc mơ sở hữu BĐS và tối ưu hiệu quả đầu tư.</p>
                    <br>
                    <form id="form1"action="./Admin/processEmail.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="name" placeholder="Tên của bạn"> <br> <br>
                        <input type="text" name="email" placeholder="Địa chỉ email của bạn"> <br><br>
                        <input type="text" name="number" placeholder="Số điện thoại của bạn"> <br> <br>
                        <textarea rows="4" cols="" name="request" placeholder="Nội dung yêu cầu dự án..."></textarea>
                        <br> <br>
                        <button class="btn-root btn-submit" type="submit" name="add">Liên hệ báo giá  <span></span></button>
                        <br> <br>
                    </form>
                </div>
                <div class="contact"> 
                    <div id="add">
                        Địa chỉ: 29 Phạm Quang Ảnh, Quận Sơn Trà, TP. Đà Nẵng
                    </div>
                    <div>Số điện thoại/FAX: (+84) 852 445 554</div>
                    <div><a href="https://www.facebook.com/manhthinhhcuong/">Facebook: Mạnh Thịnh Cường</a></div>
                </div>
            
        </div>  
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