<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Tabela - data</title>
  </head>
  <body>
    <h3>Dane:</h3>
    <?php
    $name = $_GET['imie'];
    $plec = $_GET['plec'];
    $color = $_GET['color'];
    $wybor = $_GET['wybor'];
    $area = $_GET['area'];

    switch ($plec) {
      case 'M':
        $plec = 'Male';
        break;

      case 'F':
        $plec = 'Female';
        break;
    }

    switch ($wybor) {
      case 'fir':
        $wybor = 'Over 6 feet tall';
        break;

      case 'sec':
        $wybor = 'Over 200 pounds';
        break;
    }

    echo <<< DATA
      Name: $name<br>
      Sex: $plec<br>
      Eye color: $color<br>
      Check all that apply: $wybor<br>
      Describe your athletic ability: $area
    DATA
    ?>
  </body>
</html>
