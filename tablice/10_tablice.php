<?php
  $colors = array('biały', 'zielony', 'czerwony', 'aqua');

  echo "Rozmiar tablicy: ",count($colors),"<br />";
  echo "Pierwszy element tablicy: ",$colors[0],"<br />";
  echo "Ostatni element tablicy: ",$colors[3],"<br />";
  echo "Ostatni element tablicy: ",$colors[count($colors)-1],"<br /><br />";

  echo "Początkowa zawartość tablicy:<br />";
  for($i = 0;$i < count($colors);$i++){
    echo $colors[$i],", ";
  }

  echo "<br /><br />";

  echo "Początkowa zawartość tablicy:<br />";
  for($i = 0;$i < count($colors);$i++){
    echo "Kolor ",$i+1,": ",ucfirst($colors[$i]),"<br />";
  }

  echo "<br />";

  function tabColors(&$tab, $color1, $color2, $color3){
    $tab[0] = $color1;
    $tab[1] = $color2;
    $tab[2] = $color3;
  }
  function tabShow($tab){
      for($i=0; $i<count($tab);$i++){
        echo $i+1," kolor: ",$tab[$i],"<br />";
      }
  }

  tabColors($colors1, 'aqua','magenta','cyan');
  tabShow($colors1);
  echo "<br />";

  // tablice asocjacyjne
  $data = array(
    'name'=>'Jan',
    'surname'=>'Nowak',
    'age'=>20,
    'city'=>'Poznań'
  );

  echo "Imię: ",$data['name'],"<br />";

  // Imię: {$data['name']}
  echo <<< TAB
    <hr />
    Imię: $data[name]<br />
    Nazwisko: $data[surname]<br />
    Wiek: $data[age]<hr />
TAB;

  // foreach
  foreach($data as $val){
    echo "$val ";
  }

  echo "<hr />";

  foreach($data as $key => $val){
    echo ucfirst($key),": $val<br />";
  }

  // print_r()
  echo "<pre>";
  print_r($data);
  echo "</pre>";
  ob_clean();

  // tablice wielowymiarowe
  $students = array(
    array('Jan','Nowak'),
    array('Anna','Kowalska','20'),
    array('Tomasz')
  );

  print_r($students[1]);
  echo "<br />";
  echo $students[1][2],'<br /><br />';

  for($f = 0; $f<count($students);$f++){
    for($s = 0;$s<count($students[$f]);$s++){
      echo $students[$f][$s]," ";
    }
    echo "<br />";
  }
  echo "<hr />";

  foreach($students as $value){
    foreach($value as $value2){
      echo "$value2 ";
    }
    echo "<br />";
  }
  ob_clean();
  // zadanie
  echo "<hr />";
  // 3 wymiarowa
  $moredata = array(
    array(
      array('Jan', 'Kowalski'),
      array('Janex')
    ),
    array(
      array('Daniel','Tyszka'),
      array('Danny')
    )
  );

  function showData($moredata){
    foreach($moredata as $val1){
      foreach($val1 as $val2){
        foreach($val2 as $val3){
          echo "$val3 ";
        }
      }
      echo "<br />";
    }
  }

  showData($moredata);
  echo "<hr />";

  // 4 wymiarowa
  $newdata = array(
    array(
      array(
        array('Audi', 'R6'),
        array('BMW', 'GTR')
      ),
      array(
        array('Dodge','Challenger'),
        array('Ford','Mustang')
      )
    ),
    array(
      array(
        array('Kawasaki','MotoGP'),
        array('Honda','Speed')
      )
    )
  );

  function showNewData($newdata){
    foreach($newdata as $val1){
      foreach($val1 as $val2){
        foreach($val2 as $val3){
          foreach($val3 as $val4){
            echo "$val4 ";
          }
        }
        echo "<br />";
      }
    }
  }

  showNewData($newdata);
  echo "<hr />";
  echo "<pre>";
  print_r($newdata);
  echo "</pre>";
?>
