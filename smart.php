<?php

$to = "asvrodya@gmail.com";
$subject = "This is subject";
$message = "This is simple text message.";
$header = "From:from@yantranet.com \r\n";

$retval = mail($to,$subject,$message,$header);

if ($retval == true){
    echo "Message sent successfully...";
}else{
    echo "Message could not be sent...";
}

//print_r($_POST);
//
//$name = $_POST['name'];
//$phone = $_POST['phone'];
//$email = $_POST['email'];
//
//require_once('phpmailer/PHPMailerAutoload.php');
//$mail = new PHPMailer;
//$mail->CharSet = 'utf-8';
//
//// $mail->SMTPDebug = 3;                               // Enable verbose debug output
//
//$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                               // Enable SMTP authentication
//$mail->Username = 'shishlovsergey040593@gmail.com';                 // Наш логин
//$mail->Password = 'shishlov1993';                           // Наш пароль от ящика
//$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 465;                                    // TCP port to connect to
//
//$mail->setFrom('shishlovsergey040593@gmail.com', 'Pulse');   // От кого письмо
//$mail->addAddress('hodoj69295@cebaike.com');     // Add a recipient
////$mail->addAddress('ellen@example.com');               // Name is optional
////$mail->addReplyTo('info@example.com', 'Information');
////$mail->addCC('cc@example.com');
////$mail->addBCC('bcc@example.com');
////$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
////$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML
//
//$mail->Subject = 'Данные';
//$mail->Body    = '
//		Пользователь оставил данные <br>
//	Имя: ' . $name . ' <br>
//	Номер телефона: ' . $phone . '<br>
//	E-mail: ' . $email . '';
//
//if(!$mail->send()) {
//    return false;
//} else {
//    return true;
//}

?>