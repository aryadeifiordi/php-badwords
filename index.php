<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Inserisci il paragrafo e la parola da censurare</h2>
    <form action="process.php" method="post">
        <label for="paragrafo">Paragrafo:</label><br>
        <textarea id="paragrafo" name="paragrafo" rows="4" cols="50"></textarea><br>
        <label for="parola_censurare">Parola da censurare:</label><br>
        <input type="text" id="parola_censurare" name="parola_censurare"><br><br>
        <input type="submit" value="Invia">
    </form>
    
</body>
</html>