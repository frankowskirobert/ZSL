<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>ULUBIONE KOLORY</h2>
    <form method="post">
      <input type="number" name="liczba"><br /><br />
      <input type="submit" name="subm" value="Zatwierdź">
    </form>
    <?php
    function showTab(&$tab){
        echo "<h2>TWOJE KOLORY</h2>";
        $n=1;
        foreach($tab as $value){
          echo 'Kolor ',$n,': ',$value,'<br/><br/>';
          $n++;
        }
    }
    function sortTab(&$tab){
        sort($tab);
      }
    function lowerCase(&$tab){
        foreach ($tab as $key => $value){
          $low = strtolower($value);
          $tab[$key] = $low;
        }
      }
    if(!empty($_POST['subm'])){
      ob_clean();
      $liczba = $_POST['liczba'];
      $_SESSION['liczba'] = $liczba;
      echo <<< FORM
      <form method="post">
      <h2>PODAJ KOLORY</h2>
    FORM;
      for($i = 0; $i < $_SESSION['liczba']; $i++ ){
        echo "<input type='text' name='color$i' /><br /><br />";
      }
      echo <<< FORM
      <input type="submit" name="subm2" value="Zatwierdź" />
      </form>
    FORM;
    }
    if(!empty($_POST['subm2'])){
        ob_clean();
        foreach($_POST as $key => $value){
            if ($key == 'subm2')
                continue;
            $tab[$key] = $value;
        }
        lowerCase($tab);
        sortTab($tab);
        showTab($tab);
    }
    ?>
  </body>
</html>
