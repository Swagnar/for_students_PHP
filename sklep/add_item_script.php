<?php 
    require 'db/db_connect.php';

    $nazwaFolderu = 'media/';
    $nazwaPliku = $nazwaFolderu . basename($_FILES["item-image"]["name"]);
    $przeslano = true;

    if(isset($_POST["submit"])) {
        echo $_FILES["item-image"]["size"];
        
        $test = getimagesize($_FILES["item-image"]["tmp_name"]);
        if($test != false) {
            $przeslano = true;
        } else {
            $przeslano = false;
        }
    }

    if($przeslano == true) {
        $userID = 2;
        $kwerenda = $conn->prepare("INSERT INTO items(user_id, price, file_path, content) VALUES (?,?,?,?)");
        $kwerenda->bind_param('ssss', $userID, $_POST["item-price"], $nazwaPliku, $_POST['item-content']);

        if($kwerenda->execute()) {
            $dodanoDoDB = true;
        } else {
            $dodanoDoDB = false;
        }
    }
    
    if($przeslano == true and $dodanoDoDB == true) {
        
        if(move_uploaded_file($_FILES["item-image"]["tmp_name"], $nazwaPliku)) {
            header("Location: index.php");
        }
        
    }





?>