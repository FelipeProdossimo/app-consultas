<?php

$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];
$id_paciente = $_POST['id_paciente'];


include "../include/conexao.php";
$sqlInserir = "INSERT INTO `tb_agenda` 
(id, data, hora, id_medico, sala, id_paciente) 
VALUES (
    NULL, 
    '{$data}', 
    '{$hora}', 
    '{$id_medico}', 
    '{$sala}', 
    '{$id_paciente}'
);";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Agendado com sucesso!<br>";
    echo "<a href='agenda-listar.php'>Retornar</a>";
}else{
    echo "Ops, ocorreu um erro!";
}
?>
