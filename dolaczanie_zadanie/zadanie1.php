<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style>
      span{
        text-decoration: underline;
      }
    </style>

    <?php
      echo "<span>Dane Kontaktowe:</span><br>";
      echo "<br>Imię: ";
      include_once './imie.php';

      echo "<br>Nazwisko: ";
      require './nazwisko.php ';
      echo "<hr>"
     ?>
  </body>
</html>
