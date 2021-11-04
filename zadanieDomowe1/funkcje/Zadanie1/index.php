<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Funkcje
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    include ('src/funkcje.php');
    pierwszaFunkcja();
    funkcjaZArgumentami('Szymon','Ptak');
    funkcjaZArgumentami('Paweł');
    funkcjaZNieznanaLiczbaArgumentow('cytryny ','kamienie');
    funkcjaZNieznanaLiczbaArgumentow(' jabłka ','drewno');

    $imieDoReferencji = '<br>' . " Andrzej";
    echo $imieDoReferencji . " zmnienione";
    funkcjaZReferencja($imieDoReferencji);
    
  ?>
</div>
  </body>
</html>