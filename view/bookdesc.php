<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php foreach ($arrayResult as $data) {?>
    <title><?=$data["title"]?> - LookBook</title>
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
                    <a href="signin.html" class="header-link">Sign In</a>
                </li>
              </ul>   
          </nav>
        </div>
    </div> 
 </header>
 <main class="main">
     <section class="book-cover">
         <div class="wrapper">
             <div class="cover-wrapper">
                <div class="book-cover-img">
                    <img src="<?=$data["img"]?>" alt="onebook" class="book-cover-thumb">
                </div>
                <div class="cover-info">
                    <h3><?=$data["title"]?></h3>
                    <h4><?=$data["author"]?></h4>
                    <p><?=$data["price"]?></p>
                    <p class="available">Available</p>
                    <button class="add"><img src="./img/card.png" alt="card"> ADD TO CART</button>
                    <button class="wishlist"><img src="./img/wishlist.png" alt="wishlist"> ADD TO WISHLIST</button>   
                </div>
             </div>
         </div>
     </section>
     <!-- <section class="details">
         <div class="wrapper">
             <h3>Product Detail</h3>
             <div class="details-wrapper">
                <p class="list">
                Price <br>
                Publisher <br>
                Publish Date <br>
                Pages <br>
                Language <br>
                Type <br>
                </p>
                <p class="list-item">
                $15.80 <br>
                Skyhorse <br>
                October 11, 2016 <br>
                272 <br>
                English <br>
                Hardcover <br>
                </p>               
             </div>
         </div>
     </section> -->
     <section class="description">
         <div class="wrapper">
            <h3>Description</h3>
            <p><?=$data["description"]?>
            </p>
            <?php } ?> 
         </div>   
     </section>
     <!-- <section class="description">
        <div class="wrapper">
           <h3>About the Author</h3>
           <p>Mike Bockoven writes nasty little thriller/horror novels while his kids are in gymnastics class and piano lessons. He lives in Grand Island, Nebraska, smack in the middle of the state. His first book, “FantasticLand”, was published in 2016 through Skyhorse Publishing. His second book, “Pack” was released in 2018. He has a wife, Sarah, and two kids, Emaline and Tessa.
        </p>
        </div>
    </section> -->
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