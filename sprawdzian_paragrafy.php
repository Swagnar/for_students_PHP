<?php $conn = mysqli_connect("localhost", "admin", "root", "sprawdzian"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <form action="#" method="POST">
    Treść: <input type="text" name="tekst">
    Kolor tła: <input type="color" name="bg-color" value="#00ff00">
    Kolor txt: <input type="color" name="txt-color">
    <input type="submit" value="Dodaj" name='dodaj'>
  </form>
  <hr>
  <table>
    <?php
      $sql = "SELECT * FROM paragrafy";
      $wynik = mysqli_query($conn, $sql);
      while($wiersz = mysqli_fetch_assoc($wynik)) {
        $id       = $wiersz["id"];
        
        $tresc    = $wiersz["treść"];
        $bgColor  = $wiersz["tło_kolor"];
        $txtColor = $wiersz["tekst_kolor"];
        
        echo "<tr>";
          echo "<td>";
            echo "<p style='background-color: $bgColor; color: $txtColor;'>$tresc</p>";
          echo "</td>";
          echo "<td>";
            echo "<form method='POST'>";
              echo "<input type='hidden' value='$id' name='id-usun'>";
              echo "<input type='submit' value='X' name='usuwam'>";
            echo "</form>";
          echo "</td>";
        echo "</tr>";
      }
      if(isset($_POST['dodaj'])) {
        $tresc    = $_POST['tekst'];
        $bgColor  = $_POST['bg-color'];
        $txtColor = $_POST['txt-color'];

        $sql = "INSERT INTO paragrafy (treść, tło_kolor, tekst_kolor)
                VALUES ('$tresc', '$bgColor', '$txtColor')";

        if(mysqli_query($conn, $sql)) {
          header("Location: index2.php");
        } else {
          mysqli_error($conn);
        }
      }
      if(isset($_POST['usuwam'])) {

        $id = $_POST['id-usun'];

        $sql = "DELETE FROM paragrafy WHERE id='$id'";
        // mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if(mysqli_query($conn, $sql)) {
          header("Location: index2.php");
        } else {
          mysqli_error($conn);
        }
      }
    ?>
  </table>
</body>
</html>
<?php mysqli_close($conn); ?>