<html>
    <head>
        <title>Calculadora</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="calc.php" method="POST">
            <label>A</label>
            <input type="text" name="A"><br>
            <label>B</label>
            <input type="text" name="B"><br>
            <input type="submit" value="+" name="soma">
            <input type="submit" value="-" name="sub">
            <input type="submit" value="*" name="mult">
            <input type="submit" value="/" name="div">
        </form>
    </body>
</html>