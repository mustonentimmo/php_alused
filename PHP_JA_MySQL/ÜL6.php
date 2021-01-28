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

<?php

// Import DB connection information
include('config.php');


    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Kontrollime kas kasutajanimi on andmebaasis olemas
        $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $result = mysqli_query($yhendus, $user_check_query);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username) {
                echo 'selline kasutajanimi juba eksisteerib';
            }
        } else {
            //Parooli krüpteerimine
            $salt = '84B03D034B409D4E';
            $crypt = crypt($password, $salt);
            //Kasutaja lisamine andmebaasi
            $register = "INSERT INTO users (username, password) VALUES ('$username', '$crypt')";
            $query = mysqli_query($yhendus, $register);

            if (!$query) {
                echo 'Tekkis viga, kasutajat ei registeeritud!';
            } else {
                echo 'Kasutaja on registeeritud!';
            }
        }

    } else {
        echo 'Palun täitke väljad';
    }


?>

<div class="container">
    <form method="POST">
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="usernameHelp">
            <div id="usernameHelp" class="form-text">We'll never share your information with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
