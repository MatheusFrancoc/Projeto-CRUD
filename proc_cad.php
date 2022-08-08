<?php
if(!isset($_SESSION)) {
    session_start();
}
include_once("../login/conexao.php");

$nome_prod = filter_input(INPUT_POST,'nome_prod');
$ref= filter_input(INPUT_POST,'ref');
$quantidade= filter_input(INPUT_POST,'quantidade');
$preco= filter_input(INPUT_POST,'preco');

$result_sql = "INSERT INTO `produtos` (`nome_pro`, `ref`, `qtd`, `preco`) VALUES ('$nome_prod' , '$ref' , '$quantidade' , '$preco')";

if(mysqli_query($mysqli,$result_sql)) {
    $_SESSION['mg'] = "<p style ='color:yellow;text-align:center;padding:15px;font-size:20px;'> Cadastro efetuado com sucesso!</p>";
    header("Location:cadastrar.php");
    
}else{
    $_SESSION['mg']= "<p style ='color:red;text-align:center;padding:15px;font-size:20px;'>Cadastro não efetuado! </p> ";
    header("Location:cadastrar.php");
}
?>