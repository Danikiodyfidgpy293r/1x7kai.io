<?php
 require 'db.php';
 session_start();

 if (isset($_GET['id'])) {
   $id = $_GET['id'];

   $stmt = $conn->prepare("DELETE FROM comments WHERE id = ?");
   $stmt->bind_param("i", $id);
   $stmt->execute();

   header("Location: admin.php");
   exit();
 } else {
    echo "Ошибка ID отправленного комментария";
   }
   $conn->close();
?>