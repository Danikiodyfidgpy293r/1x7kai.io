<?php
 require 'db.php';
 session_start();

 if (isset($_GET['id'])) {
   $id = $_GET['id'];

   $stmt = $conn->prepare("UPDATE comments SET status = 'approved' WHERE id = ?");
   $stmt->bind_param("i", $id);
   $stmt->execute();

   echo "Комментарий утверждён!";
 } else {
    echo "Ошибка ID отправленного комментария";
   }
   $conn->close();
?>