<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../client/phpmailer/src/Exception.php';
require '../client/phpmailer/src/PHPMailer.php';
require '../client/phpmailer/src/SMTP.php';
class Mailer{
    public function invoice_mail( $body, $email){
        $mail = new PHPMailer(true);
        try {
            // Configure an SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'minh.le24@student.passerellesnumeriques.org';
            $mail->Password = 'qjetrozednijuljd';
            $mail->SMTPSecure = 'ssl';
            $mail->SMTPDebug = 0;
            $mail->Port = 465;

            $mail->setFrom('minh.le24@student.passerellesnumeriques.org');
            $mail->addAddress($email);
            $mail->Subject = "[MoonLight Cinema]_Your code";

            $mail->isHTML(true);

            $mail->Body = $body;
//
            $mail->send();

            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }


}
?>