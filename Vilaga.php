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
    <link rel="icon" href="képek/logok/avatar_icon.png">
</head>
<body>

<nav class="flex-container" >
    <ul>
      <li>
        <a id="fooldalgomb" href="Fooldal.php">
            <img id="lotus" src="képek/logok/lotus.png" alt="Főoldal logó">
        </a>
      <li>
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
    <section id="vilaga">
        <table>
            <tr>
                <td>Égi bölény  </td>
                <td><img src="képek/Vilaga/appa.gif" class="karakterkep" alt="Appa"></td>
            </tr>
            <tr>
                <td><img src="képek/Vilaga/duck_turtle.gif" class="karakterkep" alt="Teknőskacsa"> </td>
                <td> Teknőskacsa</td>
            </tr>
            <tr>
                <td>A Föld Királysága </td>
                <td> <img src="képek/Vilaga/earth_kingdom.jpg" class="karakterkep" alt="Earth Kingdom"></td>
            </tr>
            <tr>
                <td><img src="képek/Vilaga/koala_sheep.jpg" class="karakterkep" alt="Koalabárány"></td>
                <td> Koalabárány </td>
            </tr>
            <tr>
                <td>Medvekutya  </td>
                <td><img src="képek/Vilaga/naga.gif" class="karakterkep" alt="Medvekutya"></td></tr>
            <tr>
                <td><img src="képek/Vilaga/pabu.gif" class="karakterkep" alt="Tűzgörény"> </td>
                <td> Tűzgörény</td>
            </tr>
            <tr>
                <td>Köztársaságváros </td>
                <td> <img src="képek/Vilaga/republic_city.jpeg" class="karakterkep" alt="Köztársaságváros"></td
                ></tr>
        </table>
     </section>
</div>
<footer id="alsosav">
    <p class="oldal" >Világa</p>
    <a id="felgomb" href="#top">Vissza<br>az elejére</a>
</footer>
</body>
</html>