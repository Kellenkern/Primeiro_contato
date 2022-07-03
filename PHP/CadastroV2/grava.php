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
        <title>Exemplo 8 - Formulários</title>
    </head>
    <body>
        <h3> Gravando .... </h3> <br />

        <?php
        //Forma de mostrar todas as informações de uma variável
        echo var_dump($_POST);

        //Uma outra forma de mostrar os dados da forma que achar melhor, podendo configurar o echo
        echo '<br>';
        foreach ($_POST as $nome_campo => $valor) {
            echo $nome_campo . '=>' . $valor . ', ';
        }

        //Uma maneira de armazenar as informações em arquivo
        $fp = fopen('registros_submetidos.txt', "a"); //abre o arq. dados.txt somente gravação
        $quebra = chr(13) . chr(10); //essa é a quebra de linha
        foreach ($_POST as $nome_campo => $valor) {
            fwrite($fp, $nome_campo . '=>' . $valor . ', ');
        }
        fwrite($fp, $quebra);
        fclose($fp);
        ?>
    </body>
</html>
