
<?php
echo '<h1>1. Andmete kuvamine ridade kaupa</h1>';

include('config.php'); //andmebaasi paroolid ja ühendus on teises failis
$paring = 'SELECT * FROM albumid';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
    echo '<strong>Album: '.$rida[1].' - '.$rida[2].'</strong><br>';
    echo 'Aasta: '.$rida[3].'<br>';
    echo 'Žanr: '.$rida[4].'<br><br>';
}

echo '<h1>2. Artisti ja Albumi väljastamine tähestikulises järjekorras</h1>';

$paring2 = 'SELECT album, artist FROM albumid ORDER BY artist ASC';
$valjund2 = mysqli_query($yhendus, $paring2);
while($rida = mysqli_fetch_array($valjund2)){
    echo '<strong>Album: '.$rida[0].'</strong><br>';
    echo 'Artist: '.$rida[1].'<br>';
}

echo '<h1>3. Artisti ja Albumi väljastamine mis on uuemad kui 2010</h1>';

$paring3 = 'SELECT album, artist, aasta FROM albumid WHERE aasta > 2010';
$valjund3 = mysqli_query($yhendus, $paring3);
while($rida = mysqli_fetch_array($valjund3)){
    echo '<strong>Album: '.$rida[0].'</strong><br>';
    echo 'Artist: '.$rida[1].'<br>';
    echo 'Aasta: '.$rida[2].'<br>';
}

echo '<h1>4.Albumite kogus, keskmine hind ning summa </h1>';

$paring4 = 'SELECT COUNT(album), AVG(hind), SUM(hind)  FROM albumid';
$valjund4 = mysqli_query($yhendus, $paring4);
while($rida = mysqli_fetch_array($valjund4)){
    echo '<strong>Albumite arv: '.$rida[0].'</strong><br>';
    echo 'keskmine hind: '.$rida[1].'<br>';
    echo 'summa: '.$rida[2].'<br>';

}

echo '<h1>5. Vanim album</h1>';

$paring5 = 'SELECT album, aasta FROM albumid WHERE MIN(album)';
$valjund5 = mysqli_query($yhendus, $paring5);
while($rida = mysqli_fetch_array($valjund5)){
    echo '<strong>vanim album: '.$rida[0].'</strong><br>';
    echo '<strong>aasta: '.$rida[1].'</strong><br>';
}

echo '<h1>6. keskmisest hinnast suuremad albumid</h1>';

$paring6 = 'SELECT album, hind FROM albumid WHERE hind > AVG(hind)';
$valjund6 = mysqli_query($yhendus, $paring6);
while($rida = mysqli_fetch_array($valjund6)){
    echo '<strong>vanim album: '.$rida[0].'</strong><br>';
}

echo '<h1>7. Otsing</h1>';


if(isset($_POST['submit'])){
    if(!empty($_POST['otsing'])) {
        $selected = $_POST['otsing'];

        $artist = $_POST['artist'];
        $album = $_POST['album'];
        echo 'You have chosen: ' . $selected;

        $paring7 = "SELECT artist, album FROM albumid WHERE artist = '".$artist."' OR album = '".$album."'";
        $valjund7 = mysqli_query($yhendus, $paring7);
        while($rida = mysqli_fetch_array($valjund7)){
            echo '<strong>Artist: '.$rida[0].'</strong><br>';
            echo 'Album: '.$rida[1].'<br>';
        }


    } else {
        echo 'Please select the value.';
    }
}

mysqli_free_result($valjund);
mysqli_close($yhendus);
?>

<form action="" method="post">
    <select name="otsing" id="otsing">
        <option name="artist" value="artist">Artist</option>
        <option name="album" value="album">Album</option>
    </select>
    <label for="">Otsingusõna</label>
    <input type="text">
    <button name="submit" type="submit">Otsi</button>
</form>
