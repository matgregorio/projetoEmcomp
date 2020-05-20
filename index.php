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

        <link rel="stylesheet" type="text/css" href="css/estilo.css"/>

        <!--Bootstrap CSS-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

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
        ?>
        <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col3">
                        <a class="logo-link " href="index.php">
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
                                <a href=""><li>Minha Conta(off)</li></a>
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
        <!-- Banner -->
        <div class="linha">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./img/slide-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./img/slide-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./img/slide-3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./img/slide-4.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="linha">
        <div class="coluna col12">
            <h2>Listamos aqui os últimos produtos adicionados ao estoque</h2>
            <h3>Discos que marcaram a época</h3>
        </div>

    </div>
    <div class="linha">
        <?php
        $result_produto = "SELECT * FROM produto WHERE seguimento_prod = 'classicos' ORDER BY id_prod DESC LIMIT 4;";
        $resultado_produto = mysqli_query($link, $result_produto);
        ?>


<?php while ($row_result_produto = mysqli_fetch_assoc($resultado_produto)) { ?> 
            <div class="coluna col20" > 
                <a><img src="./img/<?php echo $row_result_produto['arquivo_prod']; ?>" width=200px heigth=200px alt="<?php echo $row_result_produto['arquivo_prod']; ?>"/>
                    <a><h3><?php echo $row_result_produto['nome_prod']; ?></h3>
                        <p>R$<?php echo $row_result_produto['preco_prod']; ?></p>
                        <form method="POST" action="/discoGerado.php">
                            <input type="submit" name="produtovalor" value="<?php echo $row_result_produto['id_prod']; ?>">
                        </form>
                        </div>
<?php } ?>


                    </div>
                    <div class="linha">
                        <div class="coluna col12"><h2>Atualidade</h2></div>
                    </div>
                    <div class="linha">
                        <div class="coluna col12"><h3>Sim, também temos conteudo atual</h3></div>
                    </div>
                    <div class="linha">
                        <?php
                        $result_produto = "SELECT * FROM produto WHERE seguimento_prod = 'atualidade' ORDER BY id_prod DESC LIMIT 4;";
                        $resultado_produto = mysqli_query($link, $result_produto);
                        ?>


<?php while ($row_result_produto = mysqli_fetch_assoc($resultado_produto)) { ?> 
                            <div class="coluna col20" > 
                                <a><img src="./img/<?php echo $row_result_produto['arquivo_prod']; ?>" width=200px heigth=200px alt="<?php echo $row_result_produto['arquivo_prod']; ?>"/>
                                    <a><h3><?php echo $row_result_produto['nome_prod']; ?></h3>
                                        <p>R$<?php echo $row_result_produto['preco_prod']; ?></p>
                                        <form method="POST" action="/discoGerado.php">
                                            <input type="submit" name="produtovalor" value="<?php echo $row_result_produto['id_prod']; ?>">
                                        </form>
                                        </div>
<?php } ?>


                                    </div>
                                    <div class="linha">
                                        <div class="coluna col12"><h2>Anos 70</h2></div>
                                    </div>
                                    <div class="linha">
                                        <?php
                                        $result_produto = "SELECT * FROM produto WHERE seguimento_prod = 'anos70' ORDER BY id_prod DESC LIMIT 4;";
                                        $resultado_produto = mysqli_query($link, $result_produto);
                                        ?>


<?php while ($row_result_produto = mysqli_fetch_assoc($resultado_produto)) { ?> 
                                            <div class="coluna col20" > 
                                                <a><img src="./img/<?php echo $row_result_produto['arquivo_prod']; ?>" width=200px heigth=200px alt="<?php echo $row_result_produto['arquivo_prod']; ?>"/>
                                                    <a><h3><?php echo $row_result_produto['nome_prod']; ?></h3>
                                                        <p>R$<?php echo $row_result_produto['preco_prod']; ?></p>
                                                        <form method="POST" action="/discoGerado.php">
                                                            <input type="submit" name="produtovalor" value="<?php echo $row_result_produto['id_prod']; ?>">
                                                        </form>
                                                        </div>
<?php } ?>


                                                    </div>
                                                    <div class="linha">
                                                        <div class="coluna col12"><h2>Anos 80</h2></div>
                                                    </div>
                                                    <div class="linha">
<?php
$result_produto = "SELECT * FROM produto WHERE seguimento_prod = 'anos80' ORDER BY id_prod DESC LIMIT 4;";
$resultado_produto = mysqli_query($link, $result_produto);
?>


<?php while ($row_result_produto = mysqli_fetch_assoc($resultado_produto)) { ?> 
                                                            <div class="coluna col20" > 
                                                                <a><img src="./img/<?php echo $row_result_produto['arquivo_prod']; ?>" width=200px heigth=200px alt="<?php echo $row_result_produto['arquivo_prod']; ?>"/>
                                                                    <a><h3><?php echo $row_result_produto['nome_prod']; ?></h3>
                                                                        <p>R$<?php echo $row_result_produto['preco_prod']; ?></p>
                                                                        <form method="POST" action="/discoGerado.php">
                                                                            <input type="submit" name="produtovalor" value="<?php echo $row_result_produto['id_prod']; ?>">
                                                                        </form>
                                                                        </div>
<?php } ?>


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
                                                                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                                                                    <script src="estilo/node_modules/jquery/dist/jquery.js"></script>
                                                                    <script src="estilo/node_modules/popper.js/dist/popper.js"></script>
                                                                    <script src="estilo/node_modules/bootstrap/dist/js/bootstrap.js"></script>
                                                                    </body>
                                                                    </html>
