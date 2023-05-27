<?php

    require_once ('./model/Model.php');
    require_once('./view/View.php');
    
    class Controller {
        public $model;
        public $view;
    
        public function SetStartPage () {
            $model = new Model();
            $resultModel = $model->GetData();
    
            return $resultModel;
        }
    }