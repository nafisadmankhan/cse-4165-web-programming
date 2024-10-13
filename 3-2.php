<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = ''; // Use your MySQL password
$database = 'Country';

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to get the three oldest citizens
$sql = "SELECT * FROM Citizen ORDER BY birth ASC LIMIT 3";
$result = $conn->query($sql);

// Display results
if ($result->num_rows > 0) {
    echo "<h2>Three Oldest Citizens:</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Date of Birth</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['name'] . "</td>
                <td>" . $row['department'] . "</td>
                <td>" . $row['birth'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();
?>
