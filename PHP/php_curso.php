<!DOCTYPE html>
<html>
<body>

    <p> Para usar uma variavel global dentro de uma função, usar a string global antes de chamar as variaveis em uma função:</p>

        <?php
        $x = 5;
        $y = 10;

        function myTest() {
        global $x, $y;
        $y = $x + $y;
        }

        myTest();
        echo $y;
        ?>



</body>
</html>