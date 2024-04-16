<?php
session_start();
$message = $_SESSION["message"];
?>

<!-- html -->
<?php

include_once __DIR__ . "/head.php";
include_once __DIR__ . "/header.php";

?>

<div class="main">


    <?php
    include_once __DIR__ . "/alert.php";;
    ?>

    <!-- redirect to main page -->
    <a href="../index.php" class="d-block text-center">Clicca qui per tornare alla pagina principale</a>


</div>

<!-- foot html -->
<?php include_once __DIR__ . "/foot.php" ?>