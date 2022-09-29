<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<script>
    function zamknij_komunikat(){
        document.getElementById("komunikat").remove();
    }
</script>
<body>
    <?php
    session_start();
        if(isset($_SESSION["USERNAME"])){
            echo $_SESSION["USERNAME"];

        }
        if(isset($_REQUEST["success"])){
            if($_REQUEST["success"] == "true"){
                echo "<div id='komunikat'>";
                echo "<h2>Konto zostało utworzone</h2>";
                echo "<br>";
                echo "<h3>Teraz możesz sie zalogować</h3>";
                echo "<button onclick='zamknij_komunikat()'>X</button>";
                echo "</div>";
            }
        }
    ?>
    <h1>Zaloguj sie</h1>
    <div id="formularz">
        <form action="main.php" method="post">
        <table>
            <tr>
                <td>Nazwa użytkownika</td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>Hasło</td>
                <td>
                    <input type="text" name="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="zaloguj">
                </td>
            </tr>
        </table>
        Nie masz konta?<a href="register.html">Kliknij tutaj</a>
    </form>
    </div>

</body>
</html>