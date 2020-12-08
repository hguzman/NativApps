<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = "smtp.gmail.com";                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = "dvleasy@gmail.com";                     // SMTP username
    $mail->Password   = "DVLeasy2020";                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('dvleasy@gmail.com', 'DVLeasy');
    $mail->addAddress($correo);     // Add a recipient  // Name is optional
    

/*     // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // Optional name */

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password recovery';
    $mail->Body    = "Hello, we have seen that you requested a password recovery, well here we give it to you: $idkey. <br>
    Remember to change it from the profile so you won't have to complicate yourself with an extensive password. <br>
    In case it was not you, remember to log out of unreliable computers and also keep your data secret. <br>
    We hope we have helped you. Until next time.";
    
    $mail->addAttachment('../img/Logo de la empresa.png');
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>