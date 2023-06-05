<?php
//подключение к базе данных
include ('./components/connect.php');

session_start();

$admin_id = $_SESSION['admin_id'];
if (!isset($admin_id)) {
    header('location:admin_login.php');
};
// отправляем данные через форму
if(isset($_POST['add_book'])){

    $genre = $_POST['genre'];
    $genre = filter_var($genre, FILTER_SANITIZE_STRING);
    $title = $_POST['title'];
    $title = filter_var($title, FILTER_SANITIZE_STRING);
    $author = $_POST['author'];
    $author = filter_var($author, FILTER_SANITIZE_STRING);
    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_STRING);
    $details = $_POST['details'];
    $details = filter_var($details, FILTER_SANITIZE_STRING);
    $author_info = $_POST['author_info'];
    $author_info = filter_var($author_info, FILTER_SANITIZE_STRING);

    $img = $_FILES['img']['name'];
    $img = filter_var($img, FILTER_SANITIZE_STRING);
    $img_tmp_name = $_FILES['img']['tmp_name'];
    $img_folder = '../uploads/'.$img;
    
    // проверка, есть ли уже такая книга
    $select_book = $conn->prepare("SELECT * FROM `book_desc` WHERE title = ?");
    $select_book->execute([$title]);

    if($select_book->rowCount() > 0){
        $message[] = 'book already added!';
    // вставляем данные в таблицу
    }else{
        // картинки должны сохранятся в указанной папке
        move_uploaded_file($img, $img_folder);

        $insert_book = $conn->prepare("INSERT INTO `book_desc` (category_id, img, title, author, price, description, aboutauthor) VALUES (?,?,?,?,?,?,?)");
        $insert_book->execute([$genre, $img, $title, $author, $price, $details, $author_info]);
        // сообщение, если добавление прошло успешно
        $message[] = 'Book added!';

       
    }
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
<!-- header -->
<?php
include ('./components/admin_header.php');
?>

<?php
if(isset($message)) {
    foreach($message as $message) {
        echo '
        <div class="message">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>
<!-- add book -->
<section class="add-book">
    <h1 class="heading">add book</h1>
    <form action="" method="POST" enctype="multipar/form-data">
        <div class="flex">
            <div class="inputBox">
                <span>book title (required)</span>
                <input type="text" required placeholder="enter book title"
                name="title" maxlenght="500" class="box">
            </div>
            <div class="inputBox">
                <span>book genre (required)</span>
                <input type="number" required placeholder="enter book genre"
                name="genre" maxlenght="20" class="box">
            </div>
            <div class="inputBox">
                <span>book author (required)</span>
                <input type="text" required placeholder="enter book author"
                name="author" maxlenght="500" class="box">
            </div>
            <div class="inputBox">
                <span>book price (required)</span>
                <input type="text" required placeholder="enter book price"
                name="price" maxlenght="20" class="box">
            </div>
            <div class="inputBox">
                <span>choose image (required)</span>
                <input type="file" name="img" class="box" accept="img/jpg, img/jpeg, img/png" required>
            </div>
            <div class="inputBox">
                <span>book description</span>
                <textarea name="details" class="box" placeholder="enter book description"
                required maxlenght="10000" cols="30" rows="10"></textarea>
            </div>
            <div class="inputBox">
                <span>about author</span>
                <textarea name="author_info" class="box" placeholder="enter info about author"
                required maxlenght="10000" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="add book" name="add_book" class="btn">
        </div>
    </form>
</section>
</body>
</html> 

<!-- script file -->
<script src="./scripts/admin_script.js"></script>