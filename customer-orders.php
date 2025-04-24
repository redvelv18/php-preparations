<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <a href="index.php">Go back back</a><br>
    <a href="sql_store.php">Store</a>
    <a href="orders-by-customer-names.php">Finder</a>

    <?php
    // Izveidojiet 'customer-orders.php' failu, kurā tiek attēloti dati par visiem klientiem (customers) un to pasūtījumiem (orders).
    // Atgrieziet datus kā hierarhisku HTML sarakstu.

    $servername = "localhost";
    $username = "sterlingtask@localhost";
    $password = "password";
    $dbname = "sql_store";

    $conn = new mysqli($servername, $username, $password, $dbname);


    $sql_customers = "SELECT customer_id, first_name, last_name, phone FROM customers";
    $result_customers = $conn->query($sql_customers);

    if ($result_customers->num_rows > 0) {
        echo "<ul>";
        while ($row_customer = $result_customers->fetch_assoc()) {
            echo "<li><strong>Client:</strong> " .
                htmlspecialchars($row_customer['first_name']) . " " .
                htmlspecialchars($row_customer['last_name']) . " (" .
                htmlspecialchars($row_customer['phone']) . ")";

            $customer_id = $row_customer['customer_id'];

            $sql_orders = "SELECT order_id, order_date, status FROM orders WHERE customer_id = $customer_id";
            $result_orders = $conn->query($sql_orders);

            if ($result_orders->num_rows > 0) {
                echo "<ul>";
                while ($row_order = $result_orders->fetch_assoc()) {
                    echo "<li><strong>Order ID:</strong> " .
                        htmlspecialchars($row_order['order_id']) .
                        ", <strong>Date:</strong> " .
                        htmlspecialchars($row_order['order_date']) .
                        ", <strong>Statuss:</strong> " .
                        htmlspecialchars($row_order['status']) . "</li>";
                }
                echo "</ul> <br><br>";
            } else {
                echo "<ul><li>This client has no orders</li></ul> <br><br>";
            }

            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "No clients";
    }

    ?>

</body>

</html>