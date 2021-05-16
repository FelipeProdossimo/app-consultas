<?php 
include "../include/conexao.php";

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];

$sqlAlterar = "UPDATE tb_pacientes set
    cpf = '{$cpf}' ,
    nome = '{$nome}' ,
    telefone = '{$telefone}' ,
    nascimento = '{$nascimento}'
    WHERE id = {$id_paciente}";
    
$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    echo "Alterado com sucesso!<br>";
    echo "<a href='pacientes-listar.php'>Voltar</a>";
}else{
    echo "Ocorreu algum erro";
}


?>