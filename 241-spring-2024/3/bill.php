<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electricity_bill";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    echo "Your location: ";
    $location = $_POST['select_location'];
    if ($location == 'Dhaka') {
        echo "Dhaka";
        $tax = 0.2;
    } else if ($location == 'Chittagong') {
        echo "Chittagong";
        $tax = 0.15;
    }
    echo "<br>";

    echo "Your area: ";
    $area = $_POST['non_duplicate'];
    if ($area == 'Urban') {
        echo "Urban";
    } else if ($area == 'Rural') {
        echo "Rural";
    }
    echo "<br>";

    echo "Unit consumed: ";
    $unit = $_POST['unit'];
    echo $unit;
    echo "<br>";

    echo "<strong>Total bill: </strong>";

    $sql = "SELECT * FROM bill_info WHERE `location`='$location' AND `area`='$area'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['area'] . "</td>";
            echo "</tr>";
            $s_id = $row['id'];
            $s_location = $row['location'];
            $s_area = $row['area'];
            $s_rate_0_75 = $row['rate_0_75'];
            $s_rate_76_200 = $row['rate_76_200'];
            $rate_201_above = $row['rate_201_above'];
        }
        echo "</table>";
    }

    if ($unit>=0 && $unit<=75) {
        $bill = $s_rate_0_75*$unit;
    } else if ($unit>=76 && $unit<=200) {
        $bill = $s_rate_76_200*$unit;
    } else if ($unit>=201) {
        $bill = $rate_201_above*$unit;
    }

    $bill = $bill + $bill*$tax;

    echo $bill;
?>