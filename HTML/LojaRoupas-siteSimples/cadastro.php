<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Clothing Shop </title>
        <link REL="SHORTCUT ICON" HREF="favicon.ico">
        <link rel="stylesheet" type="text/css" href="style_cad.css">
    </head>
    <body>
        <Header>
            <ul class="logo">
                <li><a href="Home 2.php"> <img class="item_img" src="logo.png" width="200" title="Página inicial"> </a></li>
                <li><div class="search">
                        <Input class="input_search" type="search" value="" name="q" placeholder="O que você procura?">
                        <button class="button_submit" type="submit"><img src="lupa.png" width="10" title="Pesquisar"></button>
                    </div> </li>
                <ul class="wishlist">
                    <li><div class="wishlist_coração">
                        <a class="coração" title="Cadastrar-se" href="#"><img src="user.png" width="30"></a>  
                    </div></li>
                    <li><div class="wishlist_coração">
                        <a class="coracao" title="Meus Favoritos" href="#"><img src="coração.png" width="30"></a>
                    </div> </li>
                    <li><div class="wishlist_coração">
                        <a class="carrinho" title="Carrinho" href="#"><img src="carrinho.png" width="30"></a>   
                    </div></li>
                </ul>  
            </ul>  
        </Header>
        <nav>
            <ul class="menu">
                <li><a href="#">SAIAS</a>
                    <ul>
                        <li><a class="item_menu" title="saias" href="#"><strong>Marselha</strong></a></li>
                        <li><a class="item_menu" title="saias" href="#"><strong>Plissada Rosê</strong></a></li>
                        <li><a class="item_menu" title="saias" href="#"><strong>Xadrez Azul Marinho</strong></a></li>
                    </ul>
                </li>
                <li><a href="#">VESTIDOS</a>
                    <ul>
                        <li><a class="item_menu" title="vesidos" href="#"><strong>Orleans - Cinza</strong></a></li>
                        <li><a class="item_menu" title="vesidos" href="#"><strong>Laise Terracota</strong></a></li>
                        <li><a class="item_menu" title="vesidos" href="#"><strong>Floral Azul</strong></a></li>
                    </ul>
                </li>
                <li><a href="#">BLUSAS</a>
                    <ul>
                        <li><a class="item_menu" title="blusas" href="#"><strong>Manga Curta</strong></a></li>
                        <li><a class="item_menu" title="blusas" href="#"><strong>Manga 3/4</strong></a></li>
                    </ul>
                </li>                
            </ul>
        </nav>
        <section>
            <div class="background_cad">
                <div id="cadastro">
                    <form method="POST" action="">
                        <h1 class="titulo">Cadastro</h1>

                        <p>
                            <label for="nome_cad">Seu nome</label>
                            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Informe seu nome">
                        </p>

                        <p>
                            <label for="telefone_cad">Seu telefone</label>
                            <input id="telefone_cad" name="telefone_cad" required type="tel" placeholder="Informe seu telefone com DDD">
                        </p>

                        <p>
                            <label for="endereco_cad">Seu endereço</label>
                            <input id="endereco_cad" name="endereco_cad" required type="text" placeholder="Informe sua rua, numero">
                        </p>

                        <p>
                            <label for="bairro_cad">Seu bairro</label>
                            <input id="bairro_cad" name="bairro_cad" required type="text" placeholder="Informe seu bairro">
                        </p>             

                        <p>
                            <label for="cidade_cad">Sua cidade</label>
                            <input id="cidade_cad" name="cidade_cad" required type="text" placeholder="Informe sua cidade">
                        </p>

                        <p>
                            <label for="estado_cad">Seu estado</label>
                            <input id="estado_cad" name="estado_cad" required type="text" placeholder="Informe seu estado">
                        </p>
                
                        <p>
                            <label for="email_cad">Seu e-mail</label>
                            <input id="email_cad" name="email_cad" required type="email" placeholder="Digite seu email">
                        </p>

                        <p>
                            <label for="senha_cad">Sua senha</label>
                            <input id="senha_cad" name="senha_cad" required type="password" placeholder="Digite sua senha">
                        </p>

                        <p>
                            <label for="senha2_cad">Confirmar senha</label>
                            <input id="senha2_cad" name="senha2_cad" required type="password" placeholder="Digite novamente sua senha">
                        </p>

                        <p>
                            <input type="reset" value="Limpar">
                        </p>
                        <p>
                            <input type="submit" value="Cadastrar">
                        </p>

                        <p class="link_login">
                            <a class="fazer_login" href="">Fazer Login</a>
                        </p>

                    </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer">
                <ul class="footer_list">
                    <li class="li_conteudo">
                        <ul>
                            <li class="li_titulo"><strong>Categorias</strong></li>
                            <li class="li_conteudo"><a href="#">Saias</a></li>
                            <li class="li_conteudo"><a href="#">Vestido</a></li>
                            <li class="li_conteudo"><a href="#">Blusas</a></li>
                        </ul>  
                    </li>
                    <li>
                        <ul>
                            <li class="li_titulo"><strong>Conteúdo</strong></li> 
                            <li class="li_conteudo"><a href="#">Guia de Medidas</a></li>
                            <li class="li_conteudo"><a href="#">Fale conosco</a></li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="li_titulo"> <strong>Atendimento</strong></li>
                            <li class="li_conteudo"><img src="email.png" width="20" align="center" style="margin-bottom: 5px;" > E-mail</li>
                            <li class="li_conteudo">atendimento@clothingshop.com</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="li_titulo"><strong>Siga-nos!</strong></li>
                            <li class="li_conteudo">
                                <a href="#"><img src="instagram.png" width="25" title="Instagram"></a> 
                                <a href="#"><img src="facebook.png" width="25" title="Facebook" ></a></li>
                        </ul>
                    </li>   
                </ul>
                <br>
            </div>
        </footer>
    </body>
</html>