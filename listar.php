<?php
include_once('../login/conexao.php');
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_list.css">
</head>

<body>
<header>
              
              <nav>
                  
                      <li><a href="../cadastro_funcionario/cad_func.php">Cadastrar Funcionário</a></li>
                      <li><a href="../cadastro_produto/cadastrar.php">Cadastrar Produto</a></li>
                      <li><a href="../pesquisar/pesquisar.php">Pesquisar</a></li>
                      <li><a href="listar.php">Listar</a></li>
                      <li><a href="../login/logout.php">Sair</a></li>
                  
              </nav>
           </header>  
      
    <?php
    
    $result_cadastros = "SELECT * FROM produtos ";
    $resultado_cadastros = mysqli_query($mysqli ,$result_cadastros );
    
    ?>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Referência</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row_cadastro = mysqli_fetch_assoc($resultado_cadastros)){
                    echo "<tr>";
                    echo "<td>" . $row_cadastro['nome_pro'] ."</td>"; 
                    echo "<td>" . $row_cadastro['ref'] . "</td>";
                    echo "<td>" . $row_cadastro['qtd'] . "</td>";
                    echo "<td>" . $row_cadastro['preco'] . "</td>";
                    
                    echo "</tr>";
                   
                 }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>