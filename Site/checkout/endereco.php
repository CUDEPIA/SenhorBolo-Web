<?php
session_start();
require_once '../class/perfil.php';

if(isset($_GET['idEnderecoSelecionado'])){
    $_SERVER['idEnderecoPedido'] = $_GET['idEnderecoSelecionado'];
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/adicionarEndereco.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionar endereço</title>
    <link rel="icon" type="image/png" href="../imagens/favicon.png"/> 
</head>

<body>
<header>
        <div id="caixao">
            <div class="conteudoHeader">
                <a href="../home/index.php"><img src="../imagens/logay.png" alt="logo escrito senhor bolo" width="258" height="50"></a>
                <div class='searchHolder'>
                        <input type="text" id="searchbig" placeholder="Digite para pesquisar" width="522" height="56" />
                        <button id="enterinvisible" onclick="myFunction();">
                        <img src="../imagens/lupa.png" alt="lupa de pesquisa">
                        </button>
                    </div>    
                    <script>
                        var input = document.getElementById("searchbig");
                            input.addEventListener("keyup", function(event) {
                                if (event.keyCode === 13) {
                                    event.preventDefault();
                                    document.getElementById("enterinvisible").click();
                                }
                        });

                        function myFunction() {
                            window.location.href = "/site/pesquisa/index.php?s=" + document.getElementById('searchbig').value;
                        }
                    </script>
                    <?php 
                if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
                ?>
                <a href="../perfil/index.php" class="linkUsuario">
                    <div class="perfilUsuario">
                        <?php echo("<img src=\"https://thespacefox.github.io/SenhorBolo-Imagens/images/usuario/".$_SESSION["photo"]."\" alt=\"Foto de perfil do usuário\" />"); ?>
                        <h4> <?php echo $_SESSION['name']; ?> <br> <span> Ver perfil </span></h4>
                    </div>
                </a>
                <a href="../carrinho/index.php" class="linkCarrinho">
                    <div class="carrinhoCompras">
                        <span class="material-icons md-30">
                            shopping_cart
                        </span>
                    </div>
                </a>
                <?php 
                }else{
                    echo("<a href=\"../login/index.php\">
                        <button style=\"
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 160px;
                        height: 46px;
                        background-color: #0BBAB3;
                        border: none;
                        font-family: 'Raleway', sans-serif;
                        font-weight: bold;
                        font-size: 20px;
                        color:#fff;
                        border-radius: 13px;\">
                        Fazer Login
                        </button>
                        </a> 

                        <a href=\"../cadastro/index.php\">
                        <button style=\"
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 160px;
                        height: 46px;
                        background-color: #0BBAB3;
                        border: none;
                        font-family: 'Raleway', sans-serif;
                        font-weight: bold;
                        font-size: 20px;
                        color:#fff;
                        border-radius: 13px;\">
                        Fazer cadastro
                        </button>
                        </a> ");
                }
                ?>
            </div>
        </div>
        <div id="caixinha">
            <nav>
                <a href="../pesquisa/index.php">
                    Produtos
                </a>
                <a href="../pedidos/index.php">
                    Meus Pedidos
                </a>
                <a href="../cupons/index.php">
                    Cupons
                </a>
                <a href="../aboutus/index.php">
                    Sobre nós
                </a>
            </nav>
        </div>
    </header>
    <main>
        <div class="selectAddressTitle">
            <span class="material-icons md-50" style="font-size: 40px;color: #434343;">
                format_list_bulleted
            </span>
            <h2> 
                Selecione um endereço
            </h2>
        </div>
    
        <div class="addressList">
            <div class="address">
                <h3> Rua Valê do Cariri, 276 </h3>
                <h4> Vila Nova Mazzei </h4>
                <h4> São Paulo - SP </h4>
                <h4> 02317-060 </h4>
                <input type="button" class="btnSelecionar" value="Selecionar"/>
            </div>
            <div class="address">
                <h3> Rua Valê do Cariri, 276 </h3>
                <h4> Vila Nova Mazzei </h4>
                <h4> São Paulo - SP </h4>
                <h4> 02317-060 </h4>
                <input type="button" class="btnSelecionar" value="Selecionar"/>
            </div>
        </div>

        <div class="addAddressTitle">
            <span class="material-icons md-50" style="font-size: 40px; color: #434343;">
                location_city
            </span>
            <h2> 
                Adicionar um endereço
            </h2>
        </div>

        <script language="JavaScript">
                function cep(){
                const inputValue = document.getElementById("CEP");
                let zipCode = "";

                inputValue.addEventListener("keyup", () => {
                zipCode = inputValue.value;
                if(zipCode)
                if(zipCode.length === 8) {
                    inputValue.value = `${zipCode.substr(0,5)}-${zipCode.substr(5,9)}`;
                    console.log(zipCode); 
                }
                });
            }
        </script>   

        <div class="addAddress">
            <form>
                <div class="firstLine">

                    <div class="todaywewill">
                        <div>
                            <label for="rua">Nome da rua</label><br>
                            <input type="text" id="rua" name="rua">
                        </div>
    
                        <div>
                            <label for="numero" class="numero">Número</label><br>
                            <input type="text" id="numero" name="numero">
                        </div>
                    </div>

                    <div>
                        <label for="bairro">Bairro</label><br>
                        <input type="text" id="bairro" name="bairro">
                    </div>

                </div>
                <div class="secondLine">

                    <div class="todaywewill">
                        <div>
                            <label for="CEP">CEP</label><br>
                            <input type="text" id="CEP" name="CEP" maxlength="8" onkeydown="javascript: cep();">
                        </div>
                        <div>
                            <label for="complemento">Complemento</label><br>
                            <input type="text" id="complemento" name="complemento">
                        </div>
                    </div>

                    <div>
                        <label for="observacao">Observacão</label><br>
                        <input type="text" id="observacao" name="observacao">
                    </div>
                </div>

                <input type="button" class="btnAdicionar" value="Adicionar endereço"/>
            </form>    
        </div>

        <a href="../checkout/index.php">
            <input type="button" class="prosseguirPagamento" value="Prosseguir para o pagamento"/>
        </a>


    </main>

    <footer>
        <div class="tudinho">
            <div>
                <a href="../home/index.php">
                    <img class="logro" src="../imagens/logay.png" alt="logo escrito senhor bolo">
                </a>
                <p class="dev">
                    Desenvolvido pelo grupo CDP Inc.
                </p>
            </div>
            <div class="textito">
                <p class="ti">
                    Nos localizamos em:
                </p>
                <p>
                    R. Humaitá, 638 - Bela Vista, 

                </p>
                <p>
                    São Paulo - SP, 01321-010
                </p>
            </div>
            <div class="textito"> 
                <p class="ti">
                    Algum problema ou dúvida?
                </p>
                <p>
                    +55 11 98736-0701
                </p>
                <p>
                    edson.koshikumo@etec.sp.gov.br
                </p>
            </div>
            <div class="redes">
                <p>
                    Siga-nos
                </p>
                <div>
                    <img src="../imagens/instagram.png" alt="logo do instagram">
                    <img src="../imagens/twitter-logo-7.png" alt="logo do twitter"> 
                </div>
            </div>
            <div class="app">
                <p>
                    Baixe Nossos Aplicativos
                </p>
                <div class="zap">
                    <img class="aba" src="../imagens/DownloadAndroid.png" alt="Faça o Download do aplicativo no Android">
                    <img class="abb" src="../imagens/appstore.png" alt="Faça o Download do aplicativo na AppStore">
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>