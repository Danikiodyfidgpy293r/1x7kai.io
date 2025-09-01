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
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="application-name" content="1x7KaiSite">
    <meta http-equiv="Content-Security-Policy">
    <meta name="X-XSS-Protection" content="1; mode=block">
    <meta name="X-Content-Type-Options" content="nosniff">
      <title>My site - About</title>
      <link rel="stylesheet" href="css/styles.css">
      <link rel="stylesheet" href="css/swiper.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
      <link rel="icon" href="#">
  </head>
  <body>
   <main>
    <header>
       <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="services.php">Services</a></li>
       </ul>
    </header>
      <nav><h2>About</h2></nav>

      <div class="container">
         <h2 class="h2-container">О нас</h2>
         <p>На этом сайте я попытаюсь выложить все свои мысли и идеи, дабы развиваться и продвигать свои проекты не только в сфере игр, но и сайта.</p>
         <p>Мои проект это:</p>
         <table>
            <thead>
              <tr>
                <th>Игры</th>
                <th>Сайты</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Snow</td>
                <td>О моих играх</td>
              </tr>
              <tr>
                <td>Psycho place</td>
                <td>Магазин продуктов "Люцилла"</td>
              </tr>
              <tr>
                <td>𝕾𝖍𝖔𝖔𝖙𝖔𝖚𝖙 𝖜𝖎𝖙𝖍 𝖅𝖔𝖒𝖇𝖎𝖊𝖘</td>
                <td>Налоговая инспекция</td>
              </tr>
              <tr>
                <td>Shaders Roblox v2.7</td>
                <td>Военный комиссариат</td>
              </tr>
              <tr>
                <td>City</td>
                <td>Мессенджер MailLand</td>
              </tr>
              <tr>
                <td>The horror office</td>
                <td>Gendalf 1c</td>
              </tr>
              <tr>
                <td></td>
                <td><a href="https://danikiodyfidgpy293r.github.io/stroyservice_home/" class="a__link">Стройсервис</a></td>
              </tr>
            </tbody>
         </table>
       <p>Музыка из одной игры: <a class="audio-place" href="https://create.roblox.com/store/asset/1836222363/Ave-Maria?keyword=Maria&pageNumber=1&pagePosition=0">Psycho Place</a></p>
       <h5>Не обессудь, так как в других играх нету никакой музыки.</h5>

       <div class="swiper__place">
         <div class="swiper">
              <h2 class="h2-container">Разработанные игры</h2>
            <div class="swiper-wrapper">
               <div class="swiper-slide"> 
              <a class="swiper__a" href="https://www.roblox.com/games/5900185527/Psycho-place">
                    <img class="swiper__image" src="https://tr.rbxcdn.com/180DAY-16c62fe5abba867d3e97d223f518c546/256/256/Image/Webp/noFilter" alt="image">
                    <p class="swiper__description">Psycho Place</p>
                    <p class="swiper__description">This place calms me down.
After so much time, the game was updated.
Now the door can open, but you should wait for a while (P.S. It's not an hour, I tried to do less than in other places).  Command for sit - /sit
Added shaders for the game to have a slightly different atmosphere of the game itself. The second exit was extended. Textures have been added for the walls to make for some variety
This game was worked on by: 1x7Kai — developer; Alex_556 — designer</p>
              </a>
                </div>

               <div class="swiper-slide">
                <a class="swiper__a" href="https://www.roblox.com/games/17124256097/Shaders-Roblox-v2-4">
                    <img class="swiper__image" src="https://tr.rbxcdn.com/180DAY-11ff0c42a539c6d50b6e0db15a9c7fff/256/256/Image/Webp/noFilter" alt="image">
                    <p class="swiper__description">Shaders Roblox v2.4</p>
              </a>
                </div>

               <div class="swiper-slide">
                <a class="swiper__a" href="https://www.roblox.com/games/6135338341/unnamed">
                    <img class="swiper__image" src="https://tr.rbxcdn.com/180DAY-0c4612702e23c1f59b650306612654da/352/352/Image/Png/noFilter" alt="image">
                    <p class="swiper__description">𝕾𝖍𝖔𝖔𝖙𝖔𝖚𝖙 𝖜𝖎𝖙𝖍 𝖅𝖔𝖒𝖇𝖎𝖊𝖘</p>
              </a>
                </div>

               <div class="swiper-slide">
                <a class="swiper__a" href="https://www.roblox.com/games/7326094195/City">
                    <img class="swiper__image" src="https://tr.rbxcdn.com/180DAY-aac8a36344ed97846a038f79aaaa7bd4/352/352/Image/Png/noFilter" alt="image">
                    <p class="swiper__description">City</p>
              </a>
                </div>

             <div class="swiper-slide">
                <a class="swiper__a" href="https://www.roblox.com/games/5411901122/Sno">
                    <img class="swiper__image" src="https://tr.rbxcdn.com/180DAY-450a6c3f7e4061b618e6a03a6f5fa3bc/352/352/Image/Png/noFilter" alt="image">
                    <p class="swiper__description">Sno</p>
              </a>
                </div>

               <div class="swiper-slide">
                <a class="swiper__a" href="https://www.roblox.com/games/73378922365548/The-office-horror">
                    <img class="swiper__image" src="https://tr.rbxcdn.com/180DAY-7ffcdd8065f491f2190d154041b2213f/352/352/Image/Png/noFilter" alt="image">
                    <p class="swiper__description">The office horror</p>
                    <p class="swiper__description">A game where you need to survive from monsters. This game was developed by: 1x7Kai and Alex_556</p>
              </a>
              </div>

            </div>
               <div class="swiper-button-next"></div>
               <div class="swiper-button-prev"></div>

         </div>

       </div>

      </div>
    <footer class="footer_site">
       <p class="footer__p">&copy;2025 1x7Kai. All right reserved.</p>
    </footer>
   </main>
        <script src="js/swiper.js"></script>
  </body>

</html>

