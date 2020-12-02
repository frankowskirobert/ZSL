<?php

function numberDays(){
  $inform = getdate();
  if($inform['year']%4 == 0){
    $iloscdni = 366;
  } else{
    $iloscdni = 365;
  }
  return $iloscdni;
}

function toEndYear(){
  $inform = getdate();
  if($inform['year']%4 == 0){
    $to_end = 366 - ($inform['yday'] + 1);
  } else{
    $to_end = 365 - ($inform['yday'] + 1);
  }
  return $to_end;
}

function weekDays(){
  $inform = getdate();
  switch($inform['wday']){
    case 0:{
      echo "Niedziela";
      break;
    }
    case 1:{
      echo "Poniedziałek";
      break;
    }
    case 2:{
      echo "Wtorek";
      break;
    }
    case 3:{
      echo "Środa";
      break;
    }
    case 4:{
      echo "Czwartek";
      break;
    }
    case 5:{
      echo "Piątek";
      break;
    }
    case 6:{
      echo "Sobota";
      break;
    }
  }
}

  function monthName(){
    $inform = getdate();
    switch($inform['mon']){
      case 1:{
        echo "Styczeń";
        break;
      }
      case 2:{
        echo "Luty";
        break;
      }
      case 3:{
        echo "Marzec";
        break;
      }
      case 4:{
        echo "Kwiecień";
        break;
      }
      case 5:{
        echo "Maj";
        break;
      }
      case 6:{
        echo "Czerwiec";
        break;
      }
      case 7:{
        echo "Lipiec";
        break;
      }
      case 8:{
        echo "Sierpień";
        break;
      }
      case 9:{
        echo "Wrzesień";
        break;
      }
      case 10:{
        echo "Październik";
        break;
      }
      case 11:{
        echo "Listopad";
        break;
      }
      case 12:{
        echo "Grudzień";
        break;
      }
    }
  }

?>
