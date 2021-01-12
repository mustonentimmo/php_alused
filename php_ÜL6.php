<h1>Arvud 1-100-ni</h1>

<?php
/*
     *  ÜLESANNE 6
     *  KUUPÄEV: 12.01.2021
     *  NIMI: TIMMO MUSTONEN
     */


$counter = -1;
$numbers = range(1, 100);


foreach ($numbers as $number) {
    $counter++;
    if($counter == 10) {
        echo "<br>\n";
        $counter = 0;
    }
    echo $number.". \n";
}

?>

<h1>Horisontaalne rida</h1>

<?php
    for ($i = 0; $i < 10; $i++) {
        echo "*";
    }
?>

<h1>Vertikaalne rida</h1>

<?php
for ($i = 0; $i < 10; $i++) {
    echo "*";
    echo "<br>\n";
}
?>

<h1>Ruut</h1>

<?php
$counter = -1;
for ($i = 0; $i < 9; $i++) {
    $counter++;
    if($counter == 3) {
        echo "<br>\n";
        $counter = 0;
    }
    echo "   *";
}

?>

<h1>Kahanev jada</h1>

<?php

$numbers = range(10, 1);


foreach ($numbers as $number) {
    echo $number." \n";
    echo "<br>\n";
}
?>

<h1>3-ga jagunevad arvud</h1>

<?php

$numbers = range(1, 100);


foreach ($numbers as $number) {
   if($number % 3 == 0) {
       echo $number." \n";;
   }
}
?>

<h1>Armupaarid</h1>

<?php

$poisid = ["Manivalde", "Lembit", "Sulev"];
$tüdrukud = ["Kendra", "Kertu", "Mary-liis"];



foreach (array_combine($poisid, $tüdrukud) as $poiss => $tüdruk) {
    echo $poiss." and \n".$tüdruk;
    echo "<br>\n";
}
?>


