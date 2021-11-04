<?php
$name = $_POST["imie"];

if($_POST['zatwierdz']) {
  $cookie_value = $name;
  setcookie("imie", $cookie_value);
  echo $_COOKIE["imie"];
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>