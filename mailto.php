<?php
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $message = $_REQUEST['message'];
    $to = 'advocatenaumov@gmail.com';
    $subject = 'Форма обратной связи L-U';
    $text = '<h1>'.$name.'</h1><p>'.$message.'</p><p>'.$phone.'</p><p><a href="mailto:'.$email.'">'.$email.'</a></p>';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n"; 
    $headers .= "From: Legal-Union <advocatenaumov@gmail.com>\r\n";

    mail($to, $subject, $text, $headers);
    //wp_mail($to, $subject, $text, $headers);
?>