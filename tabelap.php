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
<h1>Controle de Produtos</h1>
<br>
</div>

<br><br>
<table class="table table-striped table-sm">
<tr class="table-dark">
    <th> Nome</th>
    <th> Marca</th>
    <th> Cor</th>
    <th> Tamanho</th>
    <th> Preco</th>
    <th>ações</th>
   
</tr>
<?php

// include_once('connect.php');
//         $sql = 'select * from usuario';
//         $conexao = mysqli_query($conn, $sql);

        while ($registros = mysqli_fetch_array($result)) {
            echo "<tr class='table-dark'>";
            echo "<td>" . $registros['Nome'] . "</td>";
            echo "<td>" . $registros['Marca'] . "</td>";
            echo "<td>" . $registros['Cor'] . "</td>";
            echo "<td>" . $registros['Tamanho'] . "</td>";
            echo "<td>" . $registros['Preco'] . "</td>";
            echo "<td>


    <a class='btn btn-primary btn-black' href='updatep.php?id=$registros[id]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>
    </a>

    <a class='btn btn-danger btn-sm' href='deletarp.php?id=$registros[id]'>

    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-recycle' viewBox='0 0 16 16'>
  <path d='M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z'/>
</svg>

  </a>

 </td>";
    echo "</tr>";
}
?>
</div>

<div class="m-5">
  <a href="paginafunc.php">
<button >Voltar</button></a>

<br>
</div>

<script>

var search = document.getElementById('pesquisar');
search.addEventListener("keydown", function(event){
if (event.key === "Enter")
{
  searchData();
}
});
function searchData()
{
window.location = 'tabelap.php?search='+search.value;
}


</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
  
</html>