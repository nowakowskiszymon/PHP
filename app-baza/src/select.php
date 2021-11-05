<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$databasename = 'phpdb';

$polaczenie = new mysqli($hostname, $username, $password, $databasename);

$kwerendaDoOdczytuDanych = "SELECT * FROM wartosci";

$rezultat = $polaczenie -> query($kwerendaDoOdczytuDanych);

if ($rezultat) {
    while ($wiersz = $rezultat -> fetch_assoc()) {
        echo($wiersz['wartosc'] . "<br>");
    }
}

?>