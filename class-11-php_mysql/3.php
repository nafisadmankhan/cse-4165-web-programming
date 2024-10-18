<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myuiu";

    $userID = $_POST['name'];
    echo $userID;

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "SELECT * FROM student WHERE name='$userID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1>";
        echo "<th>Serial</th><th>Name</th>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";

            echo "<td>" . $row['sl'] ."</td>";
            echo "<td>" . $row['name'] ."</td>";

            echo "</tr>";
        }

        echo "</table>";
    }

?>