<?php

// start the session
session_start();
// var_dump($error_message);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include __DIR__ . '/Partials/Html_head.php' ?>
</head>

<body>

</body>
<div class="container">
    <div class="alert alert-danger mt-5" role="alert">
        <?= $_SESSION['error_message'] ?>
    </div>
</div>

</html>