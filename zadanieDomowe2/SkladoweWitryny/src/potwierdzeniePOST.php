<?php
  echo $_POST["imie"] . "</br>";
  echo $_REQUEST["nazwisko"] . "</br>";
  echo $_REQUEST["email"] . "</br>";
  echo $_REQUEST["zatwierdz"];

  session_start();
  $_SESSION["nazwisko"] = $_REQUEST["nazwisko"];

?>