<?php
    $userID = $_POST['id'];
    $userName = $_POST['name'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myuiu";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "UPDATE student SET `name`='$userName' WHERE `sl` = $userID";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Records updated successfully.";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Showing the new table
    $sql = "SELECT * from student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1>";
        echo "<th>Serial</th><th>Name</th><th>ID</th><th>Marks</th>";

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