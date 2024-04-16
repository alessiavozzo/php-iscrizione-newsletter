<?php
session_start();
$message = $_SESSION["message"];
var_dump(__DIR__ . "./views/head.php");
?>

<!-- head html -->
<?php include_once __DIR__ . "/head.php" ?>

<?php if (isset($message)) : ?>
    <div class="alert <?php echo $message["class"] ?>" role="alert">
        <strong>Alert</strong>
        <span><?php echo $message["message"] ?></span>
    </div>
<?php endif; ?>
<a href="../index.php">Cliccami</a>

<!-- foot html -->
<?php include_once __DIR__ . "/foot.php" ?>