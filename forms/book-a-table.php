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
    
    $email=$_POST['email'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $person=$_POST['person'];
    $subject="Table Reservation 'OPA'";
    
    // print_r($_POST);
   
    $mail->setFrom($email, $name);
    $mail->addReplyTo('ahsanazeem2413@gmail.com', 'Ahsan Azeem');
    $mail->Subject = $subject;
    $mail->addAddress('support@themicspk.com', 'OPA');
    
    $message = 'Hi my name is '.$name.' and my contact number is '.$phone.'. I need a reservation on '.$date.' '.$time.' for '.$person.' person(s)';
    
    $mail->msgHTML($message);
    
    if ($mail->send()) {
        echo 'Mail Has Been Sent, We\'ll Contact You Soon';
    } else {
        echo 'reason:<br>'.$mail->ErrorInfo.'<br>';
    }
?>