<?php
include_once('../login/conexao.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pesquisar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_pes.css">
</head>

<body>
<header>
              
              <nav>
                  
                      <li><a href="../cadastro_funcionario/cad_func.php">Cadastrar Funcionário</a></li>
                      <li><a href="../cadastro_produto/cadastrar.php">Cadastrar Produto</a></li>
                      <li><a href="pesquisar.php">Pesquisar</a></li>
                      <li><a href="../listar/listar.php">Listar</a></li>
                      <li><a href="../login/logout.php">Sair</a></li>
                  
              </nav>
           </header>
        
       <a href="pesquisar.php">Voltar</a>
        
        <div class="cad">
            
        <form method="post" action=""> 
            <h1>Pesquisar Produtos</h1>
             <hr>
    
          <label>Nome</label><br>
          <input type="text"name="nome" class="campo"placeholder="Digite aqui o nome do produto para pesquisar!"><br>
          <br> 
          <input type="submit" name="send" value="Pesquisar" class="btn">
            
        </form>
<?php
            if(isset($_SESSION['m'])){
                echo $_SESSION['m'];
                unset($_SESSION['m']);
            }
            ?>   
<?php

$send = filter_input(INPUT_POST,'send', FILTER_SANITIZE_STRING);
if ($send){

    $nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $result_titulo = "SELECT * FROM produtos WHERE nome_pro LIKE '%$nome%' ";
    $resultado_titulo = mysqli_query ($mysqli, $result_titulo);
    while ($row_titulo = mysqli_fetch_assoc ($resultado_titulo)){
      echo "Nome: " . $row_titulo ['nome_pro'] . "<br>";
      echo "Referência: " . $row_titulo ['ref'] . "<br>";
      echo "quantidade: " . $row_titulo ['qtd'] . "<br>";
      echo "Preço: R$ " . $row_titulo ['preco'] . "<br>";
      echo "<a href='../edit_cadastrar/edit_cad.php?id=" . $row_titulo['id'] . "'>Editar</a><br>";
      echo "<a href='../excluir_cadastro/deletar.php?id=" . $row_titulo['id'] . "'>Apagar</a><br><hr>";

}
}
?>

</div>      
<?php
            if(isset($_SESSION['mssg'])){
                echo $_SESSION['mssg'];
                unset($_SESSION['mssg']);
            }
            ?>   
  
    
</body>
</html>