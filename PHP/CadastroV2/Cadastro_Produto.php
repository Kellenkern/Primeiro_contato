<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastro Produto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="Principal.php">Cadastro</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="Cadastro_Cliente.php">Cadastro de Clientes</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Cadastro_Produto.php">Cadastro de Produtos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <form name="cliente" action="grava.php" method="POST">
                <div class="form-group">
                    <label>Código Produto</label>
                    <input class="form-control" type="text"  name="codigo_produto" disabled=""/>
                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input class="form-control" type="text"  name="nome_produto"/>
                </div>
                <div class="form-group">
                    <label>Tipo</label>
                    <select class="form-control" name="tipo">
                        <option value="un">Unidade</option>
                        <option value="kg">Quilo</option>
                        <option value="l">Litro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option value="informatica">Informática</option>
                        <option value="alimenticio">Alimentício</option>
                        <option value="esportivo">Esportivo</option>
                        <option value="limpeza">Limpeza</option>
                        <option value="vestuário">Vestuário</option>
                        <option value="eletrodomestico">Eletrodoméstico</option>
                        <option value="eletrodomestico">Automotivo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Valor Custo</label>
                    <input class="form-control" type="numeric"  name="valor_custo"/>
                </div>
                <div class="form-group">
                    <label>Valor Venda</label>
                    <input class="form-control" type="numeric"  name="valor_venda"/>
                </div>
                <div class="form-group">
                    <label>Data Fabricação</label>
                    <input class="form-control" type="date"  name="data_fabricacao"/>
                </div>
                <div class="form-group">
                    <label>Data Validade</label>
                    <input class="form-control" type="date"  name="data_validade"/>
                </div>
                <div class="form-group">                
                    <input class="btn btn-primary" type="submit"  name="botão" value="Enviar" />
                    <input class="btn" type="reset"  name="botão" value="Limpar" />
                </div>
            </form>
        </div>
    </body>
</html>