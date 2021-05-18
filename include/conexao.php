<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_consultorio";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<h3>Não foi possível conectar</h3> " . mysqli_connect_error());
}


?>