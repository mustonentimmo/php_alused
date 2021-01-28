<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<?php include('config.php'); ?>
<?php
if (!empty($_GET['artist']) && !empty($_GET['album']) && !empty($_GET['aasta']) &&  !empty($_GET['hind']) ) {
    $artist = htmlspecialchars(trim($_GET['artist']));
    $album = htmlspecialchars(trim($_GET['album']));
    $aasta = htmlspecialchars(trim($_GET['aasta']));
    $hind = htmlspecialchars(trim($_GET['hind']));
    //päring
    $paring = "INSERT INTO albumid(artist,album,aasta,hind) VALUES ('".$artist."','".$album."','".$aasta."','".$hind."')";
    $valjund = mysqli_query($yhendus, $paring);
    //päringu vastuste arv
    $tulemus = mysqli_affected_rows($yhendus);
    if ($tulemus == 1) {
        echo "Artist on lisatud";
    } else {
        echo "Tekkis viga! Artisti ei lisatud";
    }
    //ühenduse sulgemine
    mysqli_close($yhendus);
}
?>

<h2>Albumi lisamine</h2>
<form action="" method="get">
    <table>
        <tr><td>Artist: </td><td><input type="text" name="artist" required></td></tr>
        <tr><td>Album:</td><td> <input type="text" name="album" required></td></tr>
        <tr><td>Aasta: </td><td><input type="number" name="aasta" value="2000" min="1900" max="2099" required></td></tr>
        <tr><td>Hind: </td><td><input type="number" name="hind" value="1" min="1" max="100" step="0.1" required></td></tr>
        <tr><td><input type="reset" value="Tühjenda"></td><td><input type="submit" value="LISA ALBUM"></td></tr>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</form>
</body>
</html>