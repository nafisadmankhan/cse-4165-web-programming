<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myuiu";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM student ORDER BY mark DESC LIMIT 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1>";

        echo "<th>Serial</th><th>Name</th><th>ID</th><th>Mark</th>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['sl'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['mark'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
?>