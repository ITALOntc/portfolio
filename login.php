<?php
// session_start();
// if(empty($_POST)or (empty($_POST['nome']) or (empty($_POST['senha'])))){
//     print "<script> location.href='login.html';</script>";

include('conexao.php');
if(isset($_POST['email']) && isset($_POST['senha'])){
$email = $_POST['email'];
$senha = $_POST['senha'];

$get = mysqli_query($conn, "select * from usuarios where email='$email' and sen='$senha'");
//$get = $conn -> query($sql) or die($conn ->error);
// $get = mysqli_query($conn,$sql);
$num = mysqli_num_rows($get);
//$num = $res ->num_rows;
if($num == 1){
    while ($percorrer = mysqli_fetch_array($get)){
    $adm = $percorrer['adm'];
    $nomes = $percorrer['senha'];
    session_start();
    if($adm ==1){
        $_SESSION['adm']= $nomes;
    // $_SESSION['nome']=$nome;
    // print "<script> location.href='TelaInicial.php';</script>";
}else if($adm == 0){
    $_SESSION['nor']= $nomes;
//     print "<script> alert('Nome de usuário ou senha Invalida');</script>";
//     print "<script> location.href='login.html';</script>";
}else{
    $_SESSION['sup']= $nomes;
}
 print "<script>window.location='index.html'</script>";
}
}else{
    print "Email ou senha Invalido!";
}}

?>