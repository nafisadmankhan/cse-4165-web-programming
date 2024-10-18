<?php

    function getsum($n) {
        $sum = 0;

        while ($n != 0) {
            $sum = $sum +$n %10;
            $n = $n/10;
        }
        return $sum;
    }

    $seed = 4;
    $terms = 9;

    echo "Seed Value: " . $seed;
    echo "<br><br>";

    for($i=0; $i<$terms; $i++){
        echo $seed;
        if($i<$terms-1){
            echo ", ";
        }
        $add_val = getsum($seed);
        $seed = $seed + $add_val;
    }
?>