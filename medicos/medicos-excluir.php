<?php

include "../include/conexao.php";

$id_medico = $_GET['id_medico'];

$sqlExcluir = "DELETE FROM tb_medicos WHERE id = {$id_medico}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    echo "Excluido com sucesso <br>";
    echo "<a href='medicos-listar.php'> Voltar</a>";
}else{
    echo "Ocorreu algum problema";
}

?>