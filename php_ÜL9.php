<h1 style="margin-bottom: 1em; margin-top: 1em">Nime algustähe muutmine</h1>

<form action="">
    <input type="text" name="nimi">
    <button>Muuda</button>
</form>


<?php
/*
     *  ÜLESANNE 9
     *  KUUPÄEV: 12.01.2021
     *  NIMI: TIMMO MUSTONEN
     */

$nimi = $_GET['nimi'];

 echo 'Tere tulemast '. ucfirst(strtolower($nimi));

?>

<h1 style="margin-bottom: 1em; margin-top: 1em">Nime algustähe muutmine</h1>

<form action="">
    <input type="text" name="nimi2">
    <button>Muuda</button>
</form>

<?php


$nimi = $_GET['nimi2'];
$lauseLength = strlen($nimi);

echo $lauseLength;

for($i = 0; $i <= $lauseLength; $i++) {
    echo $nimi[$i];
}

?>

<h1 style="margin-bottom: 1em; margin-top: 1em">Sõna asendamine</h1>

<form action="">
    <input type="text" name="asenda">
    <button>Muuda</button>
</form>

<?php

$tekst = $_GET['asenda'];
$otsi = 'jobu';
$asenda = '****';
echo str_replace($otsi, $asenda, $tekst);

?>

<h1 style="margin-bottom: 1em; margin-top: 1em">Emaili loomine</h1>

<form action="">
    <input type="text" name="eesnimi">
    <input type="text" name="perenimi">
    <button>Muuda</button>
</form>

<?php

$eesnimi = $_GET['eesnimi'];
$perenimi = $_GET['perenimi'];
$email = $eesnimi . $perenimi . '@khk.ee';


str_replace("ä", "a", $email);
str_replace("ü", "u", $email);
str_replace("ö", "o", $email);

echo $email;

?>

