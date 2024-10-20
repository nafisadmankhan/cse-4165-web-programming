<?php
    // Connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "country";

    $conn = new mysqli($servername, $username, $password, $dbname);

    
    // Getting Data from the table
    $sql = "DELETE FROM citizen WHERE id=1 ";
    $result = $conn->query($sql);
    
    if ($result == TRUE) {
        echo "Record updated successfully";
    }
?>