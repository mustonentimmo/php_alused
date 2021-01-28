<?php

// Import DB connection information
include('config.php');

$paring = ' SELECT klient.id, klient.eesnimi, klient.telenr, arve.arvenr, arve.maksumus FROM klient LEFT JOIN arve ON klient.id = arve.klient_id;';
$valjund = mysqli_query($yhendus, $paring);
while($rida = mysqli_fetch_array($valjund)){
    echo '<strong>Klient: '.$rida[0].' - '.$rida[1].'</strong><br>';
    echo 'telefoninumber: '.$rida[2].'<br>';
    echo 'Arvenumber: '.$rida[3].'<br>';
    echo 'Maksumus: '.$rida[4].'<br>';
}

?>