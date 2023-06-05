<?php
// подключение к базе данных
include 'connect.php';
// разрыв сессии и переадресация на страницу входа в админку
session_start();
session_unset();
session_destroy();

header('location:../admin_login.php');

?>