<header class="header">
<!-- header menu -->
<section class="flex">
    <a href="dashboard.php" class="logo"> Admin<span>Panel</span></a>
    <nav class="navbar">
        <a href="dashboard.php">Home</a>
        <a href="books.php">Books</a>
        <a href="category.php">Categories</a>
        <a href="users.php">Users</a>
    </nav>
    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="user-btn" class="fas fa-user"></div>
    </div>
    <!-- выход из админки -->
    <div class="profile">
        <?php
        $select_profile = $conn->prepare("SELECT * FROM `admins` WHERE id = ?");
        $select_profile->execute([$admin_id]);
        $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
        ?>
        <p><?=$fetch_profile['name']; ?></p>
        <!-- сообщение при выходе -->
    <a href="./components/admin_logout.php" onclick="return confirm
    ('Do you want to leave now?');"class="delete-btn">logout</a>
    
    </div>
</section>
</header>