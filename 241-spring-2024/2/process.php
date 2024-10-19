<?php
    $seed = $_POST['seed'];
    $terms = $_POST['terms'];

    $prev = $seed;

    function sum_of_digits($number) {
        $sum = 0;
        while ($number > 0) {
            $digit = $number % 10;
            $sum = $sum + $digit;
            $number = $number / 10;
        }
        return $sum;
    }

    for ($i=0; $i<$terms; $i++) {
        $next = $prev + sum_of_digits($prev);
        echo $prev . " ";
        $prev = $next;
    }
?>