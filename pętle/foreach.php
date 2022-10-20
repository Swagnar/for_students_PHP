<style>
* {
    font-size: 15px;
}
body {
  background-color: sienna;
}
</style>
<?php
// Dokumentacja: https://www.php.net/manual/en/control-structures.foreach.php
//
// Stworzenie tablic 
//
$tab1 = [
  "czerwony"  => "#ff0000",
  "zielony"   => "#00ff00",
  "niebieski" => "#0000ff",
  "biały"     => "#ffffff",
  "czarny"    => "#000000",
];
$tab2 = ["tekst", 47, true, 3.1400];



echo "<u><b>tab1</b> as klucz => wartość:</u><br>";
// Składnia pętli foreach
//
//      Tablica po na której ma zostać wykonana pętla
//        |
//        |       Zmienna w której będzie zapisany aktualny element tablicy
//        |         |
//        |         |       Ewentualnie możemy również rozpisać pętlę na dwa elementy, klucz i wartość
//        |         |         |               
foreach($tab1 as $klucz => $wartosc) {      //W przypadku tablicy asocjacyjnej ($tab1) kluczem jest wartość po lewej stronie i 
  echo "<span style='color: $wartosc;'>[$klucz] => [$wartosc]</span><br>";        //i wskazuje on na jakąś wartość (po prawej stronie)
}




echo "<hr><u><b>tab2</b> as wartość:</u><br>";

// W przypadku tablicy indeksowanej, jeżeli nie rozdzielimy pętli na dwie zmienne
// to wewnątrz pętli mamy dostęp do danych które znajdują się wewnątrz tabeli ("tekst", 47 etc.)
//
foreach($tab2 as $wartosc) {            
  echo "[$wartosc] - (typ danych: <em>".gettype($wartosc)."</em>)<br>";
}     
// Wynik:
//      => [tekst] - (typ danych: string)
//         [47] - (typ danych: integer)
//         [1] - (typ danych: boolean)
//         [3.14] - (typ danych: double)
//





echo "<hr><u><b>tab2</b> as klucz => wartość:</u><br>";

// W przypadku tablicy indeksowanej ($tab2), jeżeli rozdzielimy pętle na dwie zmienne
// to kluczem będzie indeks danego elementu (0, 1, 2 etc.)
//
foreach($tab2 as $klucz => $wartosc) {
  echo "[$klucz] => [$wartosc] - (typ danych: <em>".gettype($wartosc)."</em>)<br>";
}
// Wynik:
//      => [0] => [tekst] - (typ danych: string)
//         [1] => [47] - (typ danych: integer)
//         [2] => [1] - (typ danych: boolean)
//         [3] => [3.14] - (typ danych: double)
?>