<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: Bejelentkezes.php");
}

//logout
session_unset();
session_destroy();
header("Location: Bejelentkezes.php");  // A kijelentkezett felhasználót átirányítjuk a bejelentkezés oldalra.