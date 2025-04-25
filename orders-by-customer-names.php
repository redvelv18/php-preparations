<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="feedback.php">Leave a feedback</a><br>
    <a href="orders-by-customer-names.php">Sorted by customer name</a><br>
    <a href="customer-orders.php">Order list</a><br>
    <a href="contact-sent.php">Feedback sent</a><br>
    <a href="sql_store.php">store</a><br>
    <a href="index.php">first task</a><br>
    <a href="grouped-orders.php">task 6</a> <br><br>

    <form method="post">
        <div>
            <label for="first_name">Client name:</label>
            <input type="text" id="first_name" name="first_name">
        </div>
        <br>
        <button type="submit">Search</button>
    </form>

    <hr>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "sterlingtask@localhost";
        $password = "password";
        $dbname = "sql_store";

        $conn = new mysqli($servername, $username, $password, $dbname);


        $firstName = $_POST["first_name"];

        if (!empty($firstName)) {
            $sql = "SELECT o.order_id, o.order_date, o.status
                    FROM orders o
                    JOIN customers c ON o.customer_id = c.customer_id
                    WHERE c.first_name = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $firstName);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<h2>Client orders '" . htmlspecialchars($firstName) . "':</h2>";
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>";
                    echo "<strong>Order ID:</strong> " . htmlspecialchars($row["order_id"]) . "<br>";
                    echo "<strong>Date of order:</strong> " . htmlspecialchars($row["order_date"]) . "<br>";
                    echo "<strong>Statuss:</strong> " . htmlspecialchars($row["status"]) . "<br>";
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No orders found '" . htmlspecialchars($firstName) . "'.</p>";
            }

            $stmt->close();
        } else {
            echo "<p>Please insert client name</p>";
        }

        $conn->close();
    }

    ?>

</body>

</html>