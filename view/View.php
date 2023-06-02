<?php
//запуск сайта
require_once ('./controller/Controller.php');

class View {
    public function ViewStartPage(){
        $controller = new Controller();
        $arrayResult = $controller->SetStartPage();
        include 'view/startpage.php';
        return $arrayResult;
    }
}