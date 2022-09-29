<?php
    unset($_SESSION["USERNAME"]);
    unset($_SESSION["ID"]);
    header("Location: login.php?logout=true");
    
?>