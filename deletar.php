<?php
session_start();
include_once("../login/conexao.php");

$id = 1;
$result_cadastro = "DELETE FROM produtos WHERE id=$id";

if (mysqli_query($mysqli,$result_cadastro)){
    $_SESSION['mssg'] = "<p style ='color:red;text-align:center;padding:15px;font-size:20px;'> Cadastro excluído com sucesso!</p>";
    header("Location:../pesquisar/pesquisar.php");

}else{
    $_SESSION['mssg']= "<p style ='color:red;text-align:center;padding:15px;font-size:20px;'>Cadastro não excluído! </p> ";
    header("Location:../pesquisar/pesquisar.php?id=$id");
}
?>