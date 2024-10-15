<?php 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input value
    $n_table = intval($_POST['n_table']); // Convert the input to an integer

    if ($n_table > 0) { // Ensure the number is greater than 0
        echo "<h2>Multiplication Table of " . htmlspecialchars($n_table) . ":</h2>";
        echo "<table border='1' cellpadding='10'>";
        // Outer loop for rows, dynamically based on $n_table
        for ($i = 1; $i <= $n_table; $i++) {
            echo "<tr>"; // Start a new row for each iteration
            // Inner loop for the multiplication table cells, dynamically based on $n_table
            for ($j = 1; $j <= $n_table; $j++) {
                $result = $i * $j;
                echo "<td>" . $result . "</td>";
            }
            echo "</tr>"; // Close the row
        }
        echo "</table>";
    } else {
        echo "Please enter a valid positive number.";
    }
} else {
    echo "No value provided.";
}
?>