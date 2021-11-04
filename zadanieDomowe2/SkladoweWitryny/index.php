<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Składowe witryny</title>
</head>
<body>
   <form method="GET" action="src/potwierdzenieGET.php">
    <div>
      metoda GET
    </div>
    <div>
        <label for="imie">Imie</label>
        <input name="imie">
    </div>
    <div>
        <label for="nazwisko">Nazwisko</label>
        <input name="nazwisko">
    </div>
    <div>
        <label for="email">Email</label>
        <input name="email">
    </div>
    <button type="submit" name="zatwierdz" value="zatwierdzenie">
        Wyslij
    </button>
</form>

      <form method="POST" action="src/potwierdzeniePOST.php">
    <div>
      metoda POST
    </div>
    <div>
        <label for="imie">Imie</label>
        <input name="imie">
    </div>
    <div>
        <label for="nazwisko">Nazwisko</label>
        <input name="nazwisko">
    </div>
    <div>
        <label for="email">Email</label>
        <input name="email">
    </div>
    <button type="submit" name="zatwierdz" value="zatwierdzenie">
        Wyslij
    </button>
</form><div>

          <form method="POST" action="src/ciasteczkoPOST.php">
    <div>
      Ciasteczko
    </div>
    <div>
        <label for="imie">Imie</label>
        <input name="imie">
    </div>
    <button type="submit" name="zatwierdz" value="zatwierdz">
        Wyslij
    </button>
        <?php
        include 'src/ciasteczko.php';
        ?>
</div>
</form>
     <form method="POST" action="src/sesjaPOST.php">
    <div>
      Sesja
    </div>
    <div>
        <label for="nazwisko">Nazwisko</label>
        <input name="nazwisko">
    </div>
    <button type="submit" name="zatwierdz" value="zatwierdz">
        Wyslij
    </button>
        <?php
        include 'src/sesja.php';
    ?>
</div>
</div>
</form>
</body>
</html>