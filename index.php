<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-22042025</title>
</head>

<body>

    <?php
    $izskats = [
        'theme' => 'dark',
        'font' => 'Arial'
    ];

    echo "<ul>";
    foreach ($izskats as $key => $value) {
        echo "<li>" . htmlspecialchars($key) . ": " . htmlspecialchars($value) . "</li>";
    }
    echo "</ul>";
    ?>

    <a href="feedback.php">Leave a feedback</a><br>
    <a href="orders-by-customer-names.php">Sorted by customer name</a><br>
    <a href="customer-orders.php">Order list</a><br>
    <a href="contact-sent.php">Feedback sent</a><br>
    <a href="sql_store.php">store</a><br>
    <a href="index.php">first task</a><br>
    <a href="grouped-orders.php">task 6</a> <br><br>
</body>

</html>