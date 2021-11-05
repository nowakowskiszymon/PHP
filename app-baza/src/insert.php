<?php

    $wartoscZapytania = $_POST['wartosc'];
    $hostname = '127.0.0.1';
    $username = 'root';
    $password = '';
    $databasename = 'phpdb';

    $polaczenie = new mysqli($hostname, $username, $password, $databasename);

    $kwerendaDoZapisuDanych = "INSERT INTO wartosci (wartosc) VALUE ('" . $wartoscZapytania . "')";

    $rezultat = $polaczenie -> query($kwerendaDoZapisuDanych);

    echo $rezultat;

    header("Location: " . $_SERVER['HTTP_REFERER']);

    
?>