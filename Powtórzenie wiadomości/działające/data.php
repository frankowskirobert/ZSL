<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_POST['button'])){
      echo "<h4>Dane członnków rodziny: </h4>";

        $x =0;
      for($i=1;$i< count($_POST);$i++){
          $count = 'person'.$i;
          if(!empty($_POST[$count])){
          $x++;
          echo "Osoba $x: ",ucwords(strtolower(trim("$_POST[$count]")), "- "),"<br><br>";
// mb_convert_case(zmienna, MB_CASE_TITLE,"UTF-8")
      }}

    }  elseif(!empty($_POST['family']) && $_POST['family']>0){?>
    <h4>Rodzina: </h4>
    <form method="post">
      <?php

      for($i=1;$i<= $_POST['family'];$i++){
      echo "<input type='text' name='person$i' placeholder='Osoba $i' > <br><br>";
      }

      ?>
      <input type="submit" name="button" value="Wyślij">
    </form>

    <?php }else{
      header('location: ./');
    } ?>
  </body>
</html>
