<?php $conn = mysqli_connect("localhost", "admin", "root", "sprawdzian") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    table, td {
      border: 1px solid black;
    }
    td {
      padding: 20px;
      width: 50%;
    }
  </style>
</head>
<body>
  

  <form action="#" method="POST">
    <?php 

    function random_color_part() {
      return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
    }

    function random_color() {
        return "#".random_color_part() . random_color_part() . random_color_part();
    }

    $bg = random_color();
    $txt = random_color();
    echo "<input type='text' name='p-content' value='$bg'>";
    echo "Tło:<input type='color' name='p-bg-color' value='$bg'>";
    echo "Tekst:<input type='color' name='p-txt-color' value='$txt'>";
    // Tło:<input type='color' name='p-bg-color'>
    // Tekst:<input type='color' name='p-txt-color'>
    ?>
    <input type='submit' name='submit'>
  </form>

  <hr>

  <?php

    if(isset($_POST['delete'])) {
      $id = $_POST['target'];
      $sql = "DELETE FROM paragrafy WHERE id='$id'";
      mysqli_query($conn, $sql) or die(mysqli_error($conn));
    }


    


    $sql = "SELECT * FROM paragrafy";

    $wynik = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    while($wiersz = mysqli_fetch_assoc($wynik)) {
      $id = $wiersz["id"];
      $content = $wiersz["treść"];

      echo "<div class='paragraf'>";
        echo "<table><tr><td>";
          echo "<li><span>$content</span></li>";
          echo "</td><td>";
          echo "<form action='#' method='POST'><input type='submit' name='delete' value='X'><input type='hidden' value='$id' name='target'></form>";
        echo "</td></tr></table>";
      echo "</div>";
    }






    if(isset($_POST['submit'])) {
      $content = $_POST["p-content"];
      $bg = $_POST["p-bg-color"];
      $txt = $_POST["p-txt-color"];

      $sql = "INSERT INTO paragrafy (
                treść, 
                tło_kolor, 
                tekst_kolor
              ) VALUES ( '$content', '$bg', '$txt' )";
      
      if(mysqli_query($conn, $sql)) {
        header('location: index.php');
      } else {
        die(mysqli_error($conn));
      }
    }
  ?>
</body>
</html>