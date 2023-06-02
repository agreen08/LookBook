<?php
// запуск описания книги по указанному id
require_once ('view/View.php');
require_once ('controller/Controller.php');

$view = new View();
$controller = new Controller();

$pageBody = $view->ViewBook();