<?php
session_start();
include_once('../login/conexao.php');
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
    <link rel="stylesheet" href="style_cad.css">
</head>
<body>
        <header>
              
        <nav>
            
                <li><a href="../cadastro_funcionario/cad_func.php">Cadastrar Funcionário</a></li>
                <li><a href="cadastrar.php">Cadastrar Produto</a></li>
                <li><a href="../pesquisar/pesquisar.php">Pesquisar</a></li>
                <li><a href="../listar/listar.php">Listar</a></li>
                <li><a href="../login/logout.php">Sair</a></li>
            
        </nav>
        
      
     </header>
    <div class="cad">
            <h1>Cadastro de Produtos</h1>
           
            <form  method="POST" action="proc_cad.php">
                
                <li>Nome</li>
                <input type="text" name="nome_prod" >
                
                 <li>Referência</li>
                <input type="text" name="ref">
                
                <li>Quantidade</li>
                <input type="text" name="quantidade" >
                
                 <li>Preço</li>
                <input type="text" name="preco">
                
                <input type="submit"class="btn"
                value="cadastrar"> 
                

            </form>
            <?php
    if(isset($_SESSION['mg'])){
        echo $_SESSION['mg'];
        unset($_SESSION['mg']);
        
    }
    ?>
    </div>
   
</body>
</html>