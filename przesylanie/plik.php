<?php
    $nazwaFolderu = "media/";
    $nazwaPliku = $nazwaFolderu . $_FILES["plik"]["name"];

    if($_FILES["plik"]["size"] > 1000000) {
        echo "Plik przekracza chyba 1MB";
    }
    if($_FILES["plik"]["type"] !== "image/png" or $_FILES["plik"]["type"] !== "image/jpg") {
        echo "Plik nie jest plikiem graficznym";
    }
    if(move_uploaded_file($_FILES["plik"]["tmp_name"], $nazwaPliku)) {
        echo "Sprawdź folder media";
    } else {
        echo "Oj";
    }
    
    echo var_dump($_FILES["plik"]);
?>