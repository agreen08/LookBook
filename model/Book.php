<?php
class Book {
    // получение книги из базы данных по указанному id
    public function GetOneBook() {
         //соединение с базой
        $mysqli = new mysqli('localhost', 'root', '', 'lookbook');

        if(mysqli_connect_errno()) {
            print_f('Соединение не установлено');
            exit();
        }

        $mysqli->set_charset('utf8');

        $query = "Select * From book_desc";

        $result = $mysqli->query($query);
        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        $host = '127.0.0.1';
        $db   = 'lookbook';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);
        
        $result = $pdo->query('SELECT * FROM book_desc where id="22"');
        $arrayResult = $result->fetchAll();

        return $arrayResult;
    }
}