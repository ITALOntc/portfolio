<?php
include_once('conexao.php');
if(!empty($_GET['search']))
{
  $data = $_GET['search'];
  $consultar = "select * from produtos where id like'%$data%' or Nome like '%$data%'";
}else{
  $consultar = "select * from produtos";
}
  $result = mysqli_query($conn, $consultar);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <style>
body {
 
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(imag/mc.jfif) ;
 background-repeat:no-repeat;
 background-size:cover;

           

}

.table-bg{
  background: rgba(0,0,0,0.5);
  border-radius: 15px 15px 0 0;
}
.box_search{
  display:flex;
  justify-content: center;
  gap: .5%;
  margin-bottom: 1.5em;
  margin-top:2em;

}

h1{
  text-align:center;
  color: #fff;
  font-family: 'Raleway', sans-serif;
  color:black;
}
 /* nav */
 .container-fluid{
         text-align: center;
         margin-left: 400px;
         
     }
     .form-control{
         margin-left: 30px;
         width: 500px;
     }
     p{
         margin: 0;
         padding: 0;
     }

     .bu{
         margin: 12px;
         margin-right: 50px;

     }
     .dropdown-menu{
         width: 130px;
     }

.container{
  margin-top: 50px;
  max-width: 2000px;
 
  
  
}
.cont1{
 width: 700px;
  text-align: center;
  
margin-left:500px ;
}
button{
    background-color: black;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    margin-left: 10px;
}
input[type=submit],input[type=reset]{
    background-color: black;
    border: none;
    padding: 8px 12px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    margin-left:100px ;
    
}
#form-line jf-required{
  padding: 0;
  margin: 0%;
}

</style>
  </head>
  <body>
      
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
    <div class="container-fluid"  >
      <a class="navbar-brand" href="#">I&G Outlet</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
        <form class="d-flex" width="1000px" role="search">
          <input class="form-control me-2"  type="search" placeholder="O que você procura?" aria-label="Search"  >
          <button class="btn btn-outline-primary" type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>  </button>
        </form>
      
      </div>
    </div>

    
    

    <div class="dropdown">
      <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
      </a>
    
     


</nav>

  <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    
  </nav>
  <div class="m-5">
<h1>Painel de Controle - Gerente</h1>
<br>
</div>
<div class="m-5">
    <a href="cad prod.html">
  <button type="submit" name="cadastrinho" > Cadastrar Produtos</button></a>

<br>
</div>
  <div class="m-5">
    <a href="tabelap.php">
  <button type="submit" name="cadastrinho" >Consultar Produtos</button></a>

<br>
</div>
<div class="m-5">
  <a href="cad.html">
<button type="submit" name="cadastrinho" >Cadastrar cliente</button></a>

<br>
</div>
<div class="m-5">
  <a href="tabela.php">
<button type="submit" name="cadastrinho" >Consultar cliente</button></a>

<br>
</div>






</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  
</html>