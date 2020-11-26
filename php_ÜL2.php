<?php
/*
	Ülesanne 2
    Nimi: My name is Mustonen, Timmo Mustonen
    Kuupäev: 2020.11.26
*/

$esimeneVäärtus = 8;
$teineVäärtus = 2;
$liitmine = $esimeneVäärtus + $teineVäärtus;
$lahutamine = $esimeneVäärtus - $teineVäärtus;
$korrutamine = $esimeneVäärtus * $teineVäärtus;
$jagamine = $esimeneVäärtus / $teineVäärtus;
$jaak = $esimeneVäärtus % $teineVäärtus;

$title = '<h1> Teisendamine </h1>';
$title2 = '<h1> Täisnurkse kolmnurga pindala ja ümbermõõdu arvutamine </h1>';

printf("<br> %d + %d = %d", $esimeneVäärtus, $teineVäärtus, $liitmine);
printf("<br> %d - %d = %d", $esimeneVäärtus, $teineVäärtus, $lahutamine);
printf("<br> %d * %d = %d", $esimeneVäärtus, $teineVäärtus, $korrutamine);
printf("<br> %d / %d = %d", $esimeneVäärtus, $teineVäärtus, $jagamine);
printf("<br> %d %s %d = %d", $esimeneVäärtus, "%",  $teineVäärtus, $jaak);


echo $title;

$mm = 12;
$cm = $mm / 10;
$meeter = $mm / 1000;

printf('sentimeetrites %0.2f , meetrites %0.2f', $cm, $meeter);

echo $title2;

$a = 10;
$b = 15;
$c = 20;

$pindala = $a * $b / 2;
$ümbermõõt = $a + $b + $c;

printf("<br> alus = %d", $a);
printf("<br> kõrgus = %d", $b);
printf("<br> hüpotenuus = %d", $c);
printf("<br> pindala = %d", $pindala);
printf("<br> ümbermõõt = %d", $ümbermõõt);
