<?php require 'db_connect.php';
    if(isset($_POST["change_password_submit"])) {
        $kwerenda = "SELECT * FROM users WHERE id=" . $_SESSION["ID"];

        $wynik = $conn->query($kwerenda);

        if($wynik->num_rows > 0) {
            while($wiersz = $wynik->fetch_assoc()) {
                $stareHaslo = $wiersz["password"];
            }
        }

        if($stareHaslo == md5($_POST["old_password"])) {
            echo "Hasła są takie same, można zmieniać";
            $noweHaslo1 = $_POST["new_password1"];
            $noweHaslo2 = $_POST["new_password2"];
// $kwerenda = 
// UPDATE users SET password=$noweHaslo1 WHERE id=$_SESSION["ID"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zmień hasło</title>
</head>
<body>
    <a href="main.php">Powrót na stronę główną</a>
    <hr>
    <form action="change_password.php" method=POST>
        <input type="password" name="old_password" placeholder="Stare hasło">
        <input type="password" name="new_password1" placeholder="Nowe hasło">
        <input type="password" name="new_password2" placeholder="Powtórz hasło">
        <input type="submit" name="change_password_submit" value="Zmień">
    </form>
</body>
</html>