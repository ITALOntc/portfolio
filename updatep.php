<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
      body{
            font-family: Arial, Helvetica, sans-serif;
            
        }
        .box{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 40%;
        }
        fieldset{
            border:3px solid white;
        }
        legend{
            border:1px solid ;
            padding:10px;
            text-align: center;
            background-color: black;
            border-radius: 8px;
            color:white;
        }
        .inputBox{
            position: relative;
            color:black;
        }
        .inputUser{
            background: none;
            border:none;
            border-bottom: 1px solid white;
            outline: none;
            color:white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top:0px;
            left:0px;
            pointer-events: none;
            transition: .5s;
        }
        .labelInput
        {
            top: -20px;
            font-size: 12px;
            
        }
        #submit{
            
        }
#data_cadastro{
    border:none;
    padding:8px;
    border-radius: 10px;
    outline: none;  
}
.daty{
    color:white;
    margin-right: 10px;
}
#update{
    
    border:none;
    color:white;
    background-color:black;
    cursor:pointer;
    padding:15px;
    border-radius: 10px;
    font-size:15px;
    width:100%;
}

#update:hover{
    
}
    </style>
</head>
<body>

<?php

if(!empty($_GET['id'])) {
    include_once('conexao.php');
    $codigo = $_GET['id'];
    $sql = "select * from produtos where id=$codigo";
    $conectar = mysqli_query($conn, $sql);

}
   

        if($conectar -> num_rows>0){
            while($registros = mysqli_fetch_assoc($conectar)){
                $Nome = $registros['Nome'];
                $Marca = $registros['Marca'] ;
                $Cor = $registros['Cor'];
                $Tamanho = $registros['Tamanho'];
                $Preco = $registros['Preco'];
              
    
            }
        }
        else{
            header('location:tabelap.php');
        }

?>

  <a href="tabelap.php"> Voltar a lista</a>

    <div class="box">
        <form action="atualizap.php" method="POST">
            <fieldset>
                <legend> <b> Cadastro de Clientes</b></legend>
                <br><br>

         

                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser"  value="<?php echo $Nome ?>"  required>
                    <label for="nome" class="labelInput">Nome Produtos</label>
                </div>
                
                <br><br>
                
                <div class="inputBox">
                    <input type="text" name="Marca" id="Marca" class="inputUser"  value="<?php echo $Marca ?>" required>
                    <label for="Marca"class="labelInput" >Marca</label>
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Tamanho" id="Tamanho" class="inputUser"   value="<?php echo $Tamanho ?>" required>
                    <label for="Tamanho" class="labelInput">Tamanho</label>
                </div>                
                <br><br>
            
                <div class="inputBox">
                    <input type="text" name="Preco" id="Preco" class="inputUser"  value="<?php echo $Preco ?>" required>
                    <label for="Preco"class="labelInput" >Preço</label>
                </div>               
                
                <br><br>
                


                <input type="hidden" name="id" value="<?php echo $codigo?>">
                <input type="submit" Value="Atualizar" name="inserir" id ="update">
            </fieldset>
        </form>
    </div>
</body>
</html>