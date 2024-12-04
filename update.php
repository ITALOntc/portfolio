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
    $sql = "select * from usuarios where id=$codigo";
    $conectar = mysqli_query($conn, $sql);

}
   

        if($conectar -> num_rows>0){
            while($registros = mysqli_fetch_assoc($conectar)){
                $nome = $registros['nome'];
                $nome2 = $registros['nome2'] ;
                $email = $registros['email'];
                $telefone = $registros['telefone'];
                $cpf = $registros['cpf'];
                $sen = $registros['sen'];
                $cep = $registros['cep'];
                $rua = $registros['rua'];
                $bairro = $registros['bairro'];
                $cidade = $registros['cidade'];
                $estado = $registros['estado'];
    
            }
        }
        else{
            header('location:tabela.php');
        }

?>

  <a href="tabela.php"> Voltar a lista</a>

    <div class="box">
        <form action="atualiza.php" method="POST">
            <fieldset>
                <legend> <b> Cadastro de Clientes</b></legend>
                <br><br>

         

                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser"  value="<?php echo $nome ?>"  required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                
                <br><br>
                
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser"  value="<?php echo $email ?>" required>
                    <label for="email"class="labelInput" >Email</label>
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser"   value="<?php echo $telefone ?>" required>
                    <label for="name" class="labelInput">Telefone</label>
                </div>                
                <br><br>
            
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser"  value="<?php echo $cpf ?>" required>
                    <label for="cpf"class="labelInput" >cpf</label>
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="sen" id="sen" class="inputUser"  value="<?php echo $sen ?>" required>
                    <label for="sen"class="labelInput" >Senha</label>
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser"  value="<?php echo $cep ?>" required>
                    <label for="cep"class="labelInput" >cep</label>
                </div>            
                <br><br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser"  value="<?php echo $rua ?>" required>
                    <label for="rua"class="labelInput" >Rua</label>
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser"  value="<?php echo $bairro ?>" required>
                    <label for="bairro"class="labelInput" >Bairro</label>
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser"  value="<?php echo $cidade ?>" required>
                    <label for="cidade"class="labelInput" >Cidade</label>
                </div>               
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser"  value="<?php echo $estado ?>" required>
                    <label for="estado"class="labelInput" >estado</label>
                </div>               
                <br><br>
                


                <input type="hidden" name="id" value="<?php echo $codigo?>">
                <input type="submit" Value="Atualizar" name="inserir" id ="update">
            </fieldset>
        </form>
    </div>
</body>
</html>