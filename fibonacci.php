<?php
    // $fib = ["jeden", "dwa"];
    $fib = [];
    $phi = [];
    $x1 = 1;
    $x2 = 1;

    array_push($fib, $x1);
    array_push($fib, $x2);

    for($i = 0; $i < 50; $i++) {
        $noweX = $fib[$i] + $fib[$i+1];
        if($i == 0) {
            array_push($phi, 0);
        } else {
            $nowePhi = $fib[$i] / $fib[$i-1]; 
            array_push($phi, $nowePhi);
        }
        array_push($fib, $noweX);
    }
    // echo var_dump($phi);
    for($i = 0; $i < 50; $i++) {
        if($i % 3 == 0) { 
            echo $i . "fizz<br>"; 
        }
        elseif($i % 5 == 0) {
             echo $i . "buzz<br>"; 
        }
        elseif($i % 15 == 0) { 
            echo $i . "fizzbuzz<br>"; 
        } else {
            echo $i . "<br>";
        }
        
    }

?>