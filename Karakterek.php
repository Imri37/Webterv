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
    <ul id="navmenu">
        <li><a
            id="fooldalgomb" href="Fooldal.php">
           <img id="lotus" src="képek/logok/lotus.png" alt="Vissza a főoldalra">
        </a>
        </li>
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
         <header>Karakterek</header>
<section class="karakterek karakteroldal">
    <table>
        <tr id="Aang"><td>Aang <p > <img src="képek/Szereplo%20kepek/Avatar_Aang.png" class="karakterkep" alt="Aang"> </p></td><td>Az utolsó léghajlító, a sorozat jelenlegi avatárja.</td></tr>
        <tr id="Katara"><td>A víz törzsébe tartozó vízidomár, aki testvérével, Sokkával találja meg a jégbe fagyott Aangot.</td><td>Katara <img src="képek/Szereplo%20kepek/avatar-the-last-airbender-katara-in-ice-cave-1024x768.jpg" class="karakterkep" alt="Katara"> </td></tr>
        <tr id="Sokka"><td>Sokka <img src="képek/Szereplo%20kepek/sokka.jpg" class="karakterkep" alt="Sokka"> </td><td>Katara testvére, nem idomár.</td></tr>
        <tr id="Suki"><td>A Kyoshi harcosok, és az Aangot segítő csapat tagja.</td><td>Suki <img src="képek/Szereplo%20kepek/suki.jpg" class="karakterkep" alt="Suki"> </td></tr>
        <tr id="Toph"><td>Toph <img src="képek/Szereplo%20kepek/toph-character-web-desktop.png" class="karakterkep" alt="Toph"> </td><td>Aang földidomár tanára, aki vaksága miatt a földidomítás segítségével lát.</td></tr>
        <tr id="Zuko"><td>Aang (fő) tűzidomár tanára, a tűz birodalmának hercege.</td><td>Zuko <img src="képek/Szereplo%20kepek/250px-Zuko.jpeg" class="karakterkep" alt="Zuko"> </td></tr>
        <tr id="Azula"><td>Azula <img src="képek/Szereplo%20kepek/azula.jpg" class="karakterkep" alt="Azula"> </td><td>Zuko testvére és Ozai lánya. Kegyetlen tűzidomár, aki idővel Ozai nyomdokaiba lép.</td></tr>
        <tr id="Ozai"><td>A tűz birodalmának teljhatalmú uralkodója, Zuko és Azula apja.</td><td>Ozai <img src="képek/Szereplo%20kepek/ozai.jpeg" class="karakterkep" alt="Ozai"> </td></tr>
        <tr id="Roku"><td>Roku avatár <img src="képek/Szereplo%20kepek/roku.jpeg" class="karakterkep" alt="Roku"> </td><td>Aang elődje, a tűz birodalmában született és nőtt fel.</td></tr>
        <tr id="Kyoshi"><td>Roku elődje, a föld királyságában született. A Kyoshi harcosok névadója.</td><td>Kyoshi avatár <img src="képek/Szereplo%20kepek/Kyoshi.jpg" class="karakterkep" alt="Kyoshi"> </td></tr>
        <tr id="Iroh"><td>Iroh <img src="képek/Szereplo%20kepek/Iroh.png" class="karakterkep" alt="Iroh"> </td><td>Ozai testvére és Zuko nagybátyja. A herceg útját egyengeti a sorozat folyamán.</td></tr>
    </table>
</section>
    </div>
<footer id="alsosav">
    <p class="oldal" >Karakterek</p>
    <a id="felgomb" href="#top">Vissza<br>az elejére</a></footer>
</body>
</html>