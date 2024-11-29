<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Numbers</title>
</head>
<body>
    <h2>Enter a Number</h2>
    <form method="POST">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" min="1" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    function printNumbers($n) {
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 4 == 0 && $i % 6 == 0) {
                echo "Pemrograman Website 2024<br>";
            } elseif ($i % 5 == 0) {
                echo "2024<br>";
            } elseif ($i % 4 == 0) {
                echo "Pemrograman<br>";
            } elseif ($i % 6 == 0) {
                echo "Website<br>";
            } else {
                echo $i . "<br>";
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["number"]);
        echo "<h3>Output:</h3>";
        printNumbers($n);
    }
    ?>
</body>
</html>
