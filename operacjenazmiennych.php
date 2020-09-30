<?php

// wersjaa PHP 7.2.22
echo PHP_VERSION.'<hr>';
// echo phpinfo();

$potega=2**10;
echo $potega,'<br>'; // 1024

//operatory bitowe
// and &, or |, not ~, xor ^, <<, >>

$x = 0b1010;
echo $x,'<br>'; //1010(2) 10

$x = $x << 1;
echo $x,'<br>'; //10100(2) 20

$x = $x >> 2;
echo $x,'<br>'; //101(2) 5

//porównanie
$x = 10;
$y = 1;

echo $x <=> $y,'<br>';

if ($x==$y) {
  echo 'zmienne są równe<br>';
}else {
  echo 'zmienne są różne<br>';
}

echo gettype($x); //int
echo '<br>';
echo gettype($y); //double
echo '<br>';

/*

postinkrementacja $x++;
preinkrementacja ++$x;
postdekrementacja $x--;
predekremenctacja --$x;

*/

$x=1;
echo $x;//1
$x=$x++;
echo $x;//1
$x=++$x;
echo $x;//2
$y=++$x;
echo $x;//3
$y=$x++;
$y=--$y;
echo $y;//2
echo '<br>';

########################

$x=2;
echo $x++;//2
echo ++$x;//4
echo $x;//4
$y=$x++;
echo $y;//5
$y=++$x;
echo $y;//6
echo ++$x, '<hr>';//7

// operatory rzutowania
// int, float, string, array, object, unset

  $test1 = '123abc45';

  echo 'Typ danych $test1:' ,gettype($test1);
  $test1 = (int)$test1;
  echo "<br>$test1<br>";

  echo 'Typ danych $test1:' ,gettype($test1),
  '<hr>';

  $test2 = 0;

  echo 'Typ danych $test2:' ,gettype($test2);
  $test2 = (bool)$test2;
  echo "$test2<br>"; //false

  echo 'Typ danych $test2:' ,gettype($test2),
  '<hr>';

  $test3 = 10;

  echo 'Typ danych $test3:' ,gettype($test3);
  $test3 = (float)$test3;
  echo "<br>$test3<br>";

  echo 'Typ danych $test3:' ,gettype($test3),
  '<hr>';

  echo 'Typ danych $test3:' ,gettype($test3);
  $x = (unset)$test3;
  echo "<br>$x<br>";

  echo 'Typ danych $test3:' ,gettype($x),
  '<hr>'; //NULL

  //rozmiar typu integer
    echo PHP_INT_SIZE,'<hr>'; //8

  //kontrola typu zmiennych

 ?>
