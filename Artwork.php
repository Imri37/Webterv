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
    <link rel="icon" href="képek/logok/avatar_icon.png"/>
</head>
<body>

<nav class="flex-container" >
    <ul>
        <li><a id="fooldalgomb" href="Fooldal.php">
            <img id="lotus" src="képek/logok/lotus.png" alt="Főoldal">
        </a></li>
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
<div id="container">
    <section id="Artwork">
        <table >
            <tr><td><img class="artwork" src="képek/Artwork/1.jpg" alt="Első" > </td><td><img class="artwork" src="képek/Artwork/2.jpg" alt="Második"></td><td><img class="artwork" src="képek/Artwork/3.jpg" alt="Harmadik"></td><td><img class="artwork" src="képek/Artwork/4.jpg" alt="Negyedik"></td></tr>
            <tr><td><img class="artwork" src="képek/Artwork/5.jpg" alt="Negyedik"></td><td><img class="artwork" src="képek/Artwork/6.jpg" alt="Hatodik"></td><td><img class="artwork" src="képek/Artwork/7.jpg" alt="Hetedik"></td><td><img class="artwork" src="képek/Artwork/8.jpg" alt="Nyolcadik"></td></tr>
            <tr><td><img class="artwork" src="képek/Artwork/9.png" alt="Kilencedik"></td><td><img class="artwork" src="képek/Artwork/10.png" alt="Tizedik"></td><td><img class="artwork" src="képek/Artwork/11.jpg" alt="Tizenegyedik"></td><td><img class="artwork" src="képek/Artwork/12.png" alt="Tizenkettedik"></td></tr>
        </table>
        </section>
</div>
<footer id="alsosav"><p class="oldal" >Artwork</p><a id="felgomb" href="#top">Vissza<br>az elejére</a></footer>
</body>
</html>