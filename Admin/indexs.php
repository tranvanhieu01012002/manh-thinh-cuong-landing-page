<?php
    function sendEmail(){ 
        require "./PHPMailer-master/src/PHPMailer.php";
        require "./PHPMailer-master/src/Exception.php";
        require "./PHPMailer-master/src/SMTP.php";
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'dinhgiaquoc28@gmail.com'; // SMTP username
        $mail->Password = 'mymy2002@1';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to    587/465            
        $mail->setFrom('dinhgiaquoc28@gmail.com', 'Đinh Thị Mỷ Tâm' ); 
        $mail->addAddress('tam.dinh23@student.passerellesnumeriques.org','My Xin'); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = '[FORM CONTACT]';
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