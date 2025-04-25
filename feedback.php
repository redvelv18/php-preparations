<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 'feedback.html' failā izveidojiet boilerplate kodu, kurā ir arī kontaktu forma ar trim laukiem: vārds, e-pasts un ziņa jeb atsauksmes teksts.
Apstiprinot formu, tās datus aizsūtiet uz citu jaunu failu 'contact-sent.php', kurā lietotājs tiek informēts par veiksmīgu kontaktu 
formas aizpildīšanu un tiek attēloti nosūtītie dati. -->

    <form action="contact-sent.php" method="post">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <br>
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
        <div>
            <label for="message">Feedback:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>

    <a href="feedback.php">Leave a feedback</a><br>
    <a href="orders-by-customer-names.php">Sorted by customer name</a><br>
    <a href="customer-orders.php">Order list</a><br>
    <a href="contact-sent.php">Feedback sent</a><br>
    <a href="sql_store.php">store</a><br>
    <a href="index.php">first task</a><br>
    <a href="grouped-orders.php">task 6</a> <br><br>
    <!--//---------------------------//-->
    <?php

    ?>
</body>

</html>