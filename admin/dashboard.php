<?php
// подключение к базе данных
include ('./components/connect.php');

session_start();

$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- admin css file -->
    <link rel="stylesheet" href="./css/admin_style.css">
   
</head>
<body>
<?php
include ('./components/admin_header.php');
?>

<!-- admin dashboard section -->

<section class="dashboard">
    <h1 class="heading">dashboard</h1>
    
    <div class="box-container">
        <!-- приветствие для админа -->
    <div class="box">
        <h3>Welcome!</h3>
        <p><?=$fetch_profile['name'];?></p>
        <!-- переход на страницу смены пароля -->
        <a href="update_profile.php" class="btn">update profile</a>
    </div>
    <!-- показывает, сколько всего у нас книг в базе -->
    <div class="box">
        <?php
        $select_books = $conn->prepare("SELECT * FROM `book_desc`");
        $select_books->execute();
        $number_of_books = $select_books->rowCount();
        ?>
        <h3><?=$number_of_books;?></h3>
        <p>books added</p>
        <a href="../catalog.php" class="btn">see all books</a>
    </div>
    <!-- показывает, сколько различных жанров -->
    <div class="box">
        <?php
        $select_genres = $conn->prepare("SELECT * FROM `catalog`");
        $select_genres->execute();
        $number_of_categories = $select_genres->rowCount();
        ?>
        <h3><?=$number_of_categories;?></h3>
        <p>total added book genres</p>
        <a href="../catalog.php" class="btn">see all books</a>
    </div>
    <!-- показывает количество зарегистрированных пользователей -->
    <div class="box">
        <?php
        $select_users = $conn->prepare("SELECT * FROM `users`");
        $select_users->execute();
        $number_of_users = $select_users->rowCount();
        ?>
        <h3><?=$number_of_users;?></h3>
        <p>users registered</p>
        <a href="../signin.php" class="btn">register page</a>
    </div>
    </div>
</section>
</body>
</html> 

<!-- script file -->
<script src="./scripts/admin_script.js"></script>