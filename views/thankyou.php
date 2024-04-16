<?php
session_start();
$message = $_SESSION["message"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($message)) : ?>
        <div class="alert <?php echo $message["class"] ?>" role="alert">
            <strong>Alert</strong>
            <span><?php echo $message["message"] ?></span>
        </div>
    <?php endif; ?>
</body>

</html>