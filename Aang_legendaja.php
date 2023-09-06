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
    <video controls autoplay >
        <source src="videok/The%20Last%20Airbender%20Animated%20Trailer.mp4" type="video/mp4">
    </video>
    <header>Avatár Aang legendája sorozat története</header>
    <h2 class="alcim" id="Elozmenyek">Előzmények</h2>

        <section class="karakterek karakteroldal">
            <p> <img src="képek/Aang%20legendaja/elozmenyek.jpg" class="kepek" alt="A 100 éves háború előtt"> </p>
            <p>Több mint egy évszázaddal, a sorozat eseményei előtt, Sozin, a Tűz Ura háborút tervezett, hogy bővítse a nemzetét,
                valamint annak területét és befolyását. A Tűz Nemzetében született, Roku Avatár, azonban megakadályozta a viaskodást.
                Halála után, az új Avatár, egy Aang nevű Légidomárként reinkarnálódott.
                Mivel még gyermek volt, a Tűz Ura újra fontolgatni kezdte a harci terveit.
                Tizenkét éves korában, Sozin fenyegetése miatt, Aang megtudta hogy ő az Avatár.
                Megrettenve a kötelességeitől, és hogy elszakítják mentorától, Gyatsótól, repülőbölényével Appával, megszökött.
                A viharos időben, az óceánba zuhantak, és belépve az Avatár állapotba, Aang befagyasztotta magát és segédállatát.
                Sozin tudta, hogy az új Avatár, Légidomárként született, ezért kiírtotta a népet, és folytatta gazságait.</p>
        </section>
  <h2 class="alcim" id="Elso">1. Évad: Víz</h2>
        <section class="karakterek karakteroldal">

                <p> <img src="képek/Aang%20legendaja/viz.png" class="kepek" alt="Első könyv: Víz"> </p>
                <p>Száz évvel később, a Tűz Népe, még mindig folytatja a háborút a többi nemzettel szemben. Katara, a Déli Víz Törzsének
                    utolsó Vízidomára, és bátyja, Sokka, megtalálja és feléleszti Aangot, és Appát. A fiú megtudja hogy dúl a háború, a
                    testvérek pedig úgy döntenek, csatlakoznak hozzá, hogy elmenjenek az Északi Víz Törzsébe, azért mert Aangnak és Katarának
                    Vízidomítást kell tanulniuk. Az Avatár visszatéréséről, a Tűz Urának, Ozainak, a száműzött fia, Zuko herceg, Iroh nagybátyjával
                    együtt, tudomást szerez. Csak akkor térhet haza a birodalomba, ha elfogja az Avatárt, azzal visszaállítja a becsületét. Zhao, a
                    Tűz Népének admirálisa is követi a herceget, remélve hogy az elfogja Aangot, és ő learathatja a babérokat. Az Északi Sark felé
                    tartva, Aang megtudja, hogy a Levegőidomárokat megölték, amikor a Déli Levegő Templom romjait látogatják meg. A téli napforduló
                    alatt, találkozik elődje, Roku szellemével, és elfogadja a felelősségét. Északra érkezve, Katara és Aang megtanulja a fejlett
                    vízidomítást Pakku mestertől, Sokka pedig beleszeret a törzsfőnök lányába, Yue hercegnőbe. Zhao elkezdi ostromát Észak ellen,
                    és az óceán valamint a hold szellemének halandó formáját is foglyul ejti. Miután végzett a holdszellemmel, a Vízidomárok megfosztatnak
                    képességeiktől. Aang azonban az óceán szellemének segítségével, letarolja az ellenséges flottát, eközben Yue hercegnő életét áldozza
                    a holdszellem újjáélesztésére. Amikor Ozai meghallja Iroh ellenállását az ostromban odaveszett Zhaoval szemben, lányát, Azulát küldi érte és Zukoért.</p>
        </section>
        <h2 class="alcim" id="Masodik">2. Évad: Föld</h2>
        <section class="karakterek karakteroldal">

                <p> <img src="képek/Aang%20legendaja/fold.png" class="kepek" alt="Második könyv: Föld"> </p>
                <p>Az Északi Víz Törzséből való távozás után, Katara folytatja Aang tanítását, miközben a csapat egy Földidomár tanárt keres.
                    Találkoznak egy cserfes kislánnyal, Toph Beifonggal, a vak bandita néven ismert, földidomárral. A lány függetlenséget akar,
                    felsőbbrendű családjától, ezért elszökik, hogy Aangot tanítsa. Az Azula által üldözött, Zuko és Iroh új életet kezdett a
                    Föld Királyságának városában, Ba Sing-Se-be telepedve, menekültekként. A Wan Shi Tong nevű bagolyszellem által őrzött könyvtárban,
                    Aang és a többiek megtudják, hogy a küszöbön álló napfogyatkozás miatt, Sozin üstököse előtt, legyőzhetik a tűz urát. Az üstökös
                    ugyanis, bámulatos és veszélyes erővel ruházhatja fel, a háborús népet. A csapat, Ba Sing Se felé utazik, hogy tájékoztassák a
                    Föld Királyát az információról. Azonban a városban, egy manipulált királyt találnak, akit a tanácsosa, Long Feng és emberei, a
                    Dai Li irányít. Aangék leleplezik a zsarnok tanácsadót. Eközben elrabolják Toph-ot, hogy hazavigyék, de az megmenekül a fémhajlítás
                    megtanulásával. A Dai Li, Long Fenget elárulva csatlakozik Azulához, és beveszik a várost. Zuko elárulja nagybátyját, és húga mellé
                    áll. Az ókori város alatti katakombákban való szembeszállás során, Azula majdnem megölte Aangot, arra kényszerítve őket, hogy hagyják el, a Tűz Népe által megszállt Ba Sing Se-t.</p>

        </section>
            <h2 class="alcim" id="Harmadik">3. Évad: Tűz</h2>
        <section class="karakterek karakteroldal">

                <p > <img src="képek/Aang%20legendaja/tuz.png" class="kepek" alt="Harmadik könyv: Tűz"> </p>
                <p>A kómából felébredt Aang megtudja, hogy barátai és szövetségesei arra készülnek, hogy napfogyatkozás idején bejussanak a Tűz Népének fővárosába.
                    Az invázió eleinte sikeres, de nem találják meg Ozai-t, és visszavonulásra kényszerülnek.
                    Zuko tudomást szerez apja azon szándékáról, hogy Sozin üstökösének erejével elpusztítja a Föld Királyságát, ezért régi döntését megbánva, elhagyja a Tűz Népét,
                    hogy csatlakozzon az Avatárhoz és megtanítsa neki a tűzidomítást. Aang azonban viaskodik magában, mert nem akarja megölni a Tűz Urát, még a háború érdekében sem
                    . Konzultál elődjei szellemével, eközben Katara és a többiek találkoznak Iroh-val, aki a Fehér Lótusz Rendjének nevezett titkos társaságot vezeti. Felszabadítják
                    Ba Sing Se-t. Miközben, Sokka, Toph és Suki megtámadják a Tűz Népének léghajóit, Zuko és Katara szembeszállnak Azulával, hogy megakadályozzák hogy ő váljon az új
                    uralkodóvá. Az üstökös megérkezésekor, Aang megküzd Ozai-al, és belépve az Avatár állapotba, megfosztja a Tűz idomítástól. Zukot megkoronázzák az új Tűz Urának,
                    és Aanggal együtt bejelentik, hogy a háborúnak vége, ezzel békét teremtve a világban.</p>
        </section>

   </div>
<footer id="alsosav">
    <p class="oldal" >Aang Legendája</p>
    <a id="felgomb" href="#top">Vissza<br>az elejére</a></footer>
</body>
</html>