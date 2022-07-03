<!DOCTYPE html>
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
        <title>Exemplo 1 - Formulários</title>
    </head>
    <body>
        <div class="container">
        <h3> Campo de formulário para inserir textos </h3> <br />
        <form name="contato" action="grava.php" method="POST"> <br />
            <div class="form-group">
                <label>Informe seu nome:</label>
            <input type="text" class="form-control"  name="nome" value="" size="30" maxlength="10" />
            </div>
            <input type="submit" class="btn btn-primary" name="btn1" id="botao1" value="Enviar" />
        </form>
        </div>
            <?php
            // put your code here
            ?>
    </body>
</html>
