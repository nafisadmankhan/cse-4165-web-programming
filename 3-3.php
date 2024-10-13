<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = ''; // Your MySQL password if any
$database = 'Country';

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];

    // Query to search for citizens by name (case-insensitive)
    $sql = "SELECT * FROM Citizen WHERE name LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchTerm = "%" . $name . "%";
    $stmt->bind_param("s", $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display results
    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
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
        echo "No matching citizens found.";
    }

    $stmt->close();
}

// Close the connection
$conn->close();
?>
