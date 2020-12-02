<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Ostrosłup</title>
  </head>
  <body>

    <style>
      .all{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }

      a{
        text-decoration: none;
        color: #2af;
        border-bottom: 1px solid #2af;
      }

      h2{
        text-transform: capitalize;
      }

      img{
        padding: 5px 0 10px;
        border-bottom: 1px solid #000;
      }

      input{
        margin: 10px 0;
      }
    </style>

    <div class="all">
      <a href="../3_zadanie_formularze_geometria.php">Powrót do strony</a>
      <h2>ostrosłup</h2>
      <img src="../images/ostro.png">
      <h2>dane</h2>
      <form method="GET" class="all">
        <input type="number" name="a" placeholder="a" value="<?php if(isset($_GET['a'])) echo $_GET['a']; ?>"><br />
        <input type="number" name="h" placeholder="h" value="<?php if(isset($_GET['h'])) echo $_GET['h']; ?>"><br />
        <input type="number" name="H" placeholder="H" value="<?php if(isset($_GET['H'])) echo $_GET['H']; ?>"><br />
        <input type="submit" value="Oblicz"><br />

        <?php
        if(isset($_GET['a'], $_GET['h'], $_GET['H'])){
          if(($_GET['a'] == '' || $_GET['h'] == '' || $_GET['H'] == '') || (!is_numeric($_GET['a']) || (!is_numeric($_GET['h']) || (!is_numeric($_GET['H']))))){
            echo "<h3>Dane podane w formularzu muszą być liczbami!</h3>";
          }
          else if($_GET['a'] <= 0 || $_GET['h'] <= 0 || $_GET['H'] <= 0){
            echo "<h3>Dane podane w formularzu muszą być liczbami dodatnimi!</h3>";
          }
          else{
            require_once('functions.php');

            echo '<ul>';
            echo '<li>Pole powierzchni: '.pp_ostroslup($a, $h).'cm<sup>2</sup></li>';
            echo '<li>Objętość: '.objetosc_ostroslup($a, $H).'cm<sup>3</sup></li>';
            echo '</ul>';
          }
        }
        else {
          echo " ";
        }
        ?>
      </form>
    </div>
  </body>
</html>
