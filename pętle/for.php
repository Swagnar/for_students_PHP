<style>
* {
  font-size: 15px;
}
body {
  background-color: sienna;
}

</style>
<?php
// Dokumentacja: https://www.php.net/manual/en/control-structures.for.php
//
// Składnia pętli for
//
//  Licznik pętli  
//    |
//    | Warunek który sprawi że pętla przestanie się wykonywać[1*]
//    |     |                       
//    |     |  Co ma się stać z licznikiem po każdym przejściu pętli[2*]
//    |     |         |
//    |     |         |
for($i = 0; $i < 5; $i++) {
    echo "Witaj, świecie! ";
}
// Wynik:
//      => Witaj, świecie! Witaj, świecie! Witaj, świecie! Witaj, świecie! Witaj, świecie!
//
// [1]
//      $i jest równy 0, przy następnym cyklu pętli będzie
//      miał wartość 1, potem 2, 3, 4 aż w końcu w następnym
//      cyklu $i = 5, co sprawi że warunek 5 < 5 będzie równy 'false'
//      Gdy $i jest <5, czyli np. wynosi 4; warunek 4 < 5 wynosi 'true'
//
// [2]
//      W 90% zawsze będziemy używali tutaj postinkrementacji - 
//      zwiększania licznika o 1 po jednym przejściu pętli.
//
//      Pozostałe możliwości to:
//        ++$i - preinkrementacja - +1 przed nowym przejściem pętli
//        --$i - predekrementacja - -1 przed nowym przejściem pętli
//        $i-- - postdekrementacja- -1 po jednym przejściu pętli
//        inne                    - jak w przykładzie poniżej
  echo "<hr><br>";



  // Stworzenie tablicy indeksowanej
  //       0    1    2    3
  $tab = ["Sl","Ay","Sk","c="];
  
  // Zliczenie ile elementów znajduje się w tabeli
  //
  $n = count($tab); // = 4



  
  // Pętla wypisze wszystkie elementy tablicy
  // zaczynając od "Sl" kończąc na "c="
  //
  for($i=0;$i<$n;$i++) {
    echo "[$i] - $tab[$i]<br>";
  }
  // Wynik:
  //      => [0] - Sl
  //         [1] - Ay
  //         [2] - Sk
  //         [3] - c=

  echo "<br>";
  



  // Pętla wypisze co drugi element tablicy (zaczynając od 0)
  //
  for($i=0;$i<$n;$i=$i+2) {
    echo "[$i] - $tab[$i]<br>";
  }
  // Wynik:
  //      => [0] - Sl
  //         [2] - Sk

  echo "<br>";





  // Zagnieżdżone pętle
  //
  for($i=0;$i<$n;$i++) {
    echo "<b>i = [$i]</b><br>";
    for($j=0;$j<$n;$j++) {
      echo "j = [$j]<br>";
    }
    echo "<hr>";
  }
  // Wynik:
  //      => i = [0]   i = [1]   i = [2]   i = [3]
  //      
  //         j = [0]   j = [0]   j = [0]   j = [0]
  //         j = [1]   j = [1]   j = [1]   j = [1]
  //         j = [2]   j = [2]   j = [2]   j = [2]
  //         j = [3]   j = [3]   j = [3]   j = [3]
?>