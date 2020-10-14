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
        border-radius: 10px;
        outline: none;
      }

    </style>
    <?php
      //isset()
      if(!empty($_GET['surname'])){
        $surname = $_GET['surname'];
        echo "Nazwisko: $surname<hr>";
        echo "<br><a href=\"form.php\">Powrót do formularza</a>";
      }
      else{
        echo <<< FORM
          <form method="get">
            <input type="text" name="surname" placeholder="podaj nazwisko">
            <input type="submit" value="Wyślij">
          </form>
        FORM;
      }
    ?>
  </body>
</html>
