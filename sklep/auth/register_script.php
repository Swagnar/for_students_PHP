<?php
    require '../db/db_connect.php';

    $rola = 3;
    $kwerenda = $conn->prepare("INSERT INTO users(username, password, email, role) VALUES(?, ?, ?, ?)");

    $kwerenda->bind_param('sssd', $_POST['username'], md5($_POST['password']), $_POST['email'], $rola);

    if($kwerenda->execute()) {
        echo "Dodano";
    } else {
        echo "Błąd: " . $conn->error;
    }


?>