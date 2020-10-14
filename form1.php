<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
  </head>
  <body>
    <style>

      input{
        padding: 5px 5px;
      }

    </style>
    <form method="get">
      <input type="text" name="surname" placeholder="podaj nazwisko">
      <input type="submit" value="Wyślij">
    </form>

    <?php
      //isset()
      if(isset($_GET['surname'])){
        $surname = $_GET['surname'];
        echo "Nazwisko: $surname";
      }
      else{
        echo "OK";
      }
    ?>
  </body>
</html>
