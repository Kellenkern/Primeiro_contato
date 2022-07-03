<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>

        <?php
#var_dump($_POST);
        echo "<h2>Calculadora:</h2>";
        $valor_A = $_POST["A"];
        $valor_B = $_POST["B"];

        $soma = $valor_A + $valor_B;
        $subtracao = $valor_A - $valor_B;
        $multiplicacao = $valor_A * $valor_B;
        $divisao = $valor_A / $valor_B;

        echo "A=" . $valor_A . "<br>";
        echo "B=" . $valor_B . "<br>";
        
        if (isset($_POST["soma"])) {
            echo "<h3>Soma:</h3>";
            echo $valor_A . "+" . $valor_B . "=" . $soma . "<br>";
        }
        if (isset($_POST["sub"])) {
            echo "<h3>Subtração:</h3>";
            echo $valor_A . "-" . $valor_B . "=" . $subtracao . "<br>";
        }
        if (isset($_POST["mult"])) {
            echo "<h3>Multiplicação:</h3>";
            echo $valor_A . "*" . $valor_B . "=" . $multiplicacao . "<br>";
        }
        if (isset($_POST["div"])) {
            echo "<h3>Divisão:</h3>";
            echo $valor_A . "/" . $valor_B . "=" . $divisao . "<br>";
        }
        