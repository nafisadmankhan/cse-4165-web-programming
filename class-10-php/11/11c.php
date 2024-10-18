<?php
    $num = $_POST['num'];

    echo "<table border='1'>";
    for($i=0; $i<5; $i++){
        echo "<tr><td>" . $num . "</td>";

        for($j=0; $j<4; $j++) {
            echo "<td>" . $num . "</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
?>