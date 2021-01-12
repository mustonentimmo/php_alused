<h1>Kuupäeva kuvamine</h1>

<?php
/*
     *  ÜLESANNE 8
     *  KUUPÄEV: 12.01.2021
     *  NIMI: TIMMO MUSTONEN
     */

date_default_timezone_set('Europe/Tallinn');

echo date('d.m.Y G:i' , time());

?>

<h1 style="margin-top: 1em; margin-bottom: 1em;">Vanuse arvutamine</h1>

<form>
    <input type="text" name="aasta" placeholder="8/9/2020">
    <button>Arvuta</button>
</form>
<?php
$birthDate = $_GET['aasta'];
$birthDate = explode("/", $birthDate);

$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
echo "Vanus on:" . $age;
?>

<h1 style="margin-top: 1em; margin-bottom: 1em;">Kooliaasta lõpuni</h1>

<?php

$a = new DateTime('now');
$b = new DateTime('2021-06-01');

$diff = $a->diff($b);
echo "Kooliaasta lõpuni on ". $diff->days ." päeva";

?>

<h1 style="margin-top: 1em; margin-bottom: 1em;">Aastaaeg</h1>

<?php
$kuu = date("m");


if(substr($kuu, 0, 1) == 0) {
    $kuu = substr($kuu, 1, 1);
}

if($kuu == 1 || 2 || 12) {
    echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="https://images.unsplash.com/photo-1491002052546-bf38f186af56?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1083&q=80" width="280" height="125" alt="aastaaeg" />

</html>
';
} else if($kuu == 3 || 4 || 5) {
    echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="https://images.unsplash.com/photo-1559855260-33434fd62090?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1055&q=80" width="280" height="125" alt="aastaaeg" />

</html>
';
} else if($kuu == 6 || 7 || 8) {
    echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" width="280" height="125" alt="aastaaeg" />

</html>
';
} else if($kuu == 9 || 10 || 11) {
    echo ' 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="https://images.unsplash.com/photo-1477414348463-c0eb7f1359b6?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" width="280" height="125" alt="aastaaeg" />

</html>
';
}



