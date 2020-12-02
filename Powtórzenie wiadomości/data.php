<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Dane</title>
  </head>
  <body>
    <?php
      if (isset($_POST['btn'])) {
        echo "<h4>Dane członków rodziny:</h4>";
        for($i = 1; $i < count($_POST); $i++){
            $count = 'osoba'.$i;
            echo "Osoba $i: ",ucwords(strtolower(trim("$_POST[$count]")),"-"),"<br /><br />";

        }
      }else if(!empty($_POST['family']) && $_POST['family']>0){

    ?>
      <form method="post">
      <?php

      echo "<h2>Członkowie rodziny:</h2>";

      for($i = 1; $i <= $_POST['family']; $i++ ){
        echo "<input type='text' name='osoba$i' placeholder='osoba$i' /><br /><br />";
      }

      echo "<input type='submit' name='btn' value='Wyślij' />"
      ?>

      </form>
      <?php
        }else{
          header('location: ./');
        }

      ?>
  </body>
</html>
