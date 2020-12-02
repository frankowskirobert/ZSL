<?php

function result($x, $y){
  switch ($_GET['math']) {
    case '+':
      $result = $x + $y;
      break;

    case '-':
      $result = $x - $y;
      break;

    case '*':
      $result = $x * $y;
      break;

    case '/':
      if($y == 0){
        $result = "Nie dziel przez zero";
        break;
      }
      else{
        $result = $x / $y;
        break;
      }
  }
  return $result;
}

?>
