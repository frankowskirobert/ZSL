<?php
// zmienne
if(isset($_GET['r'], $_GET['h'])){
  $r = $_GET['r'];
  $h = $_GET['h'];
}

if(isset($_GET['a'], $_GET['b'], $_GET['c'])){
  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];
}

if(isset($_GET['a'])){
  $a = $_GET['a'];
}

if(isset($_GET['a'], $_GET['h'], $_GET['H'])){
  $a = $_GET['a'];
  $h = $_GET['h'];
  $H = $_GET['H'];
}

// prostopadłościan
function pole_prostopadloscianu($a, $b, $c){
  $poleP = number_format(round((2 * $a * $b + 2 * $a * $c + 2 * $b * $c), 2), 2, '.', '');
  return $poleP;
}

function objetosc_prostopadloscianu($a, $b, $c){
  $objP = number_format(round(($a * $b * $c), 2), 2, '.', '');
  return $objP;
}

function dlugosc_przekatnejprosto($a, $b, $c){
  $przekatnaP = number_format(round((sqrt(pow($a, 2) + pow($b, 2) + pow($c, 2))), 2), 2, '.', '');
  return $przekatnaP;
}

// walec
function pp_walec($r){
  $pi = 3.14;
  $ppW = number_format(round(($pi * pow($r, 2)), 2), 2, '.', '');
  return $ppW;
}

function objetosc_walec($r, $h){
  $pi = 3.14;
  $objW = number_format(round(($pi * pow($r, 2) * $h), 2), 2, '.', '');
  return $objW;
}

function pb_walec($r, $h){
  $pi = 3.14;
  $pbW = number_format(round((2 * $pi * $r * $h), 2), 2, '.', '');
  return $pbW;
}

function ppc_walec($r, $h){
  $pi = 3.14;
  $ppcW = number_format(round((2 * $pi * pow($r, 2) + 2 * $pi * $r * $h), 2), 2, '.', '');
  return $ppcW;
}

// ostrosłup
function pp_ostroslup($a, $h){
  $ppO = number_format(round((pow($a, 2) + 4 * $a * $h), 2), 2, '.', '');
  return $ppO;
}

function objetosc_ostroslup($a, $H){
  $objO = number_format(round((pow($a, 2) * $H / 3 ), 2), 2, '.', '');
  return $objO;
}

// sześcian
function pp_szescian($a){
  $ppS = number_format(round((6 * pow($a, 2)), 2), 2, '.', '');
  return $ppS;
}

function objetosc_szescian($a){
  $objS = number_format(round((pow($a, 3)), 2), 2, '.', '');
  return $objS;
}

function przekatna_szescian($a){
  $przekatnaS = number_format(round(($a * sqrt(3)), 2), 2, '.', '');
  return $przekatnaS;
}

function prom_kuli_wpis_szescian($a){
  $prom_wpisany = number_format(round(($a / 2), 2), 2, '.', '');
  return $prom_wpisany;
}

function prom_kuli_opis_szescian($a){
  $prom_opisany = number_format(round((($a * sqrt(3))/2), 2), 2, '.', '');
  return $prom_opisany;
}

?>
