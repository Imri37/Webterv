<?php
session_start();
$nev=$_SESSION["user"]["username"];
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <link href="css/dizajn.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>Avatár</title>
    <link href='https://fonts.googleapis.com/css?family=Jua' rel='stylesheet'>
    <link rel="icon" href=képek/logok/avatar_icon.png>
</head>
<body>

<nav class="flex-container" >
    <ul id="navmenu">
        <li><a href="Karakterek.php" class="link">Karakterek</a></li>
        <li><a href="Aang_legendaja.php" class="link">Aang legendája</a></li>
        <li><a href="Korra_legendaja.php" class="link">Korra legendája</a></li>
        <li><a href="Vilaga.php" class="link">Világa</a></li>
        <li><a href="Artwork.php" class="link">Artwork</a></li>
    </ul>
        <?php if(isset($_SESSION["user"]) && $nev==="admin"){ ?>
            <a id="bejelentkezes" href="Admin.php" >Profil</a>
        <?php } else if (isset($_SESSION["user"])) { ?>
            <a id="bejelentkezes" href="Profil.php" >Profil</a>
        <?php } else { ?>
            <a id="bejelentkezes" href="Bejelentkezes.php">Bejelenkezes</a>
        <?php } ?>
</nav>
<div>
    <img id="logo" src="képek/logok/Logo2.png" alt="Logó">
</div>
<footer id="alsosav" >
    <p class="oldal" >Főoldal</p>
    <audio controls>
        <source src="zene/main.mp3" type="audio/mpeg"/>
        Avatar Main Theme
    </audio>
</footer>
</body>
</html>