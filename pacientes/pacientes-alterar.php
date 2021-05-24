<?php 
include "../include/conexao.php";

$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nascimento = $_POST['nascimento'];

$convenio = "";
if(isset($_POST['convenio'])){
 $convenio = $_POST['convenio'];
};

$diagnostico = $_POST['diagnostico'];


$sqlAlterar = "UPDATE tb_pacientes SET
    nome = '{$nome}' ,
    telefone = '{$telefone}' ,
    nascimento = '{$nascimento}' ,
    convenio = '{$convenio}' ,
    diagnostico = '{$diagnostico}'
    WHERE id = {$id_paciente};";
    

$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    echo "Alterado com sucesso!<br>";
    echo "<a href='pacientes-listar.php'><i class='bi bi-arrow-left'>Voltar</a>";
}else{
    echo "Ocorreu algum erro";
}


?>