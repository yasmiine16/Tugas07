<?php
require_once 'controller/FilmController.php';
$controller = new FilmController($conn);
$controller->handleRequest();
?>
