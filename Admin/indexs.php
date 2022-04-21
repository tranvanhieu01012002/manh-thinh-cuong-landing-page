<?php
    function sendEmail(){ 
        require "./PHPMailer-master/src/PHPMailer.php";
        require "./PHPMailer-master/src/Exception.php";
        require "./PHPMailer-master/src/SMTP.php";
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true; 
        $mail->Username = 'dinhgiaquoc28@gmail.com'; 
        $mail->Password = 'mymy2002@1';  
        $mail->SMTPSecure = 'ssl'; 
        $mail->Port = 465;             
        $mail->setFrom('dinhgiaquoc28@gmail.com', 'ManhThinh Cuong.com ' ); 
        $mail->addAddress('tam.dinh23@student.passerellesnumeriques.org','Admin'); //mail và tên người nhận  manhthinhcuong@gmail.com  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = '[FORM CONTACT from ManhThinhCuong.com]';
        $noidungthu = '
        <strong>Name: </strong> '.$_POST['name'].'<br/>
        <strong>Email: </strong> '.$_POST['email'].'<br/>
        <strong>Phonenumber: </strong> '.$_POST['number'].'<br/>
        <strong>Message</strong>: </strong> '.$_POST['request'].'<br/>';
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
 }//function  GuiMail
 
 ?>