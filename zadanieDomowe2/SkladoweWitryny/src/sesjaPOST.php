<?php
  $lastName = $_POST['nazwisko'];

  if($_POST['zatwierdz']) {
    $_SESSION["nazwisko"] = $lastName;
}
  session_start();
  
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>