<?php
if(!isset($_SESSION)) {
    session_start();
}
include_once("../login/conexao.php");
//
if(isset($_POST['nome']) || isset($_POST['senha'])) {

    if(strlen($_POST['nome']) == 0) {
        $_SESSION['alert'] = "<p style ='color:yellow;text-align:center;padding:15px;font-size:20px;'> Preencha seu nome!</p>";

        header("Location:cad_func.php");
    } else if(strlen($_POST['senha']) == 0) {
        $_SESSION['alerta'] = "<p style ='color:yellow;text-align:center;padding:15px;font-size:20px;'> Preencha sua senha!</p>";
        header("Location:cad_func.php");
    }else{

//
$nome = filter_input(INPUT_POST,'nome');
$senha= filter_input(INPUT_POST,'senha');

$result_usuario = "INSERT INTO `usuarios` (`nome`, `senha`) VALUES ('$nome' , '$senha')";
$resultado_usuario = mysqli_query($mysqli,$result_usuario);
}

if(mysqli_insert_id($mysqli)) {
    $_SESSION['ms'] = "<p style ='color:yellow;text-align:center;padding:15px;font-size:20px;'> Cadastro efetuado com sucesso!</p>";
    header("Location:cad_func.php");
    
}else{
    $_SESSION['ms']= "<p style ='color:red;text-align:center;padding:15px;font-size:20px;'>Cadastro não efetuado! </p> ";
    header("Location:cad_func.php");
}
}

