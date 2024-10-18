<?php
    function cond($str, $rmv) {

        // substr(Python, 0, y) == P + substr(Python, 2, 6-1=5) == thon
        return substr($str, 0, $rmv) . substr($str, $rmv+1, strlen($str) - $rmv);
    }

    $str = "Python";
    $rmv = 1;

    echo cond($str, $rmv);
?>