<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LookBook - Your bookshop</title>
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
        <section class="intro">
            <div class="wrapper">
                <div class="intro-logo">
                    <a href="./" class="intro-logo-link">
                    <img src="./img/big-logo.svg" alt="LookBook" class="intro-logo-pic">
                  </a>                  
                </div>          
            <h1 class="intro-title">
                - Dreams Come True
            </h1>
        </div>    
        </section>
        <section class="sale">
            <div class="wrapper">
                <h2>Sale up to 30%</h2>
                <div class="sale-cards">
                <figure>
                    <figcaption>Books 10%</figcaption>
                    <p><img src="./img/remedy.png" alt="Books 10%" class="sale-card-thumb"></p>
                </figure>
                <figure>
                    <figcaption>Accessories 30%</figcaption>
                    <p><img src="./img/acesso.png" alt="Accessories 30%" class="sale-card-thumb"></p>  
                </figure>
                <figure>
                    <figcaption>Magazine 20%</figcaption>
                    <p><img src="./img/journal.png" alt="Magazine 20%" class="sale-card-thumb"></p>
                </figure>
            </div>
            </div>
        </section>
        <section class="release">
            <div class="wrapper">
                <h2>New Release</h2>
                <div class="release-cards">
                <?php foreach ($arrayResult as $data) {?> 
                     <a href="!#"><img src="<?=$data["img"]?>" alt="release" class="release-card-thumb">
                     <?=$data["title"]?> <br> Author: <?=$data["author"]?> <br>Price: <?=$data["price"]?>
                    </a> 
                    <?php } ?> 
                </div>
            </div> 
        </section>
        <section class="about">
            <div class="wrapper">
            <div class="about-wrapper">
                <div class="about-logo">
                    <a href="/" class="about-logo-link">
                    <img src="./img/about-logo.svg" alt="About Us" class="about-logo-pic">
                    </a>
                </div>
                <div class="about-info">
                    <h3>About Us</h3>
                    <p>
                        This is a modern bookstore where you will find everything you need for a comfortable reading of books. 
                        Here you can choose the appropriate format of the book, accessories to make reading easier and purchase a gift card.
                        You can make a purchase through the website or in our stores, you can find information about their location below.
                    </p>
                </div>
            </div>
        </div>         
        </section>
        <section class="shops">
            <div class="wrapper">
                <h2>Shops</h2>
                <div class="shops-wrapper">
                    <img src="./img/shops.svg" alt="Shops">
                <div class="shops-info">
                    <div class="shops-list">
                        <a href="#!" class="shops-item">Tallinn, Ülemiste keskus</a><br>
                        <a href="#!" class="shops-item">Tallinn, Narva mnt 31</a><br>
                        <a href="#!" class="shops-item">Tallinn, Smuuli tee 7</a><br>
                        <a href="#!" class="shops-item">Tallinn, Tähesaju tee 4</a>
                    </div>
                </div>
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