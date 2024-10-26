<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>

    <h1>Multiplication Table Generator</h1>

    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["number"]);

        echo "<h2>Multiplication Table for $num</h2>";
        echo "<table border='1' cellpadding='5'>";

        echo "<tr><th></th>";
        for ($i = 1; $i <= $num; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($row = 1; $row <= $num; $row++) {
            echo "<tr><th>$row</th>"; 
            for ($col = 1; $col <= $num; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>

</body>
</html>
