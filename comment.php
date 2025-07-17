<?php
 require 'db.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
   $name = htmlspecialchars(trim($_POST['name']));
   $email = htmlspecialchars(trim($_POST['email']));
   $text = htmlspecialchars(trim($_POST['text']));
   
   $stmt = $conn->prepare("INSERT INTO comments(name, email, text, status) VALUES (?, ?, ?, 'pending')");
   $stmt->bind_param("sss", $name, $email, $text);

   $stmt->execute();

   echo "Ваш комментарий отправлен на проверку";

   header("Location: home.php");
   exit();
 } else {
    echo "Комментариев нет";
   }

  $conn->close();
?>