<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Голосування</title>
</head>
<body bgcolor="#FFE4C4">
    <h1>Голосування</h1>
    <form action="results.php" method="post">
        <p>Оберіть улюблену мову програмування:</p>
        <label>
            <input type="radio" name="vote" value="PHP" required> PHP
        </label><br>
        <label>
            <input type="radio" name="vote" value="JavaScript"> JavaScript
        </label><br>
        <label>
            <input type="radio" name="vote" value="Python"> Python
        </label><br>
        <label>
            <input type="radio" name="vote" value="Java"> Java
        </label><br><br>
        <button type="submit">Голосувати</button>
    </form>
</body>
</html>
