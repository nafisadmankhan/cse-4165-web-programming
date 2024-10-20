<?php
    // Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "country";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    // Getting Data from the table
    $sql = "UPDATE citizen SET name='Sam' WHERE id=1 ";
    $result = $conn->query($sql);
    
    if ($result == TRUE) {
        echo "Record updated successfully";
    }
?>