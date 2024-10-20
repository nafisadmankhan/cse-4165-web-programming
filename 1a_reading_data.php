<?php
    // Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electricity_bill";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    // Getting Data from the table
    $sql = "SELECT * FROM bill_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            
            // Printing the values
            echo $row['id'] . " ";
            echo $row['location'] . " ";
            echo $row['area'] . " ";
            echo "<br>";
        } 
    }
?>