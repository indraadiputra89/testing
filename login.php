<?php
session_start();
$_SESSION["status"] = false;
header("Location: index.php");
die();