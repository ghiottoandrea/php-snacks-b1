<?php
/*
Con un form passare come parametri GET name, mail e age
Verificare (cercando i metodi che non conosciamo nella documentazione):
    -name sia più lungo di 3 caratteri
    -mail contenga un punto e una chiocciola
    -age sia un numero.
 Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 */

$user_name = $_GET['user_name'];
$user_email = $_GET['user_email'];
$user_age = $_GET['user_age'];

/*
var_dump($user_age);
var_dump($user_email);
var_dump($user_name);
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <form action="" method="get">

        <input type="text" placeholder="Inserisci il nome" name="user_name">
        <input type="text" placeholder="Inserisci la tua email" name="user_email">
        <input type="text" placeholder="Inserisci la tua età" name="user_age">
        <button type="submit">Invia</button>

    </form>

    <?php

    if (strlen($user_name) > 3 && strpos($user_email, '@') !== false && strpos($user_email, '.') !== false && is_numeric($user_age)) {
        echo 'Accesso eseguito';
    } else {
        echo 'Accesso negato';
    }

    ?>
</body>

</html>