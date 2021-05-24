<hr>
<div class= "container text-center">
<?php

include "../include/cabecalho.php";
echo "<hr>";
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
    echo "<a class='btn btn-outline-dark' href='agenda-listar.php'><i class='bi bi-arrow-left'></i>Retornar</a>";
}else{
    echo "Ops, ocorreu um erro!";
}

?>

</div>