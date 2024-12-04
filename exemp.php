<?php
session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="pag.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<?php 

if (isset($_SESSION['adm'])){
  print "<h5 style='color:#fff'> Bem vindo(a), ".$_SESSION['adm'].' - perfil Administrador';
  print " <a href='logout.php' class='btn btn-danger'> Sair </a></h5>";

}else if(isset($_SESSION['nor'])){
  print "<h5 style='color:#fff'> Bem vindo(a), ".$_SESSION['nor'].' - perfil Operador';
  print " <a href='logout.php' class='btn btn-danger'> Sair </a></h5>";

}else if(isset($_SESSION['sup'])){
  print "<h5 style='color:#fff'> Bem vindo(a), ".$_SESSION['sup'].' - perfil Supergay';
  print " <a href='logout.php' class='btn btn-danger'> Sair </a></h5>";

}else{
  print" <script> location.href='login.html';</script>";
}


    ?>
 
  <div class="container">
    <h1>Controle de Usuários</h1>
    <div class="button-container">
      
      <div>
        <a href="cadastro.html"><img src="person.png" >
      <button class="button">Cadastrar Usuário</button></a>
      
    </div>
    <div>
      <a href="tabela.php">
      <img src="lixo.png">
      <button class="button">Excluir</button>
      </a>
    </div>  
    <div>
      <a href="tabela.php">
      <img src="lupa.png" >
      <button class="button">Consultar Usuário</button>
      </a>
    </div>
    <div>
      <a href="update.php">
<img src="alt.png" >
      <button class="button">Atualizar</button>
      </a>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
</body>
</html>