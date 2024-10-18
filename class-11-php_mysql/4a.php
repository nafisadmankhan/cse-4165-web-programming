<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myuiu";

    $conn = new mysqli($servername, $username, $password, $dbname);

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <form action="4b.php" method="post">
        <input type="text" name="id" placeholder="ID No"><br><br>
        <input type="text" name="name" placeholder="New Name"><br><br>
        <input type="submit" value="Update Name">
    </form>
</body>
</html>