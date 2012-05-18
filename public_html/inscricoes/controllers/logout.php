<?php
require_once("../models/login.php");

$login->logout();

header("Location: ../views/index.php");
?>
