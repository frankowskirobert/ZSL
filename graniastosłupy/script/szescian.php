<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Sześcian</title>
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
      <h2>sześcian</h2>
      <img src="../images/szescian.jpg">
      <h2>dane</h2>
      <form method="GET" class="all">
        <input type="number" name="a" placeholder="a" value="<?php if(isset($_GET['a'])) echo $_GET['a']; ?>"><br />
        <input type="submit" value="Oblicz"><br />

        <?php
        if(isset($_GET['a'])){
          if(($_GET['a'] == '') || (!is_numeric($_GET['a']))){
            echo "<h3>Dane podane w formularzu muszą być liczbami!</h3>";
          }
          else if($_GET['a'] <= 0){
            echo "<h3>Dane podane w formularzu muszą być liczbami dodatnimi!</h3>";
          }
          else{
            require_once('functions.php');

            echo '<ul>';
            echo '<li>Pole powierzchni: '.pp_szescian($a).'cm<sup>2</sup></li>';
            echo '<li>Objętość: '.objetosc_szescian($a).'cm<sup>3</sup></li>';
            echo '<li>Długość przekątnej: '.przekatna_szescian($a).'cm</li>';
            echo '<li>Promień kuli wpisanej w sześcian: '.prom_kuli_wpis_szescian($a).'cm</li>';
            echo '<li>Promień kuli opisanej na sześcianie: '.prom_kuli_opis_szescian($a).'cm</li>';
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
