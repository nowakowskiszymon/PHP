<?php
  #zadanie2
  $tekst = "Programowanie w PHP";
  echo (strlen($tekst) . "</br>");

  $zleSformatowyTekst = "Programowanie w PhP";
  echo (strtolower($zleSformatowyTekst) . "</br>");
  echo (strtoupper($zleSformatowyTekst) . "</br>");

  $krotkiTekst = "kasztan ";
  echo (str_repeat($krotkiTekst, 5) . "</br>");

  $innyTekst = "dziobak ";
  echo (str_repeat($innyTekst, 15) . "</br>");


  #zadanie3
  $tekstDoOdworcenia = "tekst";
  echo (strrev($tekstDoOdworcenia) . "</br>");

  $tekstDoMieszania = "Tekst do pomieszania";
  echo (str_shuffle($tekstDoMieszania) . "</br>");

  $tekstDoWybrania = "Pierwsza czesc, druga czesc";
  echo (substr($tekstDoWybrania,16,20) . "</br>");

  #zadanie4
  $tekstDoZamiany = "cytryna";
  echo ($tekstDoZamiany . "</br>");
  echo (str_replace($tekstDoZamiany,"kiwi",$tekstDoZamiany) . "</br>");

  echo wordwrap($tekstDoMieszania,3,"</br>");

?>