<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - LookBook</title>
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
                          <a href="catalog.html" class="header-link">Catalog</a>
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
         <section class="links">
             <div class="wrapper">
                <div class="link1-wrapper">
                    <a href="!#" class="signin">Sign In</a>
                </div>
                <div class="link2-wrapper">
                    <a href="./admin/admin_login.php" class="login">or Log In</a>
                </div>  
             </div>
         </section>
         <section class="signin-form">
             <div class="wrapper">
                 <div class="signin-form-wrapper">
                     <div class="signin-fill">
                        <form class="signin-info" role="form" method="POST" action="registerAnswer">
                            <input type="text" placeholder="Firstname">
                        </form>
                        <form class="signin-info" role="form" method="POST" action="registerAnswer">
                            <input type="text" placeholder="Lastname">
                        </form>
                        <form class="signin-info" role="form" method="POST" action="registerAnswer">
                            <input type="text" placeholder="Country">
                        </form>
                        <form class="signin-info" role="form" method="POST" action="registerAnswer">
                            <input type="text" placeholder="City">
                        </form>
                        <form class="signin-info" role="form" method="POST" action="registerAnswer">
                            <input type="text" placeholder="Home adress">
                        </form>
                        <form class="signin-info" role="form" method="POST" action="registerAnswer">
                            <input type="text" placeholder="Telephone">
                        </form>
                    </div>
                    <div class="signin-fill">
                        <form action="submit" class="signin-info">
                            <input type="text" placeholder="Favourite Genres">
                        </form>
                        <div class="lines">
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                            <div class="line"></div>
                            <button type="submit" class="sign-btn" name="save"><p>Sign In</p></button>
                        </div>
                    </div>
                     </div>
                 </div>
             </div>
         </section>
         <section class="account">
             <div class="wrapper">
                <div class="account-title">
                    <h2>What will an account in Look <span style="color:#0090FF">Book</span> give you?</h2>
                    <p>With an account in our bookstore, you will receive unique special offers, discounts and much more. The account will allow you to save the product you like and postpone the purchase (unauthorized users cannot save the product to the basket). Also, your account will help us find the best deals for you.
                    <br>
                    <br>
                    Thank you for staying with us, Your Look <span style="color:#0090FF">Book</span><img src="./img/bookicon.png" alt="bookicon"></p>
                </div>
             </div>
         </section>
     </main>
     <footer class="footer">
     <div class="wrapper"></div>
    </footer>
</body>
</html>