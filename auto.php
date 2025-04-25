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
    <a href="auto.php">task 8</a><br>
    <a href="grouped-orders.php">task 6</a> <br><br>

    <?php
    //--------------EXAMPLE FROM AI--------------//
    //function showInfo($name, $age) {
    //  echo "Vārds: " . $name . "<br>";
    //  echo "Vecums: " . $age . "<br>";
    //}

    // Funkcijas izsaukums
    //showInfo("Jānis", 30);


    class Auto
    {
        public $marka;
        public $modelis;
        public $gads;


        public function showInfo()
        {
            return "Marka: " . $this->marka . "<br>" .
                "Modelis: " . $this->modelis . "<br>" .
                "Gads: " . $this->gads . "<br>";
        }

        public function __construct($marka, $modelis, $gads)
        {
            $this->marka = $marka;
            $this->modelis = $modelis;
            $this->gads = $gads;
        }
    }


    $auto1 = new Auto("Toyota", "Corolla", 2010);
    $auto2 = new Auto("Volkswagen", "Golf", 2015);


    echo "<strong> Car one:<br></strong>";
    echo $auto1->showInfo();
    echo "<br>";

    echo "<strong> Car two:<br></strong>";
    echo $auto2->showInfo();

    ?>
</body>

</html>