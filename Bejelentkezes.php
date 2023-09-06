<?php
include_once "classok/Felhasznalo.php";
include_once  "classok/kozos.php";

session_start();

$fiokok = loadUsers("Users/users.txt");
$hibak = [];

//regisztráció kezelés
if (isset($_POST["registergomb"])) {

    $felhasznalonev = $_POST["username"];
    $jelszo = $_POST["passwd"];
    $jelszo2 = $_POST["passwd2"];
    $eletkor = $_POST["birthday"];
    $email = $_POST["email"];
    $nem = $_POST["nem"];
    $elem = $_POST["elem"];

    //feltétel check
    if (!isset($_POST["username"]) || trim($_POST["username"]) === "")
        $hibak[] = "A felhasználónév megadása kötelező!";

    if (!isset($_POST["passwd"]) || trim($_POST["passwd"]) === "" || !isset($_POST["passwd2"]) || trim($_POST["passwd2"]) === "")
        $hibak[] = "A jelszót kötelező másodjára is megadni!";

    if (!isset($_POST["birthday"]) || trim($_POST["birthday"]) === "")
        $hibak[] = "Az életkor megadása kötelező!";

    if (!isset($_POST["nem"]) || trim($_POST["nem"]) === "")
        $hibak[] = "A nem megadása kötelező!";

    if (!isset($_POST["elem"]) || trim($_POST["elem"]) === "")
        $hibak[] = "Az elem megadása kötelező!";

    if (!isset($_POST["email"]) || trim($_POST["email"]) === "")
        $hibak[] = "Az elem megadása kötelező!";


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
        $fiokok[] = ["username" => $felhasznalonev, "passwd" => $jelszo, "birthday" => $eletkor, "nem" => $nem, "elem" => $elem, "email" => $email];
        saveUsers("Users/users.txt", $fiokok);
        $siker = TRUE;
    } else {
        $siker = FALSE;
    }
}

//login kezelés
if (isset($_POST["login"])) {

    if (!isset($_POST["username"]) || trim($_POST["username"]) === "" || !isset($_POST["passwd"]) || trim($_POST["passwd"]) === "") {

        $hibak[] = "A jelszót kötelező másodjára is megadni!";

    } else {
        $hibak[]="Sikertelen belépés! A belépési adatok nem megfelelők!";
        $felhasznalonev = $_POST["username"];
        $jelszo = $_POST["passwd"];

        foreach ($fiokok as $fiok) {

            if ($fiok["username"] === $felhasznalonev && password_verify($jelszo, $fiok["passwd"])) { // sikeres bejelentkezés
                $siker = TRUE;
                $_SESSION["user"] = $fiok;
                if($fiok["username"]==="admin") {// a "user" nevű munkamenet-változó a bejelentkezett felhasználót reprezentáló tömböt fogja tárolni// a "user" nevű munkamenet-változó a bejelentkezett felhasználót reprezentáló tömböt fogja tárolni
                    header("Location: Admin.php");
                }else{
                    header("Location: Profil.php");
                }// átirányítás az index.php oldalra
            }else{
                $siker = FALSE;
            }
        }
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
            <a id="bejelentkezes" href="Bejelentkezes.php">Bejelenkezes</a>
</nav>
<div id="container">

    <div id="bejelentkezo"><h1>Bejelentkezés/Regisztráció</h1>


        <form method="post" action="Bejelentkezes.php">
        <label>
            <input class="placeholder" type="text" name="username" placeholder="Felhasználónév..." required/>
        </label> <br/><br/>
        <label>
            <input class="placeholder" type="password" name="passwd" placeholder="Jelszó..." required/>
        </label> <br/><br/>
        <input name="login" class="gomb" type="submit" value="Bejelentkezés"/>
        <label>
            <input class="placeholder" type="password" name="passwd2" placeholder="Jelszó mégegyszer..."/>
        </label> <br/><br/>
        <label>
            <input class="placeholder" type="email" name="email" placeholder="Email cím..." />
        </label> <br/><br/>
        <label for="birthday"></label><input class="placeholder" type="date" id="birthday" name="birthday"><br/>
        <label>
            <input type="radio"  name="nem" >
        </label>Férfi
        <label>
            <input type="radio"  name="nem" >
        </label>Nő<br/>
        <label>
            <input type="radio"  name="elem" value="Víz" >
        </label>Víz
        <label>
            <input type="radio"  name="elem" value="Föld" >
        </label>Föld
        <label>
            <input type="radio"  name="elem"  value="Tűz">
        </label>Tűz
        <label>
            <input type="radio"  name="elem" value="Levegő">
        </label>Levegő<br/>
        <label>
            <input type="checkbox"  name="elfogad" >
        </label>Elfogadom a felhasználói feltételeket.<br/>
        <input class="gomb" name="registergomb" type="submit" value="Regisztráció"/>
        <input class="gomb" name="resetgomb" type="reset" value="Ujrakezdés"/>
    </form>
    <img src="képek/Avatar/default_avatar.png" id="avatar" alt="Avatár">
</div>
    <div id="success">
        <?php
        if (isset($siker) && $siker === TRUE) {
            echo "<div class='success'>Sikeres regisztráció!</div>";
        }
        else {
            echo "<div class='errors'></div>";
            foreach ($hibak as $hiba) {
                echo "<p>" . $hiba . "</p>";
            }
        }
        ?>
    </div>
</div>
<footer id="alsosav"><p class="oldal" >Bejelentkezés</p><a id="felgomb" href="#top">Vissza<br>az elejére</a></footer>
</body>
</html>




