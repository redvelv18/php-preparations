<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="customer-orders.php">Orders</a>

    <?php

    $servername = "localhost";
    $username = "sterlingtask@localhost";
    $password = "password";
    $dbname = "sql_store";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM customers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";  // formatting the output to a table
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            //-----------------------------------//
            foreach ($row as $key => $value) {
                echo "<strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "<br>";
            }
            //-----------------------------------//
            echo "</li>";
        }
        echo "</ul>"; // formatting the output to a table
    } else {
        echo "No clients found."; //database is empty
    }
    $conn->close(); //closing the connection
    ?>

</body>

</html>