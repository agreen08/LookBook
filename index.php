<?php
// Запуск стартовой страницы
require_once ('view/View.php');
require_once ('controller/Controller.php');

$view = new View();
$controller = new Controller();

$pageBody = $view->ViewStartPage();

