<?php

$hostname = "sql203.epizy.com";
$username = "epiz_34131450";
$password = "htmbMWNe3k";
$databaseName = "epiz_34131450_sitedata";

if ($_POST['subject'] == 1) {
    $subject = "Сподобався сайт";
} elseif ($_POST['subject'] == 2) {
    $subject = "Не сподобався дизайн";
} elseif ($_POST['subject'] == 3) {
    $subject = "Мало контенту";
} elseif ($_POST['subject'] == 4) {
    $subject = "Знайшов сайт краще";
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$text = $_POST['text'];

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "INSERT INTO sitedata (name, surname, email,
    message, choosed) VALUES ('$name', '$surname', '$email', '$text', '$subject')";

$result = mysqli_query($connect,$query);

if($result)
{
    echo 'Відгук відправлено';
}else {
    echo 'Відгук не було відправлено';
}

mysqli_close($connect);
?>