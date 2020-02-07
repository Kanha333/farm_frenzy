<?php
session_start();
unset($_COOKIE["cookie"]);
session_destroy();
header('location:index.html');
?>
