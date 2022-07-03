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
        <title>Exemplo 1 - Formulários</title>
    </head>
    <body>
        <h3> Campo de formulário para inserir textos </h3> <br />
        <form name="contato" action="grava.php" method="POST"> <br />
            Informe seu nome:
            <input type="text" name="nome" value="" size="30" maxlength="10" />
            <input type="submit" name="btn1" id="botao1" value="Enviar" />
        </form>
            <?php
            // put your code here
            ?>
    </body>
</html>
