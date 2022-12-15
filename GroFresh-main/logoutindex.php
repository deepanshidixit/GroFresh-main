<?php
session_start();
unset($_SESSION["clog"]);
header("location:index.php");
?>