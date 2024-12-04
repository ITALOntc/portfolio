<?php
include_once('conexao.php');

if (isset($_POST['inserir'])) {
    $codigo = $_POST['id'];
    $Nome = $_POST['Nome'];
    $Marca = $_POST['Marca'];
    $Cor = $_POST['Cor'];
    $Tamanho = $_POST['Tamanho'];
    $Preco = $_POST['Preco'];
   

    $query =  "update produtos set Nome='$Nome', Marca='$Marca', Cor='$Cor', Tamanho='$Tamanho', Preco='$Preco'  where id='$codigo';";
  
      
    $conexao = mysqli_query($conn, $query);
}

header('location: tabelap.php');



?>