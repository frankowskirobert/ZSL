<?php
//date()
echo "dzień-miesiąc-rok: ",date('d-m-y'),'<br />'; //19-11-20
echo date('d-M-Y'),'<br />'; //19-Nov-2020
echo date('d-F-Y'),'<br />'; //19-November-2020

echo date('G:i:s'),'<br />'; //9:12:53 format12h
echo date('H:i:s'),'<br />'; //09:12:53 format24h

setlocale(LC_ALL, 'pl');
echo strftime("%e %B %Y"); //19 listopad 2020

echo date('G:i:sa'),'<br />'; //9:12:53am

?>
<script>
  setTimeout(function(){
    window.location.reload(1);}, 1000);
</script>
<?php

$date = getdate();
// echo $date;
echo '<pre>';
print_r($date);
echo '</pre>';

echo "Ilość dni w roku: ",$date['yday'],'<br />';

//rok przestępny
if($date['year']%4==0){
  echo $date['year']," jest przestępny <br />";
} else{
  echo $date['year']," nie jest przestępny <br />";
}


?>
