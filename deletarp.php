<?php
if(!empty($_GET['id'])) {
    include_once('conexao.php');
    $codigo = $_GET['id'];

    if(mysqli_query($conn, "DELETE FROM produtos WHERE id='{$codigo}'")) {

        echo "<script>alert('Dados excluidos com sucesso!'); window.location = 'tabelap.php';</script>";
    
      }else {
    
        echo "Não foi possível excluir os dados no Banco de Dados" . $recid . "<br>" . mysqli_error($conn);
    
      }
    
      mysqli_close($conn);
}
   

?>