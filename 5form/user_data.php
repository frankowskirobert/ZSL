<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Form - dane</title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <?php
      // print_r($_GET); Array ( [login] => Jan [password] => Bohatyrowicz )
      // echo '<pre>',print_r($_GET),'</pre>';
      $pass = $_GET['password']; // 1sposób
      $color = $_GET['color'];

      switch ($color) {
        case 'r':
          $color = 'czerwony';
          break;

        case 'g':
          $color = 'zielony';
          break;

        case 'b':
          $color = 'niebieski';
          break;
      }

      echo <<< DATA
        2sposób -> Login: $_GET[login], hasło: $pass<br>
        3sposób -> Login: {$_GET['login']}<br>
        Kolor: $color
      DATA
    ?>
  </body>
</html>
