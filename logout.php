<?php
session_start();
session_destroy();
$_SESSION=['masuk'];
header("Location: login.php");
?>