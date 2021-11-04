<?php
  #zadanie2
  $tablica = [
    "pierwszy", 
    "drugi", 
    "czwarty"
  ];

  echo ($tablica[2] . "</br>");

  foreach ($tablica as $klucz){
    echo ("$klucz </br>");
  }

  print_r($tablica); 

  echo  "</br>" . count($tablica);

  #zadanie3
  $nowaTablica = [
    "wartość",
    "innaWartość"
  ];

  echo "</br>" . $nowaTablica[1];

  $nowaTablica[1] = "nowaWartość";
  echo "</br>" . $nowaTablica[1] . "</br>";

  print_r(array_reverse($nowaTablica));


  #zadanie4
  function sprawdzCzyJest($wartoscSzukana, $tablica) {
    if (array_key_exists($wartoscSzukana, $tablica)) {
      echo "</br> jest";
    }
    else {
      echo "</br> nie ma";
    }
  };

  sprawdzCzyJest("2",$tablica);
  sprawdzCzyJest("4",$tablica);

  #zadanie5
  $imiona = [
    'Jan',
    'Monika', 
    'Dominik', 
    'Patryk'
  ];

  echo "</br>";  
  natcasesort($imiona);
  print_r($imiona);

  echo "</br>";  
  $tablicaLiczbowa = [
    1, 
    2, 
    4, 
    9, 
    8, 
    7, 
    6
  ];

  rsort($tablicaLiczbowa);
  print_r($tablicaLiczbowa);
  echo "</br>";  
  shuffle($tablicaLiczbowa);
  print_r($tablicaLiczbowa);

  #zadanie6
  $owoce = [
    'a' => 'ananas', 
    'b' => 'banan', 
    'c' => 'cytryna'
  ];

  $warzywa = [
    'm' => 'marchew', 
    'z' => 'ziemniak'
  ];

  $polaczone = array_merge($owoce, $warzywa);
  echo "</br>"; 
  print_r($polaczone);

  $male = [
    'wszytkie', 
    'te', 
    'slowa', 
    'sa', 
    'wielkimi', 
    'literami'
  ];

  $duze = array_map('strtoupper', $male);
  echo "</br>"; 
  print_r($duze);
?>