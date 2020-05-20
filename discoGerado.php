<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>AA Vinil | Venda de Vinil</title>
        <link rel="stylesheet" type="text/css" href="css/normalize.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;500&display=swap" rel="stylesheet"/>

        <!--Bootstrao CSS-->
        <link rel="stylesheet" href="estilo/node_modules/bootstrap/compiler/bootstrap.css"/>
        <link rel="stylesheet" href="estilo/node_modules/boostrap/compiler/style.css"/>

        <!--Bootstrap CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    </head>
    <body>
        <?php
        $host = "localhost";
        $user = "root";
        $password = "";
        $banco = "aavinil";

        //Função para conectar ao servidor
        $link = mysqli_connect($host, $user, $password) or die(mysqli_error());
        //Função para selecionar o banco de dados
        $db = mysqli_select_db($link, $banco);

        function calcular_frete($cep_origem,
                $cep_destino,
                $peso,
                $valor,
                $tipo_do_frete,
                $altura = 6,
                $largura = 20,
                $comprimento = 20) {
            $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?wsdl";
            $url .= "nCdEmpresa=";
            $url .= "&sDsSenha=";
            $url .= "&nCdServico= 04510";
            $url .= "&sCepOrigem" . $cep_origem;
            $url .= "&sCepDestino" . $cep_destino;
            $url .= "&nVlPeso" . $peso;
            $url .= "&nCdFormato=1";
            $url .= "&nVlComprimento" . $comprimento;
            $url .= "&nVlLargura" . $largura;
            $url .= "&nVlAltura" . $altura;
            $url .= "&nVlDiametro=0";
            $url .= "&sCdMaoPropria=n";
            $url .= "&nVlValorDeclarado" . $valor;
            $url .= "&sCdAvisoRecebimento=n";
            $url .= "&StrRetorno=xml";

            $xml = simplexml_load_file($url);

            echo"Valor Pac: R$" . $val->Valor;
        }
        ?>
        <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col3">
                        <a class="logo-link" href="index.html">
                            <h1> AA Vinil</h1>
                        </a>
                    </div>
                    <div class="coluna col5">
                        <form class="form-inline ">
                            <input class="form-control ml-5" type="search" placeholder="Botão não implementado">
                            <button class="btn btn-default" type="submit">Buscar</button>
                        </form>   
                    </div>
                    <div class="coluna col4">
                        <nav>
                            <ul class="menu-inline-sem-marcador">
                                <a href="painelAdmin.php"><li>Painel Admin |</li></a>
                                <a href=""><li>Minha Conta(não implementado)</li></a>
                            </ul>
                        </nav>
                    </div>
                    <div class="linha">
                        <div class="coluna col12">
                            <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                                <ul class="menu-inline-sem-marcador navbar-nav m-auto" > 
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="classicos.php">Classicos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="70.php">Anos 70</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="80.php">Anos 80</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="navbar-brand" href="atuais.php">Atualidade</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="linha">
            <?php
            $id_produto = $_POST['produtovalor'];
            $result_produto = "SELECT * FROM produto WHERE id_prod =  '$id_produto';";
            $resultado_produto = mysqli_query($link, $result_produto);
            $row_result_produto = mysqli_fetch_assoc($resultado_produto);
            ?>
            <div class="coluna col12"><h2>
                    <?php echo $row_result_produto['nome_prod']; ?>
                </h2></div>
        </div>
        <div class="linha">
            <div class="coluna  col7" id="frameTeste">
                <img width=379px height=391px  src="/img/<?php echo $row_result_produto['arquivo_prod'] ?>" alt="<?php echo $row_result_produto['arquivo_prod'] ?>">
                 <!--<img/> -->
                </img>
            </div>
            <div class="coluna col5">
                <h3><?php echo $row_result_produto['produtora_prod'] ?>  -  <?php echo $row_result_produto['nome_prod'] ?></h3>
                <h5>Classificação: <?php echo $row_result_produto['seguimento_prod'] ?></h5>
                <p class ="estoquetrue">Corra! Temos apenas <?php echo $row_result_produto['quantidade_prod'] ?> exemplares!</p>
                <input type="button" value="Comprar" class="comprar"/>
                <input type="text" placeholder="CEP" class="frete" name="cep"/>
                <input type="submit" value="Calcular Frete" class="calculo" onclick="<?php $val = (calcular_frete('36180000', $_POST['cep'], '400')); ?>"/>
            </div>         
        </section>
        <div class="linha">
            <div class="coluna col6">
                <h2>
                    Faixas Contidas no disco:
                </h2>
                <ol>
                    <?php
                    $count = 0;
                    $result_faixa = "SELECT * FROM faixascd WHERE id_produto = '$id_produto';";
                    $resultado_faixa = mysqli_query($link, $result_faixa);
                    while ($row_result_faixa = mysqli_fetch_assoc($resultado_faixa)) {
                        ?>

                        <li><a class="btn btn-link" href="<?php echo $row_result_faixa['link_faixa']; ?>" target="_blank"><h4><?php echo $row_result_faixa['nome_faixa'] ?></h4></a></li>
                        <?php
                    }
                    ?>
                </ol>
            </div>

        </div>    
    </div>

    <div class="footer">
        <div class="linha">
            <footer>
                <div class="coluna col12.">
                    <!-- Aqui a gente coloca algo como contato , Endereço,CNPJ,Etc -->
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
