<?php
include_once('conexao.php');

if (isset($_POST['inserir'])) {
    $codigo = $_POST['id'];
    $nome = $_POST['nome'];
    $nome2 = $_POST['nome2'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $sen = $_POST['sen'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $query =  "update usuarios set nome='$nome', nome2='$nome2', email='$email', telefone='$telefone', cpf='$cpf', sen='$sen', cep='$cep', rua='$rua', bairro='$bairro', cidade='$cidade', estado='$estado' where id='$codigo';";
  
      
    $conexao = mysqli_query($conn, $query);
}

header('location: tabela.php');



?>