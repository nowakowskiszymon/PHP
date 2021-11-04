<?php
  $warunki = 'WARUNKI';
  $liczba = 8;
  $liczbaInna = 10;

  echo $warunki . '</br>';
  if ($liczba < 10){
    echo 'True' . '</br>';
  }
  else {
    echo 'False' . '</br>';
  }

  if ($liczbaInna < 10){
    echo 'Mniejsze niz 10' . '</br>';
  }
  else if ($liczbaInna == 10){
    echo 'Równe do 10' . '</br>';
  }
  else{
    echo 'Musi byc wieksze niz 10' . '</br>';
  }

  switch('dziewięć') {
  case 'siedem': echo 'To musi byc siedem!' . '</br>';
    break;
  case 'osiem': echo 'To musi byc osiem!' . '</br>';
    break;
  case 'dziewięć': echo 'To musi byc dziewięć!' . '</br>';
    break;
}
?>