<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Kalkulator</title>
  </head>
  <body>

    <form method="get">
      <h2>Kalkulator</h2>
      <input type="number" name="x" placeholder="x" step="any" required>
      <select name="math">
        <option value="+" selected>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="number" name="y" placeholder="y" step="any" required>
      <input type="submit" value="=">
      <input type="text" name="res" value="<?php
        require './function.php';
        $x = $_GET['x'];
        $y = $_GET['y'];
        $math = $_GET['math'];
        echo result($x, $y);
      ?>" placeholder="" disabled>
    </form>
  </body>
</html>
