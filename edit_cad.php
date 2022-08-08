<?php
session_start();
include_once('../login/conexao.php');


$id= filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
$result_cadastro = "SELECT * FROM produtos WHERE id = '$id' ";
$resultado_cadastro = mysqli_query($mysqli,$result_cadastro);
$row_cadastro = mysqli_fetch_assoc($resultado_cadastro);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Cadastro</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cadastro_produto/style_cad.css">
</head> 
<body>
            <header>
              
                <nav>
                  
                    <li><a href="../cadastro_funcionario/cad_func.php">Cadastrar Funcionário</a></li>
                    <li><a href="../cadastro_produto/cadastrar.php">Cadastrar Produto</a></li>
                    <li><a href="../pesquisar/pesquisar.php">Pesquisar</a></li>
                    <li><a href="../listar/listar.php">Listar</a></li>
                    <li><a href="../login/logout.php">Sair</a></li>
                  
                </nav>
            </header>
          <div class="cad">  
            <section>
          <h1>Editar cadastro de Produtos</h1>
       
          <form method="post" action="proc_edit_cadastro.php">
          <input type="hidden" name="id"value="<?php echo $row_cadastro ['id'];?>">
          
          <li>Nome</li>
          <input type="text"name="nome_pro"value="<?php echo $row_cadastro['nome_pro']; ?> ">

          <li>Referência</li>
          <input type="text"name="ref"value="<?php echo $row_cadastro['ref']; ?> ">

          <li>Quantidade</li>
          <input type="text"name="quantidade"value="<?php echo $row_cadastro['qtd']; ?> ">
          
          <li>Preço</li>
          <input type="text"name="preco" value="<?php echo $row_cadastro['preco']; ?> ">
          
    
          <input type="submit" name="Editar" value="Editar" class="btn">
          
        </form>
    </section>
    
    </div>
    
</body>
</html>

