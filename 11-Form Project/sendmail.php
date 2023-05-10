<?php
    if ($_POST['subject'] == 1) {
        $subject = "Сподобався сайт";
    } elseif ($_POST['subject'] == 2) {
        $subject = "Не сподобався дизайн";
    } elseif ($_POST['subject'] == 3) {
        $subject = "Мало контенту";
    } elseif ($_POST['subject'] == 4) {
        $subject = "Знайшов сайт краще";
    }

    $to = "snigurartem3@gmail.com";
    $from = trim($_POST['email']);
    
    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);

    $headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Mail was sent';
    } else {
        echo 'Errrror';
    }
?>