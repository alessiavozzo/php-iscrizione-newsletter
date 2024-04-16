<!-- alert if message exists -->
<?php if (isset($message)) : ?>
    <div class="mx-4 my-2">
        <div class=" w-50 alert <?php echo $message["class"] ?>" role="alert">
            <strong><?php echo $message["message"] ?></strong>
        </div>
    </div>
<?php endif; ?>