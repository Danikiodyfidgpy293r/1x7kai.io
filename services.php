<?php
 session_start();
 require 'db.php';

 if(!isset($_SESSION['user_id'])) {
   header("Location:login.php");
   exit();
 }
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-Security-Policy">
      <meta name="X-XSS-Protection" content="1; mode=block">
      <meta name="X-Content-Type-Options" content="nosniff">
      <title>My site</title>
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/styleserv.css">
      <script src="js/scriptfunc.js"></script>
      <link rel="icon" href="#">
  </head>
  <body>
   <main>
    <header>
       <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="#">Services</a></li>
       </ul>
    </header>
      <nav><h2>Services</h2></nav>

      <div class="container">
         <h2 class="h2-container">Сервис, где вы можете заказать у меня услугу</h2>
         <p>В данной вкладке сайта, вы можете заказать у меня услугу в помощи сайта или игры, и др.</p>
         <div id="services">
            <div class="service">
              <span>Заказать услугу написания сайта - ₽2500</span>
              <button onclick="addToList('Заказать услугу написания сайта', 2500)">Add</button>
            </div>
            <div class="service">
              <span>Разработать игру - ₽5000</span>
              <button onclick="addToList('Разработать игру', 5000)">Add</button>
            </div>
            <div class="service">
              <span>Тестировщик сайта или игры - ₽2000</span>
              <button onclick="addToList('Тестировщик сайта или игры', 2000)">Add</button>
            </div>
         </div>
        <div id="summary">
           <h2>Your selected services</h2>
           <ul id="selectedServices"></ul>
           <p><strong>Total: ₽<span id="totalPrice">0</span></strong></p>
           <a id="buyButton" href="payment.html">Buy</a>
        </div>
      </div>
     
    <footer class="footer_site">
       <p class="footer__p">&copy;2025 1x7Kai. All right reserved.</p>
    </footer>
   </main>
  </body>
</html>