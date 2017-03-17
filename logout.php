<?php include "menu.php"; ?>

<?php
session_start();
session_destroy();
?>

<h2>You have logged out</h2>

<?php include "footer.php" ?>
