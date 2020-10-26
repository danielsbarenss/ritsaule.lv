<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $findUs = explode('|', $_POST['find-us']);
    $message = $_POST['message'];

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ritsaule@ritsaule.lv'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'xxxxx'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('ritsaule@ritsaule.lv'); // Gmail address which you used as SMTP server
        $mail->addAddress('katrina@ritsaule.lv'); // Email address where you want to receive emails

        $mail->isHTML(true);
        $mail->Subject = 'RITSAULE.LV KLIENTS';
        $mail->Body = "<h4>Vārds : $name
                        <br>
                        Epasts: $email</h4>
                        <br>
                        <p>Atrada mūs caur:$findUs[1]<p>
                        <br>
                        <p>Ziņa:<br> $message</p>";

        $mail->send();
        header("Location: http://localhost/ritsaule?success=1#form");
    } catch (Exception $e){
        header("Location: http://localhost/ritsaule?success=-1#form");
    }
}
?>