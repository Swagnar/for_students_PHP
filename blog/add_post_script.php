<?php require 'db_connect.php';
    $nazwa_folderu="media/";
    $nazwa_pliku=$nazwa_folderu . basename($_FILES["form_image"]["name"]);
    $przeslano= true;

    if(isset($_POST["submit"])){
        $test = getimagesize($_FILES["form_image"]["tmp_name"]);
        if($test != false){
            $przeslano = true;
        }else{
            $przeslano = false;
        }   
    }

    if($przeslano == true){
        $kwerenda = $conn->prepare("INSERT INTO posts(user_id, title, content, file_path) VALUES(?, ?, ?, ?)");
        $kwerenda->bind_param('ssss', $_SESSION["ID"], $_POST["title"],$_POST["content"], $nazwa_pliku);

        if($kwerenda->execute()){
            $dodano_do_db= true;
        }else{
            echo "<h2>Wystąpił błąd przy dodawaniu do DB</h2>";
            $dodano_do_db=false;
        }
    }

    if($przeslano == true and $dodano_do_db == true) {
        if(move_uploaded_file($_FILES["form_image"]["tmp_name"], $nazwa_pliku)) {
            header("Location: main.php");
        }
    }


?>












SCHIZOFREJA123L@DACZNICAGREJA321
