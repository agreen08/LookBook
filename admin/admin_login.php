<?php
// подключение к базе данных
include ('./components/connect.php');

session_start();
// отправляем данные в форму
if(isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $pass = $_POST['pass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    // выбираем админа из таблицы
    $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE name = ? AND
    password = ?");
    $select_admin->execute([$name, $pass]);
    // сравнение полученных данных, если ОК, переадресация в админ-панель
    if($select_admin->rowCount() > 0) {
        $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
        $_SESSION['admin_id'] = $fetch_admin_id['id'];
        header('location:dashboard.php');
    // если данные некорректны
    }else{
        $message[] = 'Incorrect username or password!';
    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- admin css file -->
    <link rel="stylesheet" href="./css/admin_style.css">
</head>
<body>

<!-- сообщение, если данные некорретны -->
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
    <!-- admin login form -->
    <section class="form-container">
        <form action="" method="POST">
            <h3>Login</h3>
            <p>Default username = <span>admin</span> & password = <span>12345</span></p>
            <input type="text" name="name" maxlenght="20" required 
            placeholder="enter your username" class="box" oninput="this.value = 
            this.value.replace(/\s/g, '')">
            <input type="password" name="pass" maxlenght="20" required 
            placeholder="enter your password" class="box" oninput="this.value = 
            this.value.replace(/\s/g, '')">
            <input type="submit" value="login" name="submit" class="btn">
            <a href="../">Back to startpage</a>
        </form>
    </section>
</body>
</html>