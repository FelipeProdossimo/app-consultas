<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$crm = $_POST['crm'];
$especialidade = $_POST['especialidade'];


include "../include/conexao.php";
$sqlInserir = "INSERT INTO tb_medicos(nome, telefone, crm, especialidade) values('{$nome}' , '{$telefone}' , '{$crm}' , '{$especialidade}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Médico foi inserido com sucesso!<br>";
    echo "<a href='medicos-listar.php'>Retornar</a>";
}else{
    echo "Ops, ocorreu um erro!";
}
?>