<?php error_reporting(E_ERROR | E_PARSE);   session_start();

    $server="localhost";
    $user="admin"; // "root";
    $pass="root";  // "";
    $db="blog";

    $conn= new mysqli($server, $user, $pass, $db);
    if($conn->mysqli_connect_errno){
        echo "Błąd" . mysqli_connect_error;
    }
?>