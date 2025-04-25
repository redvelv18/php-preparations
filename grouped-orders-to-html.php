<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

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


    <?php

    $orders = [
        ['order_id' => 1, 'customer' => 'Alise', 'product' => 'Grāmata'],
        ['order_id' => 1, 'customer' => 'Alise', 'product' => 'Pildspalva'],
        ['order_id' => 2, 'customer' => 'Bobs', 'product' => 'Dators'],
        ['order_id' => 2, 'customer' => 'Bobs', 'product' => 'Pelīte'],
        ['order_id' => 3, 'customer' => 'Čārlijs', 'product' => 'Kafijas automāts'],
    ];

    $groupedOrders = [];

    foreach ($orders as $order) {
        $orderId = $order['order_id'];

        if (!isset($groupedOrders[$orderId])) {
            $groupedOrders[$orderId] = [
                'order_id' => $orderId,
                'customer' => $order['customer'],
                'products' => [],
            ];
        }

        $groupedOrders[$orderId]['products'][] = $order['product'];
    }

    $groupedOrders = array_values($groupedOrders);


    foreach ($groupedOrders as $order) {
        echo "Order ID: " . "<strong>" . $order['order_id'] . "</strong><br>";
        echo "Customer: " . "<strong>" . $order['customer'] . "</strong><br>";
        echo "Products: " . "<strong>" . implode(", ", $order['products']) .  "<br><br></strong>";
    }

    ?>
</body>

</html>