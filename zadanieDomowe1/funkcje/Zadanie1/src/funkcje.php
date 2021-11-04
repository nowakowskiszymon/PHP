<?php
  function pierwszaFunkcja(){
    echo 'Wiadomosc z pierwszej funkcji' . '</br>';
  }

  function funkcjaZArgumentami($imie, $nazwisko = 'Nowak'){
    echo 'Hello, ' . $imie . ' ' . $nazwisko . '</br>';
  }


  function funkcjaZNieznanaLiczbaArgumentow() {
     $val = "";
    $count = func_num_args();
    $tab = func_get_args();
    for($i = 0; $i < $count; $i++){
      echo '<br>' .'arg ' . ($i+1) . ':' . $tab[$i] . " ";
    }
  }

  function funkcjaZReferencja (&$imie) {
    $imie = "Jan";
  }


?>