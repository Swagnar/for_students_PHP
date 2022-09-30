<?php session_start(); ?>
<style>
#header {
    background-color: brown;
    border: 2px solid aqua;
    padding: 20px;
}
#header-username-btn {
    float: left;
}
#header-add-item-btn {
    float: right;
}
#header-logo {
    text-align: center;
}
</style>
<body>
    <div id="header">
        <?php
            if(!isset($_SESSION["username"])) {
        ?>
        <div id="header-login-btn">
            <a href="auth/login.php"> 
                <button>Zaloguj się</button>
            </a>
        </div>
        <?php
            } else {
        ?>
        <div id="header-username-btn">
            Witaj <a href='profile.php'><?php echo $_SESSION["username"]; ?></a>
        </div>
        <div id="header-add-item-btn">
            <a href="add_item.php">
                <button>Dodaj przedmiot</button>
            </a>
        </div>
        <?php
            }
        ?>
        <div id="header-logo">
            super sklep 👍
        </div>
        
        <div id="header-panel-btn">
            <button>Panel</button>
        </div>
    </div>
</body>