<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
    error_reporting(!E_ALL);
// Jagamine
$esimeneVäärtus = $_POST['esimeneVäärtus'];
$teineVäärtus = $_POST['teineVäärtus'];


if(isset($_POST['submit'])) {
    // Check if name has been entered
    if(empty($_POST['esimeneVäärtus'])) {
        $err = 'Sisestage muu väärtus peale 0';
        $jagamine = "vale väärtus";
    }
    // Check if email has been entered and is valid
    else if($_POST['teineVäärtus'] == 0 || empty($_POST['teineVäärtus'])) {
        $err = 'Sisestage muu väärtus peale 0';
        $jagamine = "vale väärtus";
    }
    else {
        $jagamine = $esimeneVäärtus / $teineVäärtus;
    }
}

?>
<div class="container">
    <h1 class="mt-5 mb-3">Jagamine</h1>
    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Esimene väärtus</label>
            <div class="col-sm-10">
                <input class="form-control" id="esimeneVäärtus" name="esimeneVäärtus" placeholder="Esimene väärtus" required>
                <?php echo $err; ?>
            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Teine väärtus</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="teineVäärtus" name="teineVäärtus" placeholder="Teine väärtus" required>
                <?php echo $err; ?>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Jaga!" name="submit" class="btn btn-primary"/>
            </div>
        </div>

        <?php printf("<br> <h3>Vastus on: %d </h3> ", $jagamine); ?>
    </form>

    <?php
        error_reporting(!E_ALL);
        // Vanuse võrdlemine

        $esimeneVanus = $_POST['esimeneVanus'];
        $teineVanus = $_POST['teineVanus'];
        $võrdlemine = "";

    if(isset($_POST['võrdle'])) {

        if ($esimeneVanus > $teineVanus) {
            $võrdlemine = 'Esimene vanus on suurem';
        } else if ($esimeneVanus < $teineVanus){
            $võrdlemine = 'Teine vanus on suurem';
        } else {
            $võrdlemine = "Mõlemad on sama vanad";
        }
    }

    ?>


    <h1 class="mt-5 mb-3">Vanuste võrdlemine</h1>

    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Esimene vanus</label>
            <div class="col-sm-10">
                <input class="form-control" id="esimeneVanus" name="esimeneVanus" placeholder="Esimene vanus" required>

            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Teine vanus</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="teineVanus" name="teineVanus" placeholder="Teine vanus" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Võrdle!" name="võrdle" class="btn btn-primary"/>
            </div>
        </div>

        <?php echo $võrdlemine; ?>
    </form>


    <?php
    error_reporting(!E_ALL);

    // RUUT või RISTKÜLIK

    $esimeneKülg = $_POST['esimenekülg'];
    $teineKülg = $_POST['teinekülg'];
    $kontrolli = "";

    if(isset($_POST['kontrolli'])) {

        if ($esimeneKülg == $teineKülg) {
            $kontrolli = 'Tegemist on ruuduga';
            $kujund = "<div style='width: 100px; height: 100px; border: solid 1px black;margin: 5em;'></div>";
        } else {
            $kontrolli = "Tegemist on ristkülikuga";
            $kujund = "<div style='width: 200px; height: 100px; border: solid 1px black;margin: 5em;'></div>";
        }
    }

    ?>

    <h1 class="mt-5 mb-3">RUUT või RISTKÜLIK</h1>

    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">üks külg</label>
            <div class="col-sm-10">
                <input class="form-control" name="esimenekülg" placeholder="Esimene külg" required>

            </div>
        </div>
        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Teine külg</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="teinekülg" placeholder="Teine külg" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Kontrolli" name="kontrolli" class="btn btn-primary"/>
            </div>
        </div>

        <?php echo $kontrolli?>
        <?php echo $kujund?>

    </form>

    <?php
    error_reporting(!E_ALL);

    // Juubeliaasta

    $aasta = 2020;
    $sünniaasta = $_POST['sünniaasta'];
    $aasta = "";

    if(isset($_POST['juubeliaasta?'])) {
        $x = $aasta - $sünniaasta;

        if ($x % 10 == 5 || $x % 10 == 0) {
            $aasta = 'Tegemist on juubeliaastaga';

        } else {
            $aasta = "Tegemist ei ole juubeliaastaga";
        }
    }

    ?>

    <h1 class="mt-5 mb-3">Kas on Teie juubeliaasta?</h1>

    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Sünniaasta</label>
            <div class="col-sm-10">
                <input class="form-control" name="sünniaasta" placeholder="Sünniaasta" required>

            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="juubeliaasta?" name="juubeliaasta?" class="btn btn-primary"/>
            </div>
        </div>
            <?php echo $aasta?>
    </form>

    <?php
    error_reporting(!E_ALL);

    // Juubeliaasta


    $punktid = $_POST['punktid'];
    $kuvaTulemus = "";
    if(isset($_POST['tulemus'])) {
        switch ($punktid) {
            case ($punktid < 5):
                $kuvaTulemus = "Kasin!";
                break;
            case ($punktid >= 5 && $punktid <= 9):
                $kuvaTulemus = "Tehtud!";
                break;
            case ($punktid > 10):
                $kuvaTulemus = "Super!";
                break;
        }
    }
    ?>

    <h1 class="mt-5 mb-3">Hinne</h1>

    <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Punktide arv</label>
            <div class="col-sm-10">
                <input class="form-control" name="punktid" placeholder="Punktide arv" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="tulemus" name="tulemus" class="btn btn-primary"/>
            </div>
        </div>
        <?php echo $kuvaTulemus?>
    </form>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

