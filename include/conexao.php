<?php 
$servidor = "localhost";
$user = "root";
$password = "";
$banco = "bd_consultorio";

$conexao = mysqli_connect($servidor, $user, $password, $banco);

if(!$conexao){
    die("<h3>Não foi possível conectar</h3> " . mysqli_connect_error());
}


?>