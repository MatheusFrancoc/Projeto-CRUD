<?php
include_once("../login/conexao.php");
session_start();
$id= filter_input(INPUT_POST,'id',FILTER_SANITIZE_NUMBER_INT); 
$nome= filter_input (INPUT_POST,'nome_pro',FILTER_SANITIZE_STRING);
$ref = filter_input(INPUT_POST,'ref',FILTER_SANITIZE_NUMBER_INT);
$quantidade = filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_NUMBER_INT);
$preco = filter_input(INPUT_POST,'preco');    

$result_cadastro = "UPDATE produtos SET nome_pro='$nome',ref='$ref', qtd='$quantidade', preco= '$preco' WHERE id='$id'";
if (mysqli_query($mysqli,$result_cadastro)){
    $_SESSION['m'] = "<p style ='color:yellow;text-align:center;padding:15px;font-size:20px;'> Cadastro editado com sucesso!</p>";
    header("Location:../pesquisar/pesquisar.php");

}else{
    $_SESSION['m']= "<p style ='color:red;text-align:center;padding:15px;font-size:20px;'>Cadastro não editado! </p> ";
    header("Location: editar.php?id=$id");
}