<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    public function sendMail($reciverName, $sendTo, $subject, $html){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtpout.test.ir';                  //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'info@test.ir';                     //SMTP username
            $mail->Password   = 'password';                             //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('info@test.ir', 'نام شرکت');
            $mail->addAddress($sendTo, $reciverName);     //Add a recipient
            $mail->addAddress('info@test.ir');               //Name is optional
            $mail->addReplyTo('info@test.ir', 'اطلاعات');
            //$mail->addCC('cc@test.ir');
            //$mail->addBCC('bcc@test.ir');

            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $html;
            $mail->AltBody = strip_tags($html);

            if($mail->send()){
                return 'موفق';
            }else{
                return 'پیام ارسال نشد.';
            }

        } catch (Exception $e) {
            return "پیام ارسال نشد. خطای میلر: {$mail->ErrorInfo}";
        }
    }
}
