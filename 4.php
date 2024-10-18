<?php
    function calc($num_1) {
        if (abs($num_1 - 100)<=10 || abs($num_1 - 200)<=10) {
            return "bool(true)";
        } else {
            return "bool(false)";
        }
    }

    $num_1 = 103;

    echo calc($num_1);
?>