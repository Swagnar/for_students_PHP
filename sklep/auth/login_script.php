<?php
    require "../db/db_connect.php";

    if($_POST['username'] != "" and $_POST['password'] != "") {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $kwerenda = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
        $kwerenda->bind_param('ss', $username, md5($password));
        
        if($kwerenda->execute()) {
            echo "Zalogowano";
        } else {
            echo "Coś poszło nie tak: " . $conn->error;
        }


    }

?>