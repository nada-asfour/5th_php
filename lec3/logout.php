<?php
SESSION_start();
SESSION_unset();
SESSION_destroy();
header("location:login.php")
?>