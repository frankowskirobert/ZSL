<?php
  $text = <<< LABEL
    zsl = Zespół
    Szkół
    Łączności<br>
LABEL;

    echo $text;
    echo nl2br($text)."<hr>";


    $name = 'jaNUsZ';
// zmiana na małe litery
    echo strtolower($name)."<br>"; //janusz

// zmiana na duże litery
    echo strtoupper($name)."<br>"; //JANUSZ

// zmiana pierwszej litery w zdaniu
    $text = 'janusz nowak Mieszka w poznaniu';
    echo ucfirst($text)."<br>"; //JANUSZ

// zmiana wszystkich pierwszych liter w zdaniu
    $text = 'janusz nowak Mieszka w poznaniu';
    echo ucwords($text)."<br><hr>"; //Janusz Nowak Mieszka...

// Lorem Ipsum
    $lorem = <<< LOREM
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;

    echo $lorem."<br><hr>";
    $col = wordwrap($lorem, 40, '<br>');
    echo $col."<br>";
    $col = wordwrap($lorem, 40, '<hr>');
    echo $col;

// czyszczenie zawartosci bufora
    ob_clean();

// czyszczenie białych znaków
    $name = 'Anna';
    $name1 = '  Anna ';

    echo 'Długość $name: ',strlen($name)."<br>"; //4
    echo 'Długość $name1: ',strlen($name1)."<br>"; //7

    echo strlen(ltrim($name1))."<br>"; //5
    echo strlen(rtrim($name1))."<br>"; //6
    echo strlen(trim($name1))."<br>"; //4

    $name1 = trim($name1);
    echo strlen($name1); //4

    ob_clean();

    //przeszukiwanie ciągów znaków
    $replace = str_replace("%imie%", "Janusz", "Masz na imię: %imie%");
    echo "$replace<hr>";

    //przetwarzanie ciągów znaków
    $login = 'bączek';
    $censure = array('ą','ę','ć','ń','ż','ź','ł','ó','ś');
    $replace = array('a','e','c','n','z','z','l','o','s');

    $correctLogin = str_replace($censure, $replace, $login);
    echo "Login: $login<br>Poprawny login: $correctLogin<hr>";

    //przeszukiwanie
    $address = "Poznań, ul. Polna 4, tel. (61) 123 24 64";
    $search = strstr($address, 'tel'); //tel. (61) 123 24 64"
    echo $search."<br>";

    $address = "Poznań, ul. Polna 4, tel. (61) 123 24 64";
    $search = stristr($address, 'Tel'); //tel. (61) 123 24 64"
    echo $search."<br>";

    $address = "Poznań, ul. Polna 4, tel. (61) 123 24 64";
    $search = strstr($address, 'tel', true); //Poznań, ul. Polna 4,
    echo $search."<br>";

    $mail = strstr('zsl@gmail.com', '@');
    echo $mail,'<br>'; //@gmail.com

    /* $mail = strstr('zsl@gmail.com', 64);
    echo $mail,'<hr>'; //@gmail.com */

    //substr
    $name = "anna";
    echo substr($name, 0),'<br>'; //anna
    echo substr($name, 2),'<br>'; //na
    echo substr($name, 1, 2),'<br>'; //nn
    $name = 'Tomasz';
    echo substr($name, 2, 3),'<hr>'; //mas

    //pobierz adres z dowolnego adresu poczty elektronicznej
    $mail = 'example@gmail.com';
    echo $mail,'<br>';
    $dom = substr(strstr($mail, '@'), 1);
    echo $dom,'<hr>';


?>
