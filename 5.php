<?php
    function cond($str) {
        if (strlen($str) >= 2 && substr($str, 0, 2) == "if") {
            return $str;
        }

        return "if " . $str;
    }

    $str = "if else";
?>