<?php 
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    // https://stackoverflow.com/questions/20908580/sending-multiple-emails-with-phpmailer
    // https://www.greenarrowemail.com/docs/greenarrow-engine/Injecting-Mail/SimpleMH-Injection/PHPMailer-SimpleMH-Multiple-Recipient-Example

    function mailing($mailid, $name, $mailtype, $filename)
    {
        $status = 0;

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "yourmailid@here";
        $mail->Password = "application password here";


        //Attachments
        $mail->AddAttachment($filename);

        $mail->IsHTML(true);
        $mail->AddAddress("yourmailid@here", $name);
        $mail->SetFrom("yourmailid@here", "SENDER NAME");
        $mail->Subject = "subject here";
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

        $mail->MsgHTML(file_get_contents('path\to\template.html'));

        if(!$mail->Send())
        {
            $status = 0;
            var_dump($mail);
        }
        else
        {
            $status = 1;
        }

        $mail->clearAllRecipients();
        $mail->clearAttachments();

        return $status;
    }

?>
