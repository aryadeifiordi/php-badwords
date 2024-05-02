<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elaborazione</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $paragrafo = $_POST["paragrafo"];
        $parola_censurare = $_POST["parola_censurare"];

        echo "<h2>Paragrafo originale</h2>";
        echo "<p>$paragrafo</p>";
        echo "<p>Lunghezza: " . strlen($paragrafo) . "</p>";

        $paragrafo_censurato = str_ireplace($parola_censurare, '***', $paragrafo);

        echo "<h2>Paragrafo censurato</h2>";
        echo "<p>$paragrafo_censurato</p>";
        echo "<p>Lunghezza: " . strlen($paragrafo_censurato) . "</p>";
    }
    ?>
</body>
</html>
