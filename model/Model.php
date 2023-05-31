<?php

class Model {
    
//         private $pdo;
//         private $host;
//         private $db;
//         private $user;
//         private $pass;
//         private $charset;
    
//         function __construct() {
//             $this->host = '127.0.0.1';
//             $this->db = 'lookbook';
//             $this->user = 'root';
//             $this->pass = '';
//             $this->charset = 'utf8';
//             $this->connect();
//         }

//         function connect(){
//             try {
//                 $this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db.';charset='.$this->charset.'',
//                 $this->user,
//                 $this->pass, 
//                 [
//                     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//                     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//                     PDO::ATTR_EMULATE_PREPARES   => false,
//                 ]);
//             } catch (Exception $e) {
//                 die('Connection failed : ' . $e->getMessage());
//             }
//             return $this->pdo;
//         }

//         function __destruct(){
//             $this->disconnect();
//         }

//         function disconnect()
//     {
//         if ($this->pdo) {
//             $this->pdo = null;
//         }
//     }

    public function GetData() {
         
        $mysqli = new mysqli('localhost', 'root', '', 'lookbook');

        if(mysqli_connect_errno()) {
            print_f('Соедение не установлено');
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

        $result = $pdo->query('SELECT * FROM book_desc ORDER BY id DESC LIMIT 5');
        $arrayResult = $result->fetchAll();

        return $arrayResult;
    }
}