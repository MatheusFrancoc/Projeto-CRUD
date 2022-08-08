<?php
include_once('../login/conexao.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Funcionário</title>
    <link rel="stylesheet" href="../cadastro_produto/style_cad.css">
</head>
<body>
<header>
              
              <nav>
                  
                      <li><a href="cad_func.php">Cadastrar Funcionário</a></li>
                      <li><a href="../cadastro_produto/cadastrar.php">Cadastrar Produto</a></li>
                      <li><a href="../pesquisar/pesquisar.php">Pesquisar</a></li>
                      <li><a href="../listar/listar.php">Listar</a></li>
                      <li><a href="../login/logout.php">Sair</a></li>
                  
              </nav>
           </header>
           <div class="cad">
    

    <h1>Cadastrar Funcionário</h1>
   
    <form method="POST" action="processa.php">
    
       <label>Nome:</label>
       <input type="text"name="nome"><br>

       <label>Senha:</label>
       <input
       type="password"name="senha">


       <input type="submit" value="Cadastrar" class="btn">
    
    </form>
    <?php
    if(isset($_SESSION['ms'])){
        echo $_SESSION['ms'];
        unset($_SESSION['ms']);
        
    }
    ?>
    <?php
    if(isset($_SESSION['alert'])){
        echo $_SESSION['alert'];
        unset($_SESSION['alert']);
        
    }
    ?>
    <?php
    if(isset($_SESSION['alerta'])){
        echo $_SESSION['alerta'];
        unset($_SESSION['alerta']);
        
    }
    ?>
    
    </div>
</body>
</html>