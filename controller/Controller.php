<?php
    // подключение модели отображения контента
    require_once ('./model/Model.php');
    require_once ('./model/Catalog.php');
    require_once ('./model/Book.php');
    require_once('./view/View.php');
    
    class Controller {
        public $model;
        public $view;
        public $catalog;
        public $book;

        //startpage
        public function SetStartPage () {
            $model = new Model();
            $resultModel = $model->GetData();
            return $resultModel;
        }
        
        //catalog
        public function SetCatalog () {
            $catalog = new Catalog();
            $resultCatalog = $catalog->GetCatalog();
            $resultCategory = $catalog->GetCategory();
            // выбираем, что отобразится на странице, список жанров или всех книг
            $resultAll = [];
            $resultAll[0] = $resultCategory;
            $resultAll[1] = $resultCatalog;

            return $resultAll;
        }
        //bookdesc
        public function SetBook () {
            $book = new Book();
            $resultBook = $book->GetOneBook();
            return $resultBook;
        }

    }