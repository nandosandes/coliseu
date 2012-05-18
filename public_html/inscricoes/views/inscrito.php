<?php
require_once("../models/inscrito.php");
Inscrito::confirma_cadastro($_GET['codigo'],$_GET['email']);
?>
