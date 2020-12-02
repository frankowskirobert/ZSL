<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Data i Czas</title>
  </head>
  <body>
    <style>
      input{
        margin: 10px 0;
      }
    </style>

    <h2>Data i czas</h2>
    <form method="get">
      <input type="date" name="data" value="<?php $date = date('Y-m-d'); echo $date; ?>"><br>
      <input type="time" name="czas" value="<?php $time = date('G:i'); echo $time; ?>"><br>
      <input type="text" name="dzien" value="<?php require_once('data_czas_functions.php'); weekDays();  ?>" size="9"><br>
      <input type="text" name="final" value="<?php require_once('data_czas_functions.php'); setlocale(LC_ALL, 'pl'); echo strftime("%g "); monthName(); echo strftime (" %Y, %T | "); weekDays(); ?>" size="37"><br>
      <?php
        require_once('data_czas_functions.php');

        $info = getdate();
        $weeknr = round((($info['yday'])/7),0);

        echo "<ul>";
        echo "<li>Ilość dni w roku: ".numberDays()."</li>";
        echo "<li>Dzień roku: ",$info['yday']+1,"</li>";
        echo "<li>Numer tygodnia roku: ",$weeknr,"</li>";
        echo "<li>Ilość dni do końca roku: ".toEndYear()."</li>";
        echo "</ul>";
      ?>
    </form>
  </body>
</html>
