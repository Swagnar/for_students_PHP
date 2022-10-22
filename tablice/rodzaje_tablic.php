<?php

    // Pusta tablica (idenksowana lub asocjacyjna)
    $tablica = [];

    // Tablica indeksowana
    // inaczej też zwana tablicą lub listą
    //                   array       list
    // 
    // Jej kolejne elementy posiadają swój indeks począwszy od
    // pierwszego elementu który posiada indeks = 0

    //                  0          1         2
    $indeksowana = ["tekst1", "tekst2", "tekst3"];
    

    // Tablica asocjacyjna
    // inaczej też zwana słownikiem lub mapą
    //                   dictionary     map
    //
    // W PHP tablice globalne takie jak $_GET, $_FILES, $_SESSION
    // są tablicami asocjacyjnymi
    //
    $asocjacyjna1 = [
        "email" => "test@test.com",
        "password" => "test123"
    ];
    $asocjacyjna2 = [
        "email" => "test@test.com",
        "password" => 12345678
    ];

    // Dodanie nowego elementu do tablicy asocjacyjnej
    $asocjacyjna1["username"] = "test";

    // Petla foreach wypisująca wszystkie elementy tablicy asoc.
    // Zmienna $klucz reprezentuje wartość po lewej strony tablicy,
    // czyli właśnie jej klucz (key), natomiast $wartosć jest daną
    // na którą klucz wskazuje (value)
    //
    foreach($asocjacyjna1 as $klucz => $wartosc) {
        echo "Kluczem jest [" . $klucz . "] a wartością jest [" . $wartosc . "]<br>";
    }

    echo "<hr>";

    // Za pomocą pętli foreach możemy również wypisywać w taki sam
    // sposób wartości z tablicy indeksowanej. W tym wypadku $klucz
    // będzie indeksem danego elementu, czyli np. 0, 1, 2, 3 itd.
    //
    foreach($indeksowana as $klucz => $wartosc) {
        echo "Kluczem jest [" . $klucz . "] a wartością jest [" . $wartosc . "]<br>";
    }
    echo "<hr>";

    // Pętla foreach nie wymaga od nas wiedzy ile znajduje się
    // elementów w tablicy. W przypadku zwykłego for'a musimy użyć
    // metody count() aby wiedzieć ile razy pętla ma się wykonać.
    //
    for($i=0; $i < count($indeksowana); $i++) {
        echo $indeksowana[$i] . "<br>";
    }
    echo "<hr>";




    echo var_dump($indeksowana);
    echo "<hr>";
    echo var_dump($asocjacyjna1);
    echo "<hr>";
    echo var_dump($asocjacyjna2);



?>