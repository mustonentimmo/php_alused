

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<h1 style="margin-top: 1em">Tervitus</h1>

<?php
/*
     *  ÜLESANNE 7
     *  KUUPÄEV: 12.01.2021
     *  NIMI: TIMMO MUSTONEN
     */

function tervita(){
    return "Tere tulemast ÜL7 lehele";
}

echo tervita();

?>

<h1 style="margin-top: 1em">Bootstrap uudiskiri</h1>
<?php




function vorm(){
    $dom = new DOMDocument('1.0', 'utf-8');

    $email_label = $dom->createElement('label', 'Email:');
    $email_input = $dom->createElement('input');
    $nimi_label = $dom->createElement('label', 'Nimi:');
    $nimi_input = $dom->createElement('input');
    $button = $dom->createElement('button', 'Kinnita');


// We insert the new element as root (child of the document)
    $dom->appendChild($email_label);
    $dom->appendChild($email_input);
    echo "<br>\n";
    $dom->appendChild($nimi_label);
    $dom->appendChild($nimi_input);
    $dom->appendChild($button);

    echo $dom->saveXML();
}

echo vorm();

?>

<h1 style="margin-top: 1em">Kasutajanimi ja email</h1>

<form>
    <label for="kasutajanimi">Kasutajanimi</label>
    <input type="text" name="nimi">
    <label for="email">Email</label>
    <input type="text" name="email">
    <button class="btn btn-success">Muuda</button>
</form>

<?php
$nimi = $_GET['nimi'];
$email = $_GET['email'];
$email = $email . '@khk.ee';
$nimi = strtolower($nimi);
printf("Nimi väikeste tähtedega: ");
echo $nimi;
echo "<br>\n";
printf("Email: ");
echo $email;

//Genereeri 7-kohaline kood

$uniqid = uniqid();

$rand_start = rand(1,5);

$char = substr($uniqid,$rand_start,7);

echo "<br>\n";
printf("Kood: ");
$length = 7;
echo substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

?>


<h1 style="margin-top: 1em">Arvud</h1>

<form>
    <label for="">esimene väärtus</label>
    <input type="text" name="esimene_vaartus">
    <label for="">teine väärtus</label>
    <input type="text" name="teine_vaartus">
    <button class="btn btn-success">Arvu jada</button>
</form>

<?php
    $first = $_GET['esimene_vaartus'];
    $second = $_GET['teine_vaartus'];
    function jada($first, $second) {
        $numbers = range($first, $second);
        foreach ($numbers as $number) {
            echo $number.". \n";
        }
    }
    printf("jada: ");
    echo jada($first, $second);
?>

<h1 style="margin-top: 1em">Ristküliku pindala</h1>

<form>
    <label for="">esimene külg</label>
    <input type="text" name="kulga">
    <label for="">teine külg</label>
    <input type="text" name="kulgb">
    <button class="btn btn-success">Arvu jada</button>
</form>

<?php
    $kulga = $_GET['kulga'];
    $kulgb = $_GET['kulgb'];

    $pindala = $kulga * $kulgb;

    printf("Pindala: ");
    echo $pindala;
?>

<h1 style="margin-top: 1em">Isikukood</h1>

<form>
    <label for="">Isikukood</label>
    <input type="text" name="isikukood">
    <button class="btn btn-success">Kontrolli</button>
</form>

<?php
$isikukood = $_GET['isikukood'];
$length = strlen($isikukood);

if($length < 11) {
    echo 'isikukood ei ole õige pikkusega!';
} else {
    $aasta = 2021;
    $synniaasta = substr($isikukood, 1,2);
    $convert = 19 .$synniaasta;
    $sugu = substr($isikukood, 0, 1);

    if($sugu % 2 == 0) {
        printf("Sugu: ");
        echo ' Naine';
        echo "<br>\n";
        printf("vanus: ");
        echo $aasta - $convert;
    } else {
        printf("sugu: ");
        echo ' Mees';
        echo "<br>\n";
        printf("vanus: ");
        echo $aasta - $convert;
    }
}
?>

<h1 style="margin-top: 1em">Lause moodustamine</h1>

<?php
 $alus = ["Martin Helme", "Mart Helme", "Jüri Ratas", "Tanel Kiik", "Mailis Reps"];
 $öeldis = [" läheb", " tantsib", " kardab", " nutab"];
 $sihitis = [" patja", " karu", " tangot", " tööle"] ;

 echo $alus[array_rand($alus)].  $öeldis[array_rand($öeldis)]. $sihitis[array_rand($sihitis)];
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


