<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LookBook - catalog</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="header">
        <div class="wrapper">
            <div class="header-wrapper">
              <div class="header-logo">
                  <a href="./" class="header-logo-link">
                  <img src="./img/small-logo.svg" alt="LookBook" class="header-logo-pic">
                </a>
              </div>
              <nav class="header-nav">
                  <ul class="header-list">
                      <li class="header-item">
                          <a href="catalog.php" class="header-link">Catalog</a>
                      </li>
                      <li class="header-item">
                        <a href="bag.html" class="header-link">Bag</a>
                    </li>
                    <li class="header-item">
                        <a href="giftcards.html" class="header-link">Gift Cards</a>
                    </li>
                    <li class="header-item">
                        <a href="signin.php" class="header-link">Sign In</a>
                    </li>
                  </ul>   
              </nav>
            </div>
        </div> 
     </header>
     <main class="main">
      <section class="catalog">
        <div class="wrapper">
           <h2>Catalog</h2>
           <div class="search-bar">
             <form action="">
               <button type="submit">Book <img src="./img/arrow.png" alt="arrow"></button> 
               <input type="text" placeholder="Search for a book, author, category, product...">              
             </form>
           </div>
        </div>
    </section>
    <section class="content">
      <div class="wrapper">
        <?php foreach ($arrayAll[1] as $data) {?>
          <?php if ($data["id"] == "22") {
            $link = 'book.php';
          } else {
            $link = "#";
          }?>
        <div class="content-cards">
          <a href=<?=$link?>><img src="<?=$data["img"]?>" alt="content-card" class="content-card-thumb">
            <p class="name"><?=$data["title"]?></p>
            <p class="author"><?=$data["author"]?></p>
            <p class="price"><?=$data["price"]?></p>
          </a>
           <?php } ?> 
           <a href="fantasticland.html"><img src="./img/fantaticland.png" alt="fantaticland" class="content-card-thumb">
            <p class="name">Fantasticland</p>
            <p class="author">Mike Bockoven</p>
            <p class="price">$15.80</p>
          </a>
          <a href="faultstars.html"><img src="./img/faultstars.png" alt="faultstars" class="content-card-thumb">
            <p class="name">The Fault in Our Stars</p>
            <p class="author">Hal Leonard Corp</p>
            <p class="price">$15.79</p>
          </a>
          <a href="road.html"><img src="./img/road.png" alt="road" class="content-card-thumb">
            <p class="name">The Road</p>
            <p class="author">Cormac McCarthy</p>
            <p class="price">$15.81</p>
          </a>
        </div> 
      </div>
    </section>
     </main> 
     <footer class="footer">
      <div class="wrapper">
      <div class="footer-item">
        <div class="footer-logo">
          <a href="./">
          <img src="./img/small-logo.svg" alt="footer-logo" class="footer-logo-pic"></a>
        </div>
        <nav class="footer-nav">
          <ul class="footer-menu">
            <li class="footer-menu-item">
              <h3 class="footer-menu-title">Contact</h3>
              <a href="!#" class="footer-menu-link">info@lookbook.com</a>
            </li>
            <li class="footer-menu-item">
              <a href="!#" class="footer-menu-link">+3336756774</a>
            </li>
            <li class="footer-menu-item">
              <a href="!#" class="footer-menu-link">Location</a>
            </li>
          </ul>
        </nav>
        <nav class="footer-nav">
          <ul class="footer-menu">
            <li class="footer-menu-item">
              <h3 class="footer-menu-title">About Us</h3>
              <a href="!#" class="footer-menu-link">Team</a>
            </li>
            <li class="footer-menu-item">
              <a href="!#" class="footer-menu-link">Shops</a>
            </li>
            <li class="footer-menu-item">
              <a href="!#" class="footer-menu-link">Career</a>
            </li>
          </ul>
        </nav>
        <nav class="footer-nav">
          <ul class="footer-menu">
            <li class="footer-menu-item">
              <h3 class="footer-menu-title">Social Media</h3>
              <a href="!#" class="footer-menu-link">Facebook</a>
            </li>
            <li class="footer-menu-item">
              <a href="!#" class="footer-menu-link">Twitter</a>
            </li>
            <li class="footer-menu-item">
              <a href="!#" class="footer-menu-link">Instagram</a>
            </li>
          </ul>
        </nav>
        </div>
      </div>
     </footer>
</body>
</html>