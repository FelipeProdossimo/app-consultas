<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];
$convenio = $_POST['convenio'];
$diagnostico = $_POST['diagnostico'];


include "../include/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes
(nome, telefone, nascimento, convenio, diagnostico) 
values( 
    '{$nome}' , 
    '{$telefone}', 
    '{$nascimento}',
    '{$convenio}',
    '{$diagnostico}'
    );";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Paciente foi inserido com sucesso!<br>";
    echo "<a href='pacientes-listar.php'>Retornar</a>";
}else{
    echo "Ops, ocorreu um erro!";
}
?>
