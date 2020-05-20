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
                        <a class="logo-link" href="index.html">
                            <h1> AA Vinil</h1>
                        </a>
                    </div>
                    <div class="coluna col5">
                        <form class="form-inline ">
                            <input class="form-control ml-5" type="search" placeholder="Pesquise produtos...">
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
        <div class="linha">
            <div class="coluna col12">
                <h2>Atuais</h2>
            </div>
            <div class="linha">
                <?php
                $result_produto = "SELECT * FROM produto WHERE seguimento_prod = 'atualidade';";
                $resultado_produto = mysqli_query($link, $result_produto);
                ?>
                <section>
<?php while ($row_result_produto = mysqli_fetch_assoc($resultado_produto)) { ?>  
                        <div class="coluna col3">
                            <a href=""><img src="./img/<?php echo $row_result_produto['arquivo_prod']; ?>" width=200px heigth=200px alt="<?php echo $row_result_produto['arquivo_prod']; ?>"/>
                                <a href=""><h3><?php echo $row_result_produto['nome_prod']; ?></h3>
                                    <p>R$<?php echo $row_result_produto['preco_prod']; ?></p>
                                    <form method="POST" action="/discoGerado.php">
                                        <input type="submit" name="produtovalor" value="<?php echo $row_result_produto['id_prod']; ?>">
                                    </form>
                                    </div>
<?php } ?>
                                </section>
                                </div>
                                <div class="footer">
                                    <div class="linha">
                                        <footer>
                                            <div class="coluna col12">
                                                <!-- Aqui a gente coloca algo como contato , Endereço,CNPJ,Etc -->
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                                </body>
                                </html>
