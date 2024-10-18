<?php
    $num = $_POST['num'];

    for($i=0; $i<$num; $i++) {
        echo "<table border = '1'>";
        echo "<tr><td>" . $num;

        for($j=0; $j<$num-1; $j++){
            echo "<td>" . $num . "</td>";
        }

        echo "</td>";
    }
?>