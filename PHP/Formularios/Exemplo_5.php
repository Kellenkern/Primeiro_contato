<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <title>Exemplo 5 - Formulários</title>
    </head>
    <body>
        <h3> Campos de formulários tipo "select" </h3> <br /> <p>
        <form name="contato" action="grava.php" method="POST">
            <label>Cargo pretendido:</label>
            <select name="cargo">
                <option>Analista de Sistemas</option>
                <option selected="selected">Programador Java</option>
                <option> DBA Oracle </option>
                <option> Analista de Redes</option>
                <option> Gerente de TI</option>
            </select> <br /> <p>
                <label>Indique o Sistema Operacional que você utiliza:</label>
                <select name = "so">
                    <option> Windows 7</option>
                    <option> Windows Vista</option>
                    <option> Windows XP</option>
                    <option selected="selected"> Linux </option>
                    <option> Solaris </option>
                </select>
                <input type="submit" name="btn1" id="botao1" value="Enviar" />
        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
