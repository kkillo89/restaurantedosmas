<?php
require '../assets/phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = "mail.themicspk.com";
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->Username = 'support@themicspk.com';
    $mail->Password = 'LfAh.nWLXp02';
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
   
    $mail->setFrom($email, $name);
    $mail->addReplyTo($email, $name);
    $mail->Subject = $subject;
    $mail->addAddress('support@themicspk.com', 'OPA');
    
    $message = $message;
    
    $mail->msgHTML($message);
    
    if ($mail->send()) {
        echo 'Mail Has Been Sent, We\'ll Contact You Soon';
    } else {
        echo 'reason:<br>'.$mail->ErrorInfo.'<br>';
    }
?>