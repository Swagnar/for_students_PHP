<?php
    // Dokumentacja do użytych funkcji:
    //
    //  count     : https://www.php.net/manual/en/function.count.php
    //  array_push: https://www.php.net/manual/en/function.array-push.php
    //  array_pop : https://www.php.net/manual/en/function.array-pop.php
    //
    //
    //
    //

    $indeksowana = ["SlAySkc=", "Kioq", "Kiog", "Kioq"];
    $asocjacyjna = [
        "ID:" => 3,
        "Admin" => false,
        "Username" => "test@192.168.1.47"
    ];

    // # count - zwraca ilość elementów w tablicy
    //
    count($indeksowana); // => 4
    count($asocjacyjna); // => 3



    // # array_push - dodaje nowy element na końcu tablicy
    // Metoda ta nie działa na tablicach asocjacyjnych
    // Poniżej arrary_push znajduje się zapis który pozwala dodać nowy
    // element do tablicy asoc. 
    array_push($indeksowana, 32);
    $asocjacyjna["NowyElement"] = "Obunga";
    
    // Wynik dodawania do tablic:
    //
    // $indeksowana = ["SlAySkc=", "Kioq", "Kiog", "Kioq", 32];
    // $asocjacyjna = [
    //     "ID:" => 3,
    //     "Admin" => false,
    //     "Username" => "test@192.168.1.47",
    //     "NowyElement" => "Obunga"
    //];



    // # array_pop - usuwanie ostatniego elementu tablicy
    //
    array_pop($indeksowana);
    array_pop($asocjacyjna);
    
    // Wynik usuwania:
    //
    // $indeksowana = ["SlAySkc=", "Kioq", "Kiog", "Kioq"];
    // $asocjacyjna = [
    //     "ID:" => 3,
    //     "Admin" => false,
    //     "Username" => "test@192.168.1.47",
    //];
?>