<?php

// $Name = $_REQUEST['Name'];
// $Email = $_REQUEST['Email'];
// $Subject = $_REQUEST['Subject'];
// $Message = $_REQUEST['Message'];

// if(empty($Name) && empty($Email) && empty($Subject) && empty($Message)){
//     echo ('Please fill all the fields');
// }
// else{
//     mail("tridevansh.160601@gmail.com", "Message From Personal website", $Message, "From: $Name <$Email>");
//     echo "<script type='text/javascript'> alert('Your Message sent successfully');
//             window.history.go(-1);
//             </script>";
// }


// require 'phpMailer/PHPMailerAutoload.php';

// $mail = new PHPMailer;

// //$mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp1.gmail.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'tridevansh.160601@gmail.com';                 // SMTP username
// $mail->Password = 'tridev1606';                           // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 587;                                    // TCP port to connect to

// $mail->setFrom($_POST['Email'], $_POST['Name']);
// $mail->addAddress('devanshtrivedi.4321@gmail.com', 'Joe User');     // Add a recipient
// // $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo($_POST['Email'], $_POST['Name']);
// // $mail->addCC('cc@example.com');
// // $mail->addBCC('bcc@example.com');

// // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Form Submission: '.$_POST['Subject'];
// $mail->Body    = '<h1 align=center>Name :'.$_POST['Name'].'<br>Email: '.$_POST['Email'].'<br>Message: '.$_POST['Message'].'</h1>';
// // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// Load Composer's autoloader


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'tridevansh.160601@gmail.com';                     // SMTP username
    $mail->Password   = 'tridev1606';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($_POST['Email'], $_POST['Name']);
    $mail->addAddress('tridevansh.160601@gmail.com', 'Devansh Trivedi');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($_POST['Email'], $_POST['Name']);
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');



    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Personal Website Form Submission: '.$_POST['Subject'];
    $mail->Body    = '<h1 align=center>Name :'.$_POST['Name'].'<br>Email: '.$_POST['Email'].'<br>Message: '.$_POST['Message'].'</h1>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    $mail->send();
    // echo 'Message has been sent';
    echo "<script type='text/javascript'> alert('Your Message sent successfully');
           window.history.go(-1);
           </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


    
?>