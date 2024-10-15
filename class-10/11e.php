<?php
    $num = $_POST['num'];
    echo "<table border = '1'>";
    
    for($i=1; $i<=$num; $i++) { 
        echo "<tr>";

        for($j=1; $j<=$num; $j++){
            echo "<td>" . $i*$j . "</td>";
        }

        echo "</tr>";
    }
    echo "</table>";
?>