<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Prostopadłościan</title>
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
      <h2>prostopadłościan</h2>
      <img src="../images/prosto.png">
      <h2>dane</h2>
      <form method="GET" class="all">
        <input type="number" name="a" placeholder="a" value="<?php if(isset($_GET['a'])) echo $_GET['a']; ?>"><br />
        <input type="number" name="b" placeholder="b" value="<?php if(isset($_GET['b'])) echo $_GET['b']; ?>"><br />
        <input type="number" name="c" placeholder="c" value="<?php if(isset($_GET['c'])) echo $_GET['c']; ?>"><br />
        <input type="submit" value="Oblicz"><br />

        <?php
        if(isset($_GET['a'], $_GET['b'], $_GET['c'])){
          if(($_GET['a'] == '' || $_GET['b'] == '' || $_GET['c'] == '' ) || (!is_numeric($_GET['a']) || (!is_numeric($_GET['b'])) || (!is_numeric($_GET['c'])))){
            echo "<h3>Dane podane w formularzu muszą być liczbami!</h3>";
          }
          else if($_GET['a'] <= 0 || $_GET['b'] <= 0 || $_GET['c'] <= 0){
            echo "<h3>Dane podane w formularzu muszą być liczbami dodatnimi!</h3>";
          }
          else{
            require_once('functions.php');

            echo '<ul>';
            echo '<li>Pole: '.pole_prostopadloscianu($a, $b, $c).'cm<sup>2</sup></li>';
            echo '<li>Objętość: '.objetosc_prostopadloscianu($a, $b, $c).'cm<sup>3</sup></li>';
            echo '<li>Długość przekątnej: '.dlugosc_przekatnejprosto($a, $b, $c).'cm</li>';
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
