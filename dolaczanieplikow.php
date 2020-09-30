<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    Początek strony
    <?php
    echo '<hr />';
      echo '<br>include<br>';
      include './1plik.php'; // wyswirtla dalsza czesc strony pomimo bledu
      include_once './1plik.php'; //powoduje ze plik wiecej razy sie nie otworzy
      echo 'require<br>';
      require './1plik.php'; // powoduje fatal error i nie wyswietla dalszej czesci strony
      require_once './1plik.php';

     ?>
    Koniec strony

  </body>
</html>
