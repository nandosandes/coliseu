<?php
require_once("../model/login.php");

$login->logout();

header("Location: ../view/index.php");
?>
