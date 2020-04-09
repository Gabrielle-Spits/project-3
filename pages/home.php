<?php

var_dump($_SESSION);

// unset($_SESSION["id"]);
// unset($_SESSION["rollen"]);
echo session_id();
echo "<hr>";
// session_unset();
// session_destroy();

echo "Mijn gebruikersrol is: " . $_SESSION["rollen"];
echo "<hr>";
echo "Mijn id is: " . $_SESSION["id"];
?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="./img/home.PNG" id="img1" alt="">
        </div>
        <div class="col-6">
            <h1 id="home-titels">Welkomstwoord</h1>
            <div id="inhoud">
                <p>Beste lezers, </p>
                <p>Welkom op deze website! Hier vind je informatie over ADHD, krijg je tips over hoe je met  mensen die adhd hebben kan omgaan, als je zelf adhd hebt hoe je er mee kunt omgaan en hoe je anderen op de hoogte kunt brengen van jou situatie. Ook kun je je aanmelden voor deze website waardoor de informatie relevanter wordt afhankelijk van jouw situatie. Ook hebben we een leerzame game.</p>
                <p>Nu verwijzen we je graag verder naar de andere pagina’s.</p>
                <p>Veel plezier!</p>
            </div>
            <!-- hier onder kun je naar de pagina informatie-->
            <div>
            <p>voor de pagina informatie:</p>
            <a href="./index.php?content=informatie" class="btn btn-secondary" id="button">Informatie hier!</a>
            <p>voor de pagina tips</p>
            <a href="./index.php?content=tips" class="btn btn-secondary" id="button">tips!</a>

            </div>
        </div>
    </div>
</div>