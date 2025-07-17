<?php
  include 'db.php';
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $role = ($_POST['role'] == 'admin') ? 'admin' : 'user';

   $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $result = $stmt->get_result();
   if ($result->num_rows > 0) {
    echo "Email уже занят!";
  } else {
     $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
     $stmt->bind_param("ssss", $name, $email, $password, $role);
     if ($stmt->execute()) {
        header("Location:login.php");
        exit();
     } else {
        echo "Ошибка: " . $stmt->error;
       }
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
      <link rel="stylesheet" href="css/register.css">
       <title>Register</title>
       <link rel="icon" href="#">
   </head>
   <body>
      <div class="container">
         <h2>Register/login</h2>
         <form action="" method="POST">
           <h2>Регистрация</h2>
           <label for="name">Name: </label>
           <input type="text" name="name" id="name" placeholder="Введите своё имя.." required>
           <label for="email">Email: </label>
           <input type="email" name="email" id="email" placeholder="Введите свой email.." required>
           <label for="password">Password: </label>
           <input type="password" name="password" id="password" placeholder="Придумайте свой пароль.." required minlength="8" maxlength="16" pattern="^[a-zA-Z0-9_.-]*$">
           
           <div class="checkbox">
             <input type="checkbox" required><p>Вы соглашаетесь с нашей <a href="konfinden.html">конфиденциальностью.</a></p>
           </div>
           <button class="btn" type="submit">Регистрация</button>
           <p class="text_form">Если у вас уже есть <a href="login.php">аккаунт</a>, то войдите во вкладку Вход.</p>
           <p class="text_form">Если вы являетесь <a href="admin-login.php">администратором</a>, то войдите во вкладку Вход как администратор.</p>
          </form>

      </div>
   </body>
</html>