<?php

    require_once ('./model/Model.php');
    require_once ('./model/Catalog.php');
    require_once ('./model/Book.php');
    require_once('./view/View.php');
    
    class Controller {
        public $model;
        public $view;
        public $catalog;
        public $book;
    
        public function SetStartPage () {
            $model = new Model();
            $resultModel = $model->GetData();
            return $resultModel;
        }

        public function SetCatalog () {
            $catalog = new Catalog();
            $resultCatalog = $catalog->GetCatalog();
            $resultCategory = $catalog->GetCategory();

            $resultAll = [];
            $resultAll[0] = $resultCategory;
            $resultAll[1] = $resultCatalog;

            return $resultAll;
        }

        public function SetBook () {
            $book = new Book();
            $resultBook = $book->GetOneBook();
            return $resultBook;
        }

    }