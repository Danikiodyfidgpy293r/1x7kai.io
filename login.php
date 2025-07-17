<?php
  include 'db.php';
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];

   $stmt = $conn->prepare("SELECT id, password, role FROM users WHERE name = ?");
   $stmt->bind_param("s", $name);
   $stmt->execute();
   $stmt->store_result();
   $stmt->bind_result($id, $hashed_password, $role);
   
   if($stmt->num_rows > 0) {
     $stmt->fetch();
    if(password_verify($password, $hashed_password)) {
     $_SESSION['user_id'] = $id;
     $_SESSION['name'] = $name;
     $_SESSION['role'] = $role;
     header("Location:home.php");
     exit();
    } 
   } else {
     echo "Данного пользователя не существует";
   }
   $stmt->close();
   $conn->close();
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
       <title>Register</title>
      <link rel="stylesheet" href="css/register.css">
       <link rel="icon" href="#">
   </head>
   <body>
      <div class="container">
         <h2>Register/login</h2>

           <form method="POST" action="">
           <h2>Вход</h2>
           <label for="name">Name: </label>
           <input type="text" name="name" id="name" placeholder="Введите своё имя.." required>
           <label for="password">Password: </label>
           <input type="password" name="password" id="password" placeholder="Введите свой пароль.." required>
           <p id="error" style="color:red; display:none">Неправильный пароль</p>
           <button class="btn" type="submit">Вход</button>
           <p>Если у вас не существует <a href="register.php">аккаунт</a>, то войдите во вкладку Регистрации.</p>
         </form>

      </div>
   <script>
       document.querySelector('.btn').addEventListener('click', () => {
       document.getElementById('error').style.display = 'block';
       });
   </script>
   </body>
</html>