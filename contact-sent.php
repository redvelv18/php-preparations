<!DOCTYPE html>
<html lang="lv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ziņa nosūtīta!</title>
</head>

<body>
    <h1>Thank you for your feedback!</h1>
    <p>Your feedback was succesfully sent.</p>

    <h2>Your feedback:</h2>
    <ul>
        <li><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></li>
        <li><strong>E-mail:</strong> <?php echo htmlspecialchars($_POST['email']); ?></li>
        <li><strong>Feedback:</strong> <?php echo htmlspecialchars($_POST['message']); ?></li>
    </ul>

    <p><a href="feedback.html">Go back</a></p>
    <a href="sql_store.php">Store</a>
    <a href="customer-orders.php">Orders</a>
</body>

</html>