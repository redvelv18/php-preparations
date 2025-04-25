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

    <a href="feedback.php">Leave a feedback</a><br>
    <a href="orders-by-customer-names.php">Sorted by customer name</a><br>
    <a href="customer-orders.php">Order list</a><br>
    <a href="contact-sent.php">Feedback sent</a><br>
    <a href="sql_store.php">store</a><br>
    <a href="index.php">first task</a><br>
    <a href="auto.php">task 8</a><br>
    <a href="grouped-orders.php">task 6</a> <br><br>
</body>

</html>