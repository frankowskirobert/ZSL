<?php
// tablice sortowanie
// sort, rsort, asort, arsort, ksort, krsort

  $tab = array(20, 1, 5, 75, 5, -10, 100);

  function t($tab){
    foreach ($tab as $value){
      echo "$value ";
    }
    echo "<br />";
  }

  t($tab);

  // sortowanie tablicy niemalejąco
  sort($tab);
  t($tab);

  // sortowanie tablicy nierosnąco
  rsort($tab);
  t($tab);

  $names = array('Katarzyna', 'anna', 'zbigniew', 'Paweł');
  t($names);

  sort($names);
  t($names);

  // zamiana liter na małe

  function replaceToLowerCase(&$tab){
    foreach ($tab as $key => $value){
      $replace = strtolower($value);
      $tab[$key] = $replace;
      echo $replace," ";
    }
  }

  replaceToLowerCase($names);
  echo "<br />";
  t($names);

  sort($names);
  t($names);
  echo "<hr />";

  // sortowanie tablic asocjacyjnych
  $tabAsoc = array(
    'name' => 'Paweł',
    'surname' => 'Bąk',
    'age' => '20',
    'nick' => '2pawel',
    'height' => '180'
  );

  t($tabAsoc);

  // sortowanie niemalejące według zawartości
  asort($tabAsoc);
  t($tabAsoc);

  // sortowanie nierosnące według zawartości
  arsort($tabAsoc);
  t($tabAsoc);

  // sortowanie niemalejące według klucza
  ksort($tabAsoc);
  t($tabAsoc);

  // sortowanie nierosnące według klucza
  krsort($tabAsoc);
  t($tabAsoc);

  echo gettype($tabAsoc['nick']),"<br />"; // string
  echo gettype($tabAsoc['age']),"<hr />"; // integer

  // wyświetlenie danych
  echo "<pre>";
  var_dump($tabAsoc);
  echo "</pre>";

  echo "<pre>";
  print_r($tabAsoc);
  echo "</pre>";
?>
