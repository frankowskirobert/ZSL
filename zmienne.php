<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php

    $name='Janusz';
    echo 'text<br>';
    echo "Imię: $name<br>";

    // typy danych
    // boolean
    $prawda=true;
    $fałsz=false;

    echo $prawda; //1
    echo $fałsz; //0 nie wyswietli

    // integer

    $całkowita=10;
    $hex=0xA;
    $oct=010;
    $bin=0b1011;

    echo '<hr>' .$hex. '<hr>';

    //składnia heredoc
    $name='Krystyna';
    $surname='Nowak';

    $text =<<< ETYKIETA
    Imię: $name<br>
    Nazwisko: $surname<br>
ETYKIETA;

    echo $text;

    echo <<< E
      Drugi Heredock
E;

//składnia nowdoc

    $city='Poznań';

    echo <<< 'E'
    Miasto: $city;
E;

    echo "<br>Nazwa zmiennej \$city, wartość: $city";




    ?>

  </body>
</html>
