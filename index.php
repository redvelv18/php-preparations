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

    <a href="feedback.php">Leave a feedback</a>
</body>

</html>