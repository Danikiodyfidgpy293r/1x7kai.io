<?php
 session_start();
 require 'db.php';

 if(!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
  header("Location: login.php");
  exit();
 }
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="application-name" content="1x7KaiSite">
    <meta name="X-XSS-Protection" content="1; mode=block">
    <meta name="X-Content-Type-Options" content="nosniff">
      <title>My site</title>
      <link rel="stylesheet" href="css/styles.css">
      <link rel="icon" href="#">
  </head>
  <body>
   <main>
    <header>
       <ul>
          <li><a href="#">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Services</a></li>
       </ul>
    </header>
      <nav><h2>Home</h2>
        <?php
          require 'db.php';
          session_start();
          
          if(isset($_SESSION['admin'])) {
           $name = $_SESSION['admin'];
           echo "Добро пожаловать, " . htmlspecialchars($name) . "!";
          } else {
             echo "Добро пожаловать, гость!";
            }
        ?>
      <p>Выйти из своего <a class="register-btn" href="logout.php">профиля</a></p>
      </nav>

      <div class="container">
         <h2 class="h2-container">Тут будет информация о самом сайте</h2>
         <p>Данный сайт существует под моим руководстовом, так как я и явлюсь его владельцем.</p>
         <p>Тут я лишь расскажу кратко, что зачем и почему этот сайт существует.</p>
         <p>Если вы хотите узнать <a class="text-container" href="about.php">подробности</a>, то переходите во вкладку "О нас".</p>
         <p>Если вы хотите заказать <a class="text-container" href="services.php">услугу</a> у меня, то перейдите во вкладку "Сервис".</p>
         <i>Чтобы чётко, кратко и понятно разъяснить для чего этот сайт: я просто повторяю знания и свои умения использовать HTML-разметку по памяти.</i>
      </div>
      <div class="commentr">
        <h2>Оставить комментарий: </h2>
          <form id="commentForm" action="comment.php" method="POST">
           <label for="name">Name: </label>
           <input type="text" id="name" name="name" placeholder="Введите своё имя.." required pattern="^[a-zA-Z0-9]*$">
           <label for="email">Email: </label>
           <input type="email" id="email" name="email" placeholder="Введите своё email.." required>
           <label for="text">Text: </label>
           <textarea rows="4" cols="26" id="text" name="text" placeholder="Оставить свой комментарий" required></textarea>
           <button class="comment-btn" type="submit">Отправить</button>
         </form>

       <div class="comments" id="commentsContainer">
        <h3>Комментарии:</h3>
           <?php
              require 'db.php';

              $result = $conn->query("SELECT * FROM comments WHERE status = 'pending'");

              if($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                   echo "<div class='comment'>";
                   echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong> (" . $row['created_at'] . ")</p>";
                   echo "<p>" . nl2br(htmlspecialchars($row['text'])) . "</p>";

                   echo "<a href='approve_comment.php?id=" . $row['id'] . "'>Утвердить</a> | ";
                   echo "<a href='delete_comment.php?id=" . $row['id'] . "'>Удалить</a>";
                   echo "</div>";
                }
              } else {
                   echo "<p>Комментариев пока нет.</p>";
                }
           ?>
       </div>
      </div>
    <footer class="footer_site">
       <p class="footer__p">&copy;2025 1x7Kai. All right reserved.</p>
    </footer>
   </main>
  </body>
</html>