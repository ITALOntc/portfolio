<?php

$srv = 'localhost';
$user ='root';
$pass ='senac';
$banco ='teste';

$conn = mysqli_connect($srv,$user,$pass,$banco);

if ($conn) {
    echo "Conectado";

} else {
    echo 'Deu errado' .mysqli_connect_error();
}

?>