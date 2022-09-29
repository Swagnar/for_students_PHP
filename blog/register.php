<?php
     require "db_connect.php";

     if($_POST["username"] == "" or $_POST["password"] == "" or $_POST["email"] == ""){
        echo "Pola są puste";
     }

   //   $kwerenda=
   //   "
   //      INSERT INTO users(
   //          username,
   //          password,
   //          email
   //          )
   //          VALUES(
   //              '" . $_POST["username"] . "',
   //              '" . $_POST["password"] . "',
   //              '" . $_POST["email"] . "'
   //              )
   //   ";
      $kwerenda = $conn->prepare(
         "INSERT INTO users(username, password, email) VALUES (?, ?, ?)"
      );
      $kwerenda->bind_param(
         'sss',
         $_POST["username"],
         md5($_POST["password"]),
         $_POST["email"]
      );
      if($kwerenda->execute()) {
         header("Location: login.php?success=true");
      } else {
         echo "<h1>Coś poszło nie tak</h1>";
      }

     $conn->close()
?>