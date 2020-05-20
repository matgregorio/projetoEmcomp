<!DOCTYPE html>
<html>
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

        <div class="linha">
            <h2>Painel do Administrador</h2>
            <form method="POST" action="/php/preencherDisco.php" enctype="multipart/form-data">

                <h3>Cadastro de novo Disco</h3>
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome do Disco</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:Beatles" name="nomeDisco">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Preço do CD</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="ex:12.50" name="precoDisco">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Quantidade em estoque</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:30" name="quantidadeEstoque">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Produtora</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ex:gravadora" name="produtoraDisco">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Selecione o seguimento</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="seguimento">
                        <option value="classicos">Clássicos</option>
                        <option value="anos70">Anos 70</option>
                        <option value="anos80">Anos 80</option>
                        <option value="atualidade">Atualidade</option>
                    </select>
                    </br>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Capa do disco</label>
                        <input type="file" name="arquivo" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    </br>

                    <button type="submit" class="btn btn-primary">Salvar dados</button>
            </form> 
            </br>
            <form method="POST" action="/php/preencherFaixa.php">
                <h3>Cadastro de nova faixa</h3>
                <div class="form-group">
                    <label for="formGroupExampleInput" >Nome da faixa</label>
                    <input type="text" class="form-control" placeholder="name musica" name="nomeFaixa">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput" >Nome do compositor</label>
                    <input type="text" class="form-control" placeholder="ex beatles" name="compositor">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput" >Link da faixa</label>
                    <input type="text" name="link" class="form-control" placeholder="ex:youtube.com/..." >
                </div>
                <label for="exampleFormControlSelect1">Disco que a faixa pertence</label>
                <select class="form-control" name="discoPertencente">
                    <option>Selecione</option>
                    <?php
                    $result_produto = "SELECT * FROM produto";
                    $resultado_produto = mysqli_query($link, $result_produto);
                    while ($row_result_produto = mysqli_fetch_assoc($resultado_produto)) {
                        ?>
                        <option value= "<?php echo $row_result_produto['id_prod']; ?>"><?php echo $row_result_produto['nome_prod']; ?>
                        </option> <?php
                    }
                    ?>
                </select>
                </br>
                <input type="submit" value="Salvar Dados" name="submit" class="btn btn-primary">
                </div>
            </form>





    </body>
</html>
