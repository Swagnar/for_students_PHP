<?php
    require 'db_connect.php';

    $kwerenda= "SELECT * FROM users";

    $wynik = $conn->query($kwerenda);

    if($wynik->num_rows > 0){
        while($wiersz = $wynik->fetch_assoc()){
            if($_POST["username"] === $wiersz["username"]){
                
                if(hash("sha256",$_POST["password"]) == $wiersz["password"]){
                    
                    $_SESSION["USERNAME"] = $wiersz["username"];
                    $_SESSION["ID"] = $wiersz["id"];
                } else{
                    header("Location: login.php?success=false");
                }
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    
    <meta charset="UTF-8">
    <style>
        .post{
            background-color: gray;
            margin-bottom: 20px;
        }
        img {
            width: 300px;
            height: 300px;
        }
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <div id="banner">
        <h2>Witaj <?php echo $_SESSION["USERNAME"]?></h2>
        <form action="logout.php" method="GET">
            <input type="submit" value="Wyloguj">
        </form>
        <form action="change_password.php" method="GET">
            <input type="submit" value="Zmień hasło">
        </form>
    </div>
    <div id="kontrola">
        <h3>Dodaj post</h3>
        <form action="add_post_form.php" method="GET">
            <input type="submit" value="Dodaj">
        </form>
    </div>
    <div id="posty">
        <?php
        $kwerenda="SELECT * FROM posts WHERE user_id=" . $_SESSION["ID"];
        
        $wynik = $conn->query($kwerenda);
        if($wynik->num_rows > 0){
            while($wiersz = $wynik->fetch_assoc()){
                echo "<div class='post'>";
                echo "<p>" . $wiersz["title"] . "</p>";
                echo "<span>" . $wiersz["content"] . "</span>";
                echo "<img src='" . 
                        $wiersz["file_path"] . 
                        "'alt='coś poszło nie tak'>";
                echo "</div>";
            }
        }else{
            echo "Błąd";
        }
        ?>
    </div>
</body>
</html>
<?php
 $conn->close()
?>
