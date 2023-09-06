<?php
include "classok/Felhasznalo.php";
include "classok/kozos.php";

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: Bejelentkezes.php");
}
$nev=$_SESSION["user"]["username"];
$email=$_SESSION["user"]["email"];
$fiokok = loadUsers("Users/users.txt");

if (isset($_POST["mentes"])) {

    $felhasznalonev = $_POST["username"];
    $jelszo = $_POST["passwd"];
    $jelszo2 = $_POST["passwd2"];
    $email = $_POST["email"];

    //foglaltság ellenőrzés
    foreach ($fiokok as $fiok) {
        if ($fiok["username"] === $felhasznalonev)
            $hibak[] = "A felhasználónév már foglalt!";
    }
    foreach ($fiokok as $fiok) {
        if ($fiok["email"] === $email)
            $hibak[] = "Az email cím már foglalt!";
    }

    if ($jelszo !== $jelszo2)
        $hibak[] = "A jelszó és az ellenőrző jelszó nem egyezik!";

    //hibák számolása, ha 0 mentünk
    if (count($hibak) === 0) {
        $jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
        foreach ($fiokok as $fiok) {
            if($fiok===$_SESSION["username"]){
                $felhasznalonev = $_POST["username"];
                $jelszo = $_POST["passwd"];
                $jelszo2 = $_POST["passwd2"];
                $email = $_POST["email"];
                saveUsers("Users/users.txt", $fiokok);
            }
        }
        $siker = TRUE;
    } else {
        $siker = FALSE;
    }
}
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

<nav class="flex-container">
    <ul>
        <li><a id="fooldalgomb" href="Fooldal.php">
                <img id="lotus" src="képek/logok/lotus.png" alt="Vissza a főoldalra">
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
    <div id="bejelentkezo"><h1>Adatok/Adatok megváltoztatása</h1>
        <form method="post" action="Bejelentkezes.php">
             <br/><br/>
            <label>
                <input class="placeholder" type="password" name="passwd" placeholder="Új jelszó..." />
            </label> <br/><br/>
            <label>
                <input class="placeholder" type="password" name="passwd2" placeholder="Új jelszó mégegyszer..."/>
            </label> <br/><br/>
            <label>
                <input class="placeholder" type="email" name="email" placeholder="<?php echo $email; ?>" />
            </label> <br/><br/>
            <input class="gomb" name="mentes" type="submit" value="Mentés"/>
            <a  id="kijelentkezo" href="Kijelentkezes.php">Kijelentkezes</a>
            <label > Nemrég bejelentkezettek:
                <br>
                <?php
                foreach ($fiokok as $fiok){
                    echo $fiok["username"];
                    ?>
                    <br>
                    <?php
                }
                ?>
            </label>
        </form>
        <img id="avatar" src="képek/Avatar/default_avatar.png" width="200" alt="alapértelmezett kép">
    </div>
</div>
<footer id="alsosav"><p class="oldal" >Bejelentkezés</p><a id="felgomb" href="#top">Vissza<br>az elejére</a></footer>

</body>
</html>


