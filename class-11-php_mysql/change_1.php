<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "country";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM citizen";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "id - name - department - date of birth - age <br>";
        while ($row = $result->fetch_assoc()) {
            echo $row["id"] . " - ";
            echo $row["name"] . " - ";
            echo $row["department"] . " - ";
            echo $row["birth"] . " - ";
            echo calcAge($row["birth"]) . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();

    function calcAge($birthday) {
        $birthday = new DateTime($birthday);
        $today = new DateTime('today');
        $age = $birthday->diff($today)->y;
        return $age;
    }
    
?>