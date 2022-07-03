<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Cadastro Cliente</title>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="Cadastro_Cliente.php">Cadastro de Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Cadastro_Produto.php">Cadastro de Produtos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container">
            <form name="cliente" action="grava.php" method="POST">
                <div class="form-group">
                    <label>Código Cliente</label>
                    <input class="form-control" type="text"  name="codigo_cliente" disabled=""/>
                </div>
                <div class="form-group">
                    <label>Nome Cliente</label>
                    <input class="form-control" type="text"  name="nome_cliente"/>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input class="form-control" type="text"  name="telefone"/>
                </div>
                <div class="form-group">
                    <label>Endereço</label>
                    <input class="form-control" type="text"  name="endereco"/>
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input class="form-control" type="text"  name="telefone"/>
                </div>
                <div class="form-group">
                    <label>Cep</label>
                    <input class="form-control" type="text"  name="cep"/>
                </div>
                <div class="form-group">
                    <label>Bairro</label>
                    <input class="form-control" type="text"  name="bairro"/>
                </div>
                <div class="form-group">
                    <label>Cidade</label>
                    <input class="form-control" type="text"  name="cidade"/>
                </div>
                <div class="form-group">
                    <label>UF</label>
                    <select class="form-control" name="UF">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit"  name="botão" value="Enviar" />
                    <input class="btn" type="reset"  name="botão" value="Limpar" />
                </div>
            </form>
        </div>
    </body>
</html>