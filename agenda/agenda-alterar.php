<?php 
include "../include/conexao.php";

$id = $_POST['id'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];
$id_paciente = $_POST['id_paciente'];

$sqlAlterar = "UPDATE tb_agenda SET 
data = '{$data}', 
hora = '{$hora}', 
id_medico = '{$id_medico}', 
sala = '{$sala}', 
id_paciente = '{$id_paciente}' 
WHERE tb_agenda.id = {$id}";
    
$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    header('Location:agenda-listar.php?mensagem=alterado');
}else{
    echo "Ocorreu algum erro";
}
?>