<?php
 session_start();

 $adminUser = 'admin';
 $adminPass = 'Adminka_12345';

 if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $password = $_POST['password'] ?? '';

  if($adminUser === $name && $adminPass === $password) {
    $_SESSION['admin'] = true;
    header("Location: admin.php");
    exit();
  }
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
       <title>Login</title>
      <link rel="stylesheet" href="css/register.css">
       <link rel="icon" href="#">
   </head>
   <body>
      <div class="container">
         <h2>Register/login</h2>

           <form method="POST">
           <h2>Вход</h2>
           <label for="name">Name: </label>
           <input type="text" name="name" id="name" placeholder="Введите своё имя.." required>
           <label for="password">Password: </label>
           <input type="password" name="password" id="password" placeholder="Введите свой пароль.." required>
           <button class="btn" type="submit">Вход</button>
           <p>Если вы не являетесь <a href="register.php">администратором</a>, то войдите во вкладку Регистрации.</p>
         </form>

      </div>

   </body>
</html>